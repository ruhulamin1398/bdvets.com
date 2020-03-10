<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->string('name');
            $table->string('email')->nullable()-> unique();
            $table->string('phone')->nullable()-> unique();
            $table->string('gender')->default("Male");
            $table->unsignedBigInteger('division_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('upazilla_id')->nullable();
            $table->unsignedBigInteger('union_id')->nullable();
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('farming_type_id')->nullable();            
            $table->unsignedBigInteger('cattle')->nullable()->default(0);
            $table->unsignedBigInteger('goat')->nullable()->default(0);
            $table->unsignedBigInteger('buffalo')->nullable()->default(0);
            $table->unsignedBigInteger('sheep')->nullable()->default(0);
            $table->unsignedBigInteger('poultry')->nullable()->default(0);
            $table->unsignedBigInteger('chicken')->nullable()->default(0);
            $table->unsignedBigInteger('duck')->nullable()->default(0);
            $table->unsignedBigInteger('pigeon')->nullable()->default(0);
            $table->unsignedBigInteger('turkey')->nullable()->default(0);
            $table->unsignedBigInteger('other')->nullable()->default(0);

            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("division_id")->references("id")->on("divisions");
            $table->foreign("district_id")->references("id")->on("districts");
            $table->foreign("upazilla_id")->references("id")->on("upazillas");
            $table->foreign("union_id")->references("id")->on("unions");
            $table->foreign("village_id")->references("id")->on("villages");
            $table->foreign("farming_type_id")->references("id")->on("farming_types");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
