<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(MailsTableSeeder::class);
        $this->call(StudiosTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}