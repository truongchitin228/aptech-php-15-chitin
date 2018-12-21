<?php
use App\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,3) as $index){
            App\Admin::create([
                'full_name' => $faker -> name,
                'email' => $faker -> email,
                'password' => $faker -> password,
                'phone' => $faker -> phoneNumber,
                'address' => $faker -> address,

            ]);
        }
    }
}
