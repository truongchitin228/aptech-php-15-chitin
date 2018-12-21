<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class); 
        $this->call(UsersTableSeeder::class); 
        $this->call(TypeProductsTableSeeder::class); 
        $this->call(ProductsTableSeeder::class); 
        $this->call(SlideTableSeeder ::class); 
        $this->call(CustomerTableSeeder::class); 
        $this->call(BillsTableSeeder::class); 
        $this->call(BillDetailTableSeeder ::class); 
    }
}
