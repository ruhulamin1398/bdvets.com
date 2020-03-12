<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePAdvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_advices', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('prescription_id');
            $table->unsignedBigInteger('advice_id');
            $table->timestamps();


            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('advice_id')->references('id')->on('advices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_advices');
    }
}
