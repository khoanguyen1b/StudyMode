<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\FoCore\Entities\BaseActionTrait;
use Modules\FoCore\Entities\BaseResponseTrait;
use Modules\FoCore\Entities\BasicModel;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\ValidationAuth;
use GuzzleHttp\Client;


class AuthController extends Controller
{
    use BaseActionTrait;
    use BaseResponseTrait;
    use ValidationAuth;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function login(Request $request)
    {
        try {
            $validator = $this->__loginValidation($request->all());
            if ($validator) {
                return $validator;
            }

            $mobileOrEmail = BasicModel::refactorMobileOrEmail($request['mobile_or_email'], $request['lang']);
            if (!empty($mobileOrEmail['message'])) {
                return response()->json(['message' => trans('focore::errors.error_401', [], $request['lang'])], 401);
            }

            $credentials = array_merge($mobileOrEmail, [
                'password' => $request['password']
            ]);
            if (!auth()->attempt($credentials)) {
                return response()->json(['message' => trans('focore::errors.error_401', [], 'en')], 401);
            }

            $user = new User();

            $responseUser = $user->responseLogin();
            return response()->json($responseUser, 200);
        } catch (\Exception $e) {
            return $this->getExceptionError($e, $request['lang']);
        }
    }
}
