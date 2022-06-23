<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloths', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('typeID');
            $table->foreign('typeID')->references('id')->on('cloth_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name', 2000);
            $table->string('image', 2000);
            $table->integer('price');
            $table->string('color', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloths');
    }
}
