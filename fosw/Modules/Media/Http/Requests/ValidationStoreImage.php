<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Support\Facades\Validator;
use Modules\FoCore\Entities\BasicModel;

trait ValidationStoreImage
{
    public function __storeImageValidation($request)
    {
        if (empty($request['files'])) {
            return response()->json([
                'message' => trans('media::message.image_required', [], $request['lang']),
            ], 400);
        }

        foreach ($request['files'] as $key => $val) {
            $type = explode('/', $val->getClientMimeType());
            if ($type[0] == 'image') {
                $rules['files.' . $key] = 'required|mimetypes:image/jpeg,image/png,image/svg,image/svg+xml,image/heic,application/octet-stream|max:25600';
                $size = config('media.upload_max_size_image');
            }else{
                $rules['files.' . $key] = 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:512000';
                $size = config('media.upload_max_size_video');
            }
        }
        $validator = Validator::make($request, $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], [], $size)
            ], 400);
        }
    }

}
