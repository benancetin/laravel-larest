<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

public function up()
{
    // orderCode, productid, quantity, address, shippingDate
    Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->bigInteger('user_id')->unsigned()->index();
        $table->string('orderCode');
        $table->integer('quantity');
        $table->string('address');
        $table->date('shippingDate')->nullable();
        $table->timestamps();
        $table->foreign('user_id')
            ->references('id')
            ->on('users');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
