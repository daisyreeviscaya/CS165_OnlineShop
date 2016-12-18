<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNEWcartsTable extends Migration
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
          $table->increments('id');
          $table->integer('cart_id');
          $table->integer('user_id');
          $table->integer('product_id');
          $table->integer('quantity');
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
