<?php

namespace Modules\User\Http\Requests;

use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\BasicModel;

trait ValidationRole
{
    public function __validationAddRole($request)
    {
        $validator = Validator::make($request, [
            'name' => 'required',
            'permissions' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'])
            ], 400);
        }
    }
}
