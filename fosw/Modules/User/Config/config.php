<?php

return [
    'name' => 'User',
    'role' =>[
        'admin' => 1,
        'vendor' => 2,
        'affiliate' => 3
    ],

    'is_exist' => 1,

    'login_social' => [
        'facebook' => 'facebook',
        'google' => 'google',
        'apple' => 'apple'
    ],

    'is_verify' => 1,
    'not_verify' => 0,
    'not_admin' => 0,
    'verify_limited' => 3,
    'valid_code_time' => 300,
    'reset_password_time' => 0,
    'password_default' => 'thunhac@2020',

    'media_store_disk' => 'local'
];
