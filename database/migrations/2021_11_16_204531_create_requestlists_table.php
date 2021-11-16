<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_item');
            $table->string('item_name');
            $table->integer('price');
            $table->string('customer_name');
            $table->string('phone');
            $table->string('address');
            $table->string('weight');
            $table->string('req_time');
            $table->string('payment')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('id_item')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requestlists');
    }
}
