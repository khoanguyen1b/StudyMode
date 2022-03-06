<?php

namespace Modules\Media\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;

class MediaFile extends Model
{
    protected $table = 'media_files';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'file_name',
        'file_path_normal',
        'file_path_thumbnail',
        'file_size',
        'file_type',
        'file_extension',
        'create_user'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public static function create($file, $filename, $output, $type = null): ?object
    {
        $data = new MediaFile();
        $data->file_name = $filename;
        $data->file_path_normal = $output['normal'] ?? '';
        $data->file_path_thumbnail = $output['thumbnail'] ?? '';
        $data->file_size = empty($type) ? $file->getSize() : (int)(strlen(rtrim($file, '=')) * 0.75);
        $data->file_type = empty($type) ? $file->getMimeType() : 'image/'.substr($filename, strpos($filename, ".")+1);
        $data->file_extension = empty($type) ? $file->getClientOriginalExtension() :  substr($filename, strpos($filename, ".")+1);
        $data->create_user = Auth::id();
        $data->save();

        return $data;
    }

    public static function getList($fileIDs): ?array
    {
        $files = MediaFile::whereIn('id', $fileIDs)->get()->toArray();
        return $files;
    }

    public static function storeFileS3($request)
    {
        $files = $request->file('files');
        $output = [];
        $mediaFiles = [];
        $fileIDs = [];

        $urlS3 = Config::get('filesystems.disks.s3.url');

        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $mimeType = $file->getClientMimeType();
            $fileExtension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $type = explode('/', $mimeType);
            $filename = md5(time()) . '_' . $fileName;
            if ($type[0] == 'image') {
                $thumbnail = \Image::make($file)->orientate()->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->stream();
                Storage::disk('s3')->put(
                    Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/thumbnail/' . $filename,
                    $thumbnail->__toString(),
                    'public'
                );
                $output['thumbnail'] = $urlS3 . '/' . Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/thumbnail/' . $filename;
                $output['normal'] = $urlS3 . '/' . $file->store(
                    Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/normal',
                    's3'
                );
            } else {
                $output['video'] = $urlS3 . '/' . $file->store(
                    Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/video/',
                    's3'
                );
            }

            if ($output) {
                try {
                    $mediaFile = MediaFile::create($file, $filename, $output, null);
                    array_push($mediaFiles, $mediaFile);
                    array_push($fileIDs, $mediaFile->id);
                } catch (\Exception $e) {
                    Storage::disk('s3')->delete($output);
                }
            }
        }

        $data = [
            'files' => $mediaFiles,
            'IDs'   => $fileIDs
        ];

        return $data;
    }

    public static function storeFileLocal($request, $module)
    {
        if (!$request->hasfile('files')) {
            return [
                'files' => [],
                'IDs'   => []
            ];
        }

        $module = strtolower($module);
        $url = Config::get('filesystems.disks.public.url');
        $files = $request->file('files');
        $mediaFiles = [];
        $fileIDs = [];

        if (!str_ends_with($url, '/')) {
            $url .= '/';
        }

        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $mimeType = $file->getClientMimeType();
            $type = explode('/', $mimeType);
            $filename = md5(time()) . '_' . $fileName;
            $output = [];

            if ($type[0] == 'image') {
                $path = $file->storeAs($module, $filename, 'public');
                $thumbnail = \Image::make($file)->orientate()->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->stream();
                Storage::disk('public')->put(
                    $module . '/thumbnail/' . $filename,
                    $thumbnail->__toString()
                );
                $output['thumbnail'] = $url . $module . '/thumbnail/' . $filename;
                $output['normal'] = $url . $path;
            } else {
                $path = $file->storeAs($module . '/video/', $filename, 'public');
                $output['normal'] = $url . $path;
            }

            try {
                $mediaFile = MediaFile::create($file, $filename, $output);
                $mediaFiles[] = $mediaFile;
                $fileIDs[] = $mediaFile->id;
            } catch (\Exception $e) {
                Storage::disk('public')->delete(array_values($output));
            }
        }

        $data = [
            'files' => $mediaFiles,
            'IDs'   => $fileIDs
        ];

        return $data;
    }

    public static function storeBase64Local($file, $module, $filename)
    {
            $url = Config::get('filesystems.disks.public.url');
            $module = strtolower($module);

            if (!str_ends_with($url, '/')) {
                $url .= '/';
            }

            $base64_str = substr($file, strpos($file, ",")+1);
            //decode base64 string
            $file = base64_decode($base64_str);

            Storage::disk('public')->put($module . '/' . $filename, $file);

            $thumbnail = \Image::make($file)->orientate()->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->stream();
            Storage::disk('public')->put(
                $module . '/thumbnail/' . $filename,
                $thumbnail->__toString()
            );
            $output['thumbnail'] = $url . $module . '/thumbnail/' . $filename;
            $output['normal'] = $url . $module . '/' . $filename;

            try {
                $mediaFile = MediaFile::create($file, $filename, $output, 'base64');
                $mediaFiles[] = $mediaFile;
                $fileIDs[] = $mediaFile->id;
            } catch (\Exception $e) {
                Storage::disk('public')->delete(array_values($output));
            }

            $data = [
                'files' => $mediaFiles,
                'IDs'   => $fileIDs
            ];
    
            return $data;

        }

        public static function storeBase64S3($file, $module, $filename)
    {
            $url = Config::get('filesystems.disks.public.url');
            $module = strtolower($module);

            if (!str_ends_with($url, '/')) {
                $url .= '/';
            }

            $base64_str = substr($file, strpos($file, ",")+1);
            //decode base64 string
            $file = base64_decode($base64_str);

            $thumbnail = \Image::make($file)->orientate()->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->stream();

            Storage::disk('s3')->put(
                Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/thumbnail/' . $filename,
                $thumbnail->__toString(),
                'public'
            );

            $output['thumbnail'] = $urlS3 . '/' . Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/thumbnail/' . $filename;
            $output['normal'] = $urlS3 . '/' . $file->store(
                Config::get('filesystems.disks.s3.env') . '/' . $request['module'] . '/' . $request['module_id'] . '/normal',
                's3'
            );

            try {
                $mediaFile = MediaFile::create($file, $filename, $output, 'base64');
                $mediaFiles[] = $mediaFile;
                $fileIDs[] = $mediaFile->id;
            } catch (\Exception $e) {
                Storage::disk('s3')->delete($output);
            }

            $data = [
                'files' => $mediaFiles,
                'IDs'   => $fileIDs
            ];
    
            return $data;

        }
}
