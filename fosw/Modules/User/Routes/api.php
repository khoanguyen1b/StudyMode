<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\AuthController;

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', [AuthController::class,'login'])->name('auth.login');

    Route::group(['middleware' => ['auth:api','block']], function () {
        Route::group(['prefix' => 'users'], function () {
            Route::get('/info', [AuthController::class,'showInfo'])->name('auth.login');
            Route::put('/profile', [AuthController::class,'updateProfile'])->name('auth.update.profile');
            Route::post('/avatar', [AuthController::class,'updateAvatar'])->name('auth.update.avatar');
            Route::put('/change-password', [AuthController::class,'changePassword'])->name('auth.update.password');
        });
    });
});
