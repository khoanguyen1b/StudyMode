<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysIndustriesTable extends Migration
{
    public function up()
    {
        Schema::create('sys_industries', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sys_industries');
    }
}
