<?php

use Illuminate\Database\Seeder;
use App\Mail;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Mail::create([
                'customer_name' => $faker->name,
                'email' => $faker->email, 
                'phone' => $faker->phoneNumber,
                'message' => $faker->sentence
            ]);
        }
    }
}
