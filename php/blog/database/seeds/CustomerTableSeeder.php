<?php
use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
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
            App\Customer::create([
                'full_name' => $faker -> name,
                'gender' => $faker -> name,
                'email' => $faker -> email,
                'phone' => $faker -> phoneNumber,
                'address' => $faker -> address,

            ]);
        }
    }
}
