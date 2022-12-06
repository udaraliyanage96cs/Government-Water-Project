<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('username');
            $table->string('name');
            $table->string('propic')->nullable();;
            $table->string('job')->nullable();;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nic')->unique();
            $table->string('phone1')->nullable();;
            $table->string('phone2')->nullable();;
            $table->string('phonefixed')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('user_roll_id');
            $table->string('project_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
