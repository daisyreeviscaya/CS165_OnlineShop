<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCartsTableCreateNew extends Migration
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
      Schema::create('carts', function (Blueprint $table) {
          $table->integer('id');
          $table->integer('user_id');
          $table->integer('product_id');
          $table->integer('quantity');
          $table->string('status');
          $table->timestamps('order_time');
      });

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
