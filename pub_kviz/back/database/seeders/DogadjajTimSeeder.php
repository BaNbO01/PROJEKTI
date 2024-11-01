<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dogadjaj;
use App\Models\Tim;

class DogadjajTimSeeder extends Seeder
{
    public function run()
    {
        Dogadjaj::all()->each(function ($dogadjaj) {
            $timovi = Tim::inRandomOrder()->take(rand(2, 5))->get(); // dodaje između 2 i 5 timova po događaju

            foreach ($timovi as $tim) {
                $dogadjaj->timovi()->attach($tim->id, ['score' => rand(0, 100)]);
            }
        });
    }
}

