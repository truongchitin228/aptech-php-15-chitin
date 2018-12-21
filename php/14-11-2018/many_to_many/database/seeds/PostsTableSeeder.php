<?php
use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            App\Category::create([
                'name' => $faker->word(3),
            ]);
    }
}
}