<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SezonaSeeder::class,
            DogadjajSeeder::class,
            TimSeeder::class,
            ClanSeeder::class,
            DogadjajTimSeeder::class,
        ]);
    }
}
