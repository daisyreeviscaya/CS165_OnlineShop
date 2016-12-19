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
          'product_price'  =>  1000,
          'product_quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	1,
          'product_id'  =>  3,
          'product_name'  =>  'Dreams',
          'product_price'  =>  100,
          'product_quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	1,
          'product_id'  =>  4,
          'product_name'  =>  'Conscience',
          'product_price'  =>  100,
          'product_quantity'  => 1 ,
      ]);


      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_price'  =>  1000,
          'product_quantity'  => 1 ,
      ]);

      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_price'  =>  1000,
          'product_quantity'  => 1 ,
      ]);
      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_price'  =>  1000,
          'product_quantity'  => 1 ,
      ]);
      DB::table('orderdetails')->insert([
          'cart_id'	=>	2,
          'product_id'  =>  1,
          'product_name'  =>  'Love',
          'product_price'  =>  1000,
          'product_quantity'  => 1 ,
      ]);
    }
}
