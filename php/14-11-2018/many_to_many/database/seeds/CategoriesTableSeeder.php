<?php
use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categoriesId = App\Category::pluck('id')->toArray();
        foreach (range(1, 10) as $index) {
            App\Post::create([
                'title' => $faker->name,
            ]);
    }
}
}