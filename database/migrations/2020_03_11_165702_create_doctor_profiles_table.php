<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profiles', function (Blueprint $table) {

            $table->unsignedBigInteger('id');
            $table->string('name')->nullable();
            $table->string('bn_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('degree_varsity')->nullable();
            $table->string('bn_degree_varsity')->nullable();
            $table->string('reg_no')->nullable();

            $table->timestamps();
            $table->foreign('id')->references('id')->on('users');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_profiles');
    }
}
