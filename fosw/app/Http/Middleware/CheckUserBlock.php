<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserBlock
{
    public function handle(Request $request, Closure $next)
    {
        $isBlock = Auth::user()->is_verify ?? 0;
        if(!$isBlock){
            return response()->json(['message' => trans('core::errors.error_401', [], $request['lang'])], 401);
        }

        return $next($request);
    }
}
