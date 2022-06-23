<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transactionId');
            $table->foreign('transactionId')->references('id')->on('transaction_headers')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('clothId');
            $table->foreign('clothId')->references('id')->on('cloths')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sizeID');
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
        Schema::dropIfExists('transaction_details');
    }
}
