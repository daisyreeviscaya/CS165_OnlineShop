<?php

use Illuminate\Database\Seeder;

class OrderdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('orderdetails')->insert([
          'cart_id'	=>	1,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_description'  =>  'Where is the love?',
          'product_price'  =>  1000,
          'quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	1,
          'product_id'  =>  3,
          'product_name'  =>  'Dreams',
          'product_description'  =>  'I have a dream. A song to sing.',
          'product_price'  =>  100,
          'quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	1,
          'product_id'  =>  4,
          'product_name'  =>  'Conscience',
          'product_description'  => 'A nice Christmas gift to Marcos family. Because they cannot afford it',
          'product_price'  =>  100,
          'quantity'  => 1 ,
      ]);


      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_description'  =>  'Where is the love?',
          'product_price'  =>  1000,
          'quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_description'  =>  'Where is the love?',
          'product_price'  =>  1000,
          'quantity'  => 1 ,
      ]);
      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_description'  =>  'Where is the love?',
          'product_price'  =>  1000,
          'quantity'  => 1 ,
      ]);
      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_description'  =>  'Where is the love?',
          'product_price'  =>  1000,
          'quantity'  => 1 ,
      ]);
    }
}
