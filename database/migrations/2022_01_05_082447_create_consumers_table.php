<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumers', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('surname');
            $table->string('name');
            $table->string('nic')->nullable();
            $table->string('nic_new')->nullable();
            $table->string('propic')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('nic_pic_f');
            $table->string('nic_pic_b');
            $table->string('sig_pic');
            $table->string('prifixkey')->nullable();
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
        Schema::dropIfExists('consumers');
    }
}
