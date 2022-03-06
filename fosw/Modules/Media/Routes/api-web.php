<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace'  => 'Web'], function () {
    Route::group(['prefix' => 'media'], function () {
        Route::post('/uploads', 'MediaFileController@storeFileLocal');
    });

    Route::group(['middleware' => 'auth:api'], function () {
        Route::group(['prefix' => 'media'], function () {
            Route::post('/', 'MediaController@storeFileS3');
        });
    });
});
