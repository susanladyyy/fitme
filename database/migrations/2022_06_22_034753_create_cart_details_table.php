<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cartId');
            $table->foreign('cartId')->references('id')->on('carts')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('clothId');
            $table->foreign('clothId')->references('id')->on('cloths')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sizeID')->nullable(true);
            $table->foreign('sizeID')->references('id')->on('cloth_sizes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_details');
    }
}
