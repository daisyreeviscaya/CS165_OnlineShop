<?php
use database\seeds\UsersTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;




class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//Model::unguard();
        $this->call(UserTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CartsTable::class);
        $this->call(OrderdetailsTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
    }
}

?>
