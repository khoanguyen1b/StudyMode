<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 'adminu-ea65-4181-8c0f-de3ed7900731',
                'first_name' => 'Khoa',
                'last_name' => 'Nguyen',
                'mobile' => '0978899101',
                'email' => 'khoanguyen8947@gmail.com',
                'password' => bcrypt('123123123'),
            ],
        ]);
    }
}
