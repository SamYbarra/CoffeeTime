<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOfCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_of_car', function (Blueprint $table) {
            $table->id();
            $table->double('Subtotal');
            $table->date('date');
            $table->integer('Cant');
            $table->unsignedBigInteger('id_car_of_buys');
            $table->foreign('id_car_of_buys')->references('id')->on('car_of_buys');
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_of_car');
    }
}
