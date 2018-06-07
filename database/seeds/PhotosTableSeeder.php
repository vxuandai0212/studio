<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $id = $i + 1;
            $category_id = rand(1, 5);
            $url_image = $id.".jpg";
            Photo::create([
                'category_id' => $category_id,
                'name' => $faker->sentence,
                'url_image' => $url_image, 
                'is_slide_show' => true,
            ]);
        }
    }
}
