<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviseTableSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::drop('orderdetails');
          Schema::drop('cart');

          Schema::create('cart', function (Blueprint $table) {
              $table->increments('id');
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

          });

          Schema::table('users', function($table){
              $table->boolean('isAdmin')->nullable;
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
