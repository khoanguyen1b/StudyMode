<?php

namespace Modules\FoCore\Entities;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

trait BaseResponseTrait
{
    public function getErrorMessage(\Exception $e, $type, $lang, $status = 400)
    {
        $errorMessage = BasicModel::errorMessage($type, $lang);
        return $this->responseError($e, $errorMessage, $status);
    }

    public function responseError(\Exception $e,  $message,  $status)
    {
        return response()->json(
            [
                'message' => $message,
                'dev' => $e->getMessage()
            ],
            $status
        );
    }

    public function getExceptionError(\Exception $e,  $lang = 'en')
    {
        Log::error($e->getMessage());
        $errorMessage = trans('focore::errors.error_500', [], $lang);
        return $this->responseError($e, $errorMessage, 500);
    }

    public function responseSuccess($data,  $key,  $type,  $lang = "vi")
    {
        $message = BasicModel::successMessage($key, $type, $lang);

        $responseData = [
            'message' => $message,
            'success' => true,
        ];

        if ($data) {
            $responseData['data'] = $data;
        }

        return response()->json($responseData, 200);
    }
}
