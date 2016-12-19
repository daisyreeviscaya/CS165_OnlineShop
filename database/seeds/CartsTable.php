<?php

use Illuminate\Database\Seeder;

class CartsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('carts')->insert([
          'user_id'	=>	3,
          'status'  =>  'sold',
      ]);

      DB::table('carts')->insert([
          'user_id'	=>	4,
          'status'  =>  'sold',
      ]);
    }
}
