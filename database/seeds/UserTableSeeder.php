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
    		'username'	=>	'ddviscaya',
        'firstname'  =>  'Daisyree',
        'lastname'  =>  'Viscaya',
    		'contactnumber'	=>	'09759086740',
    		'address'	=>	'Yakal Dorm',
    		'email'		=>	'daisyreeviscaya@gmail.com',
    		'password'	=>	bcrypt('password'),
        'isAdmin' => 1,
    		]);
    }
}
