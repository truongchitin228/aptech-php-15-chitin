<?php
use App\TypeProduct;
use Illuminate\Database\Seeder;

class TypeProductsTableSeeder extends Seeder
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
            App\TypeProduct::create([
                'name' => $faker -> name,
                'description' => $faker -> paragraph,
                ]);
            }

    }
}
