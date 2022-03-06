<?php

namespace Modules\User\Http\Requests;

use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\BasicModel;

trait ValidationUser
{
    public function __changePasswordValidation($request)
    {
        $validator = Validator::make($request, [
            'current_password' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'])
            ], 400);
        }
    }

    public function __validationUpdateProfile($request, $id)
    {
        $arrayValidate = [
            'full_name' => 'required',
            'mobile' => 'required|unique:users,mobile,' . $id,
            'email' => 'required|unique:users,email,' . $id,
        ];

        $validator = validator($request, $arrayValidate);
        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'])
            ], 400);
        }
    }

    private function __registerValidation($request)
    {
        $validator = Validator::make($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|unique:users'
        ]);
        if ($validator->fails()) {
            $quantities = ['password' => 8];
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], $quantities)
            ], 400);
        }
    }
    
}
