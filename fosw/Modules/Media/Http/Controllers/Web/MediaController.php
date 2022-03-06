<?php

namespace Modules\Media\Http\Controllers\Web;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\BaseActionTrait;
use Modules\Core\Entities\BaseResponseTrait;
use Modules\Media\Http\Requests\ValidationStoreImage;
use Modules\Media\Entities\MediaFile;

class MediaController extends Controller
{
    use BaseActionTrait;
    use BaseResponseTrait;
    use ValidationStoreImage;

    public function storeFileS3(Request $request)
    {
        $validator = $this->__storeImageValidation($request->all());
        if ($validator) {
            return $validator;
        }

        try {
            if ($request->hasfile('files')) {
                $data = MediaFile::storeFileS3($request);

                return response()->json([
                    'message' => trans('media::message.upload_file_success', [], $request['lang']),
                    'data' => $data
                ], 200);
            }

            return response()->json([
                'message' =>trans('core::errors.error_upload', [], $request['lang']),
            ], 409);
        } catch (\Exception $e) {
            return $this->getExceptionError($e, $request);
        }
    }

}
