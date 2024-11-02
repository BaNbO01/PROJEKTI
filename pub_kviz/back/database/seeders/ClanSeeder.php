<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tim;
use App\Models\Clan;
class ClanSeeder extends Seeder
{
    public function run()
    {
        $timovi = Tim::all();

        
        Clan::factory()->count(20)->create()->each(function ($clan) use ($timovi) {
            $clan->timovi()->attach(
                $timovi->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}

