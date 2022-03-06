<?php

namespace Modules\BaseInfo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BaseInfoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(IndustryTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
    }
}
