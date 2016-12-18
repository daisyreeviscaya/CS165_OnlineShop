<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
    		'productname'	=>	str_random(10),
            'description'  =>  str_random(10),
    		'price'	=>	90,
    		'quantity'	=>	0,
    		]);
    }
}
