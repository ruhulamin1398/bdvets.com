<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePNecropsiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_necropsies', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('prescription_id');
            $table->unsignedBigInteger('necropsy_id');
            $table->timestamps();


            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('necropsy_id')->references('id')->on('necropsies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_necropsies');
    }
}
