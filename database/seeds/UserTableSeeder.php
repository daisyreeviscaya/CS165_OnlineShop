<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'username'	=>	'admin',
        'firstname'  =>  'admin',
        'lastname'  =>  'admin',
    		'contactnumber'	=>	'12345',
    		'address'	=>	'qc',
    		'email'		=>	'admin@admin.com',
    		'password'	=>	bcrypt('password'),
        'isAdmin' => 1,
    		]);

        DB::table('users')->insert([
    		'username'	=>	'bidaAngSaya',
        'firstname'  =>  'jolly',
        'lastname'  =>  'bee',
    		'contactnumber'	=>	'8700',
    		'address'	=>	'philcoa branch',
    		'email'		=>	'chicken@joy.com',
    		'password'	=>	bcrypt('password'),
        'isAdmin' => 0,
    		]);

        DB::table('users')->insert([
    		'username'	=>	'mccoy',
        'firstname'  =>  'ferdinand',
        'lastname'  =>  'marcos',
    		'contactnumber'	=>	'87000',
    		'address'	=>	'LNMB',
    		'email'		=>	'hitler@dictador.com',
    		'password'	=>	bcrypt('password'),
        'isAdmin' => 0,
    		]);

        DB::table('users')->insert([
    		'username'	=>	'hohoho',
        'firstname'  =>  'santa',
        'lastname'  =>  'claus',
    		'contactnumber'	=>	'123123',
    		'address'	=>	'north pole',
    		'email'		=>	'merry@christmas.com',
    		'password'	=>	bcrypt('password'),
        'isAdmin' => 0,
    		]);


    }
}
