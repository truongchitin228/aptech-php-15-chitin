<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = App\User::pluck('id');
        foreach ($users as $key => $value) {
            App\Phone::create([
                'number' => $faker->creditCardNumber,
                'user_id' => $value,
            ]);
    }
}
}