<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_complains', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('prescription_id');
            $table->string('complain');
            $table->dateTime('first_seen');
            $table->integer('count');
            $table->string('medication');
            $table->string('other');
            $table->timestamps();


            $table->foreign('prescription_id')->references('id')->on('prescriptions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_complains');
    }
}
