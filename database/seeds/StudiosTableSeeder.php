<?php

use Illuminate\Database\Seeder;
use App\Studio;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studio::truncate();

        $faker = \Faker\Factory::create();

        Studio::create([
            'location' => $faker->address,
            'email' => $faker->companyEmail, 
            'phone' => $faker->tollFreePhoneNumber,
        ]);
    }
}
