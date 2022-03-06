<?php

namespace Modules\FoCore\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BasicModel extends Model
{
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)Str::uuid();
        });
    }

    public static function addActiveGlobalScope()
    {
        static::addGlobalScope('active', function ($query) {
            $query->where('is_active', true);
        });
    }

    public static function validateMessage($validatorError, $lang, $quantities = [], $size = null)
    {
        $key = key($validatorError);
        $attribute = __('focore::fields.' . $key, [], $lang);
        $typeError = key(collect($validatorError)->first());
        $quantity = empty($quantities[$key]) ? '' : $quantities[$key];
        return __('focore::validates.' . $typeError, ['attribute' => $attribute, 'quantity' => $quantity, 'size' => $size], $lang);
    }

    public static function successMessage($key, $type, $lang)
    {
        $object = __('basic.' . $key, [], $lang);
        return __('notifications.' . $type, ['object' => $object], $lang);
    }

    public static function errorMessage($type, $lang)
    {
        return __('errors.' . $type, [], $lang);
    }

    public static function getMessageByKey($name, $key, $lang, $quantity)
    {
        $attribute = __('basic.' . $key, [], $lang);
        return __($name, ['attribute' => $attribute, 'quantity' => $quantity], $lang);
    }

    public static function generateRandomNumber($length)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function searchCriteria(
        $class,
        $request,
        $param_criterias = [],
        $param_selects = [],
        $param_joins = [],
        $param_withs = [],
        $sort_create_at = true,
        $param_left_joins = [],
        $param_right_joins = [],
        $param_conditionals = [],
        $param_whereIn = []
    ) {
        $data = $class::query();
        if (!empty($param_selects)) {
            $data->select($param_selects);
        }

        if (!empty($param_joins)) {
            foreach ($param_joins as $key => $value) {
                $data->join($key, $value[0], $value[1]);
            }
        }


        if (!empty($param_left_joins)) {
            foreach ($param_left_joins as $key => $value) {
                $data->leftJoin($key, $value[0], $value[1]);
            }
        }

        if (!empty($param_right_joins)) {
            foreach ($param_right_joins as $key => $value) {
                $data->rightJoin($key, $value[0], $value[1]);
            }
        }

        if (!empty($param_withs)) {
            foreach ($param_withs as $key => $value) {
                $data->with($value);
            }
        }

        if (!empty($param_criterias)) {
            foreach ($param_criterias as $key => $value) {
                $data->where($key, 'LIKE', '%' . $value . '%');
            }
        }

        if (!empty($param_conditionals)) {
            foreach ($param_conditionals as $key => $value) {
                $data->where($key, $value);
            }
        }

        if (!empty($param_whereIn)) {
            foreach ($param_whereIn as $key => $value) {
                $data->whereIn($key, $value);
            }
        }

        if (!empty($request['start_date']) && !empty($request['end_date'])) {
            $data->whereBetween('created_at', [$request['start_date'], $request['end_date']]);
        }

        if ($sort_create_at) {
            $data->orderByDesc('created_at');
        }

        if (isset($request['skip']) and isset($request['limit'])) {
            $data->skip($request['skip'])->limit($request['limit']);
        }

        $response['count'] = $data->get()->count();
        $response['data'] = $data->get();
        return $response;
    }

    public static function getTheLastSevenDays($format)
    {
        $data = [];
        for ($i = 1; $i <= 7; $i++) {
            array_push($data, Carbon::parse(Carbon::now()->subDay($i))->format($format));
        }
        return $data;
    }

    public static function getDayForKey($keyDay, $format, $request)
    {
        $data = [];
        switch ($keyDay) {
            case config('generate.dashboard.time.today'):
                $data[] = Carbon::parse(Carbon::now())->format($format);
                break;
            case config('generate.dashboard.time.week'):
                for ($i = 1; $i <= 7; $i++) {
                    $data[] = Carbon::parse(Carbon::now()->subDay($i))->format($format);
                }
                break;
            case config('generate.dashboard.time.month'):
                for ($i = 1; $i <= 30; $i++) {
                    $data[] = Carbon::parse(Carbon::now()->subDay($i))->format($format);
                }
                break;
            case config('generate.dashboard.time.period'):
                $dateFrom = Carbon::parse($request['date_from']);
                $dateTo = Carbon::parse($request['date_to']);
                $diffInDays = $dateFrom->diffInDays($dateTo);
                for ($i = 0; $i <= $diffInDays; $i++) {
                    $data[] = Carbon::parse($request['date_to'])->subDay($i)->format($format);
                }
                break;
        }
        return $data;
    }

    public static function createQrCode($id, $filePath, $size)
    {
        $qr = QrCode::format('png')->size($size)->generate($id);
        $img_qrcode = Image::make($qr);
        Storage::disk('s3')->put($filePath, $img_qrcode->stream());
        $path = Config::get('filesystems.disks.s3.url') . '/' . Config::get('filesystems.disks.s3.env') . '/qr/' . $id . '.png';
        return $path;
    }

    public static function refactorMobileOrEmail( $mobile_or_email, $lang = "en")
    {
        $thisIsMobile = is_numeric($mobile_or_email);
        if ($thisIsMobile) {
            return ['mobile' => $mobile_or_email];
        } elseif ((filter_var($mobile_or_email, FILTER_VALIDATE_EMAIL))) {
            return ['email' => $mobile_or_email];
        }
        return ['message' => trans('core::errors.error_400', [], $lang)];
    }


}
