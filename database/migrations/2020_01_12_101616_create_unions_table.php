<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('upazilla_id');
            $table->string('name')->nullable();
            $table->string('bn_name')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();


            $table->foreign("upazilla_id")->references("id")->on("upazillas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unions');
    }
}
