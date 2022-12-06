<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('postal_code');
            $table->string('br_number');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('email');
            $table->string('connection_type');
            $table->string('package');
            $table->string('authorized_officer');
            $table->string('officer_name');
            $table->string('officer_nic');
            $table->string('ac_blance')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
