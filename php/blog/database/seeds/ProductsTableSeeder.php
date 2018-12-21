<?php
use App\Product;
use App\TypeProduct;
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
        $typeproducts = TypeProduct :: pluck('id')->toArray();
        $faker = Faker\Factory::create();
        foreach(range(1,3) as $index){
            App\Product::create([
                'name' => $faker -> name,
                'description' => $faker -> paragraph,
                'price' => $faker -> password,
                'amount' => $faker -> phoneNumber,
                'id_type' => $typeproducts[array_rand($typeproducts)],

            ]);
        }
    }
}
