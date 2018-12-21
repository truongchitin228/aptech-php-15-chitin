<?php
use App\Slide;
use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
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
            App\Slide::create([
                'link' => $faker -> name,
                'image' => $faker -> name,
                ]);
            }

    }
}
