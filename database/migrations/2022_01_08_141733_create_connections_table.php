<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->string('billtype');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phonefix');
            $table->string('postoffice_id');
            $table->string('area_id');
            $table->string('village_id');
            $table->string('lane_id');
            $table->string('house_num');
            $table->string('house_name');
            $table->string('valve_id');
            $table->string('gn_id');
            $table->string('billzone_id');
            $table->integer('premiss_num');
            $table->string('num_of_benif');
            $table->string('benif_table_id')->nullable();
            $table->string('connection_def');
            $table->string('consumer_id');
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
        Schema::dropIfExists('connections');
    }
}
