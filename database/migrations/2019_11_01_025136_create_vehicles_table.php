<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->string('aadharno');
            $table->foreign('aadharno')->references('aadharno')->on('users');
            $table->string('engineno');
            $table->string('bname');
            $table->foreign('bname')->references('bname')->on('branches');
            $table->date('rdate');
            $table->string('vtype');
            $table->string('vmodel');
            $table->string('vcompany');
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
        Schema::dropIfExists('vehicles');
    }
}
