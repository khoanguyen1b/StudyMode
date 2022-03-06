<?php

namespace Modules\Media\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Modules\Core\Entities\BaseActionTrait;
use Modules\Core\Entities\BaseResponseTrait;
use Modules\Media\Http\Requests\ValidationStoreImage;

class MediaFileController extends Controller
{
    use BaseActionTrait;
    use BaseResponseTrait;
    use ValidationStoreImage;

    public function storeFileLocal(Request $request)
    {
        $validator = $this->__storeImageValidation($request->all());
        if ($validator) {
            return $validator;
        }
        try {
            if ($request->hasfile('files')) {
                $files = $request->file('files');
                $output = [];
                $disk = "public";
                $pathNormal = '/uploads/' . $request['module'] . '/' . $request['module_id'] . '/normal';
                $pathThumbnail = '/uploads/' . $request['module'] . '/' . $request['module_id'] . '/thumbnail/';
                $url = config('filesystems.disks.public.url');
                foreach ($files as $file) {
                    $output['file_name'] = $file->getClientOriginalName();
                    $output['mime_type'] = $file->getClientMimeType();
                    $output['file_extension'] = $file->getClientOriginalExtension();
                    $output['file_size'] = $file->getSize();
                    $type = explode('/', $output['mime_type']);
                    $filename = md5(time()) . '_' . str_replace(' ', '', $output['file_name']);
                    if ($type[0] == 'image') {
                        $thumbnail = Image::make($file)->orientate()->resize(500, 500, function ($constraint) {
                            $constraint->aspectRatio();
                        })->stream();
                        $output['normal'] = $url .'/'. $file->store($pathNormal, $disk);
                        Storage::disk($disk)->put($pathThumbnail . $filename, $thumbnail, $disk);
                        $output['thumbnail'] = $url . $pathThumbnail . $filename;
                    }
                }
                return response()->json([
                    'message' => __('media::message.upload_file_success', [], $request['lang']),
                    'data' => $output
                ], 200);
            }
            return response()->json([
                'message' => __('media::errors.error_upload', [], $request['lang']),
            ], 409);
        } catch (\Exception $e) {
            return $this->getExceptionError($e, $request);
        }
    }
}
