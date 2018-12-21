<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,2) as $index){
            App\User::create([
                'full_name' => $faker -> name,
                'admin'=> $faker -> randomDigit,
                'email' => $faker -> email,
                 'password' => $faker -> password,
                  'phone' => $faker -> phoneNumber,
                  'address' => $faker -> address,
                ]);
            }

    }
}
