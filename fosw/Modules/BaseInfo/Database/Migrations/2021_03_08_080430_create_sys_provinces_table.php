<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysProvincesTable extends Migration
{
    public function up()
    {
        Schema::create('sys_provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('country_code');
            $table->string('name');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sys_provinces');
    }
}
