<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->primary('id');
            $table->string('code')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mobile', 15)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->unsignedInteger('industry_id')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->longText('avatar')->nullable();
            $table->tinyInteger('is_admin')->default(0)->nullable()->comment('0= Normal,1 = Admin');
            $table->string('verify_code')->nullable();
            $table->string('verify_time')->nullable();
            $table->tinyInteger('is_verify')->default(0)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
