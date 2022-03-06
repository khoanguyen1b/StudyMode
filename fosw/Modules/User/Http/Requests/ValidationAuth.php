<?php

namespace Modules\User\Http\Requests;

use Illuminate\Support\Facades\Validator;
use Modules\FoCore\Entities\BasicModel;
use Modules\User\Entities\User;

trait ValidationAuth
{
    public function __loginValidation($request)
    {
        $validator = Validator::make($request, [
            'mobile_or_email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            $quantities = ['password' => 8];
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], $quantities)
            ], 400);
        }
    }

    public function __logoutValidation($request)
    {
        $validator = Validator::make($request, [
            'device_token' => 'required'
        ]);
        if ($validator->fails()) {
            $quantities = ['password' => 8];
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], $quantities)
            ], 400);
        }
    }

    private function __verifySendSMSValidation($request)
    {
        $validator = validator($request, [
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], [])
            ], 400);
        }
    }

    private function __verifySMSValidation($request)
    {
        $validator = validator($request, [
            'mobile' => 'required',
            'code' => 'required',
            'device_token' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => BasicModel::validateMessage($validator->failed(), $request['lang'], [])
            ], 400);
        }
    }

    private function __resetPasswordValidation($request)
    {
        $validator = validator($request, [
            'mobile' => 'required',
            'code' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $this->__getValidateMessage($validator, $request)
            ], 400);
        }
    }

    private function __resetPasswordWithEmailValidation($request)
    {
        $validator = validator($request, [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $this->__getValidateMessage($validator, $request)
            ], 400);
        }
    }

    private function __verifyCodeForgotPasswordValidation($request)
    {
        $validator = validator($request, [
            'mobile' => 'required',
            'code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $this->__getValidateMessage($validator, $request)
            ], 400);
        }
    }

    private function __getValidateMessage($validator, $request, $quantities = [])
    {
        return BasicModel::validateMessage(
            $validator->failed(),
            $request['lang'],
            $quantities
        );
    }
}
