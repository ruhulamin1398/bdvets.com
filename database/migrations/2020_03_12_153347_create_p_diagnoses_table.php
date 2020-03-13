<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_diagnoses', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('prescription_id');
            $table->unsignedBigInteger('diagnosis_id');
            $table->timestamps();


            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('diagnosis_id')->references('id')->on('diagnoses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_diagnoses');
    }
}
