<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCartTableCreateFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::drop('carts');
      Schema::drop('orderdetails');
      Schema::create('orderdetails', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('cart_id');
          $table->integer('product_id');
          $table->string('product_name');
          $table->string('product_description');
          $table->float('product_price', 8,2);
          $table->integer('quantity');
          $table->timestamps();

      });
      Schema::create('carts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('status');
          $table->timestamps('order_time');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
