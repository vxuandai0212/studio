<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = array(
            "Portraits", "Weddings", "Studio", "Fashion", "Lifestyle"
        );

        foreach($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
