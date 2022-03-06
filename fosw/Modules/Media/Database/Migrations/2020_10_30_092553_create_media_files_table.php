<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaFilesTable extends Migration
{
    public function up()
    {
        Schema::create('media_files', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->primary('id');
            $table->string('file_name',255)->nullable();
            $table->string('file_path_normal',255)->nullable();
            $table->string('file_path_thumbnail',255)->nullable();
            $table->string('file_size',255)->nullable();
            $table->string('file_type',255)->nullable();
            $table->string('file_extension',255)->nullable();
            $table->string('create_user')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_files');
    }
}
