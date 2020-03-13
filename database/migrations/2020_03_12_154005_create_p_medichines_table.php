<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePMedichinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_medichines', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('prescription_id');
            $table->unsignedBigInteger('medichine_id');
            $table->integer('amount');
            $table->string('sig');
            $table->timestamps();


            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('medichine_id')->references('id')->on('medichines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_medichines');
    }
}
