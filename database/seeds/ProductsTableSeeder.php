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
      		'productname'	=>	'Love',
          'description'  =>  'Where is the love?',
      		'price'	=>	1000,
      		'quantity'	=>	0,
    	]);

      DB::table('products')->insert([
      		'productname'	=>	'Hope',
          'description'  =>  'Yes. Its for sale.',
      		'price'	=>	900,
      		'quantity'	=>	10,
    	]);

      DB::table('products')->insert([
      		'productname'	=>	'Dreams',
          'description'  =>  'I have a dream. A song to sing.',
      		'price'	=>	100,
      		'quantity'	=>	7,
    		]);

      DB::table('products')->insert([
      		'productname'	=>	'Conscience',
          'description'  =>  'A nice Christmas gift to Marcos family. Because they cannot afford it',
      		'price'	=>	100,
      		'quantity'	=>	0,
    	]);

      DB::table('products')->insert([
      		'productname'	=>	'Happiness',
          'description'  =>  'It is so nice to be happy. shalalala.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Health',
          'description'  =>  'Buy now! While stocks last.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Family',
          'description'  =>  'Get instant fam.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Youth',
          'description'  =>  'You will never get old.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Home',
          'description'  =>  'Home is where the heart is.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Friends',
          'description'  =>  'Made in China! No warranty.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Time',
          'description'  =>  'Buy now at a very affordable rate, while it is not too late.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Trust',
          'description'  =>  'BIG word!',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Talent',
          'description'  =>  'Buy now!',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Manners',
          'description'  =>  'table manners',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Respect',
          'description'  =>  '"Respeto naman o"',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Moral',
          'description'  =>  'No to death penalty!',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Common sense',
          'description'  =>  'Not very common',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Purpose',
          'description'  =>  'By Justin Bieber.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Patience',
          'description'  =>  'Wait lang, bes.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Long life',
          'description'  =>  'This is it pancit.',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);
      DB::table('products')->insert([
      		'productname'	=>	'Peace',
          'description'  =>  '"World peace!" -Miss Congeniality',
      		'price'	=>	100,
      		'quantity'	=>	5,
      ]);

      DB::table('products')->insert([
      		'productname'	=>	'Second Chance',
          'description'  =>  'Sana ako nalang. Ako nalang ulit.',
      		'price'	=>	1000000,
      		'quantity'	=>	5,
      ]);

    }
}
