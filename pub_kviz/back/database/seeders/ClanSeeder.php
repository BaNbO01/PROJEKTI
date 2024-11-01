<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tim;
use App\Models\Clan;
class ClanSeeder extends Seeder
{
    public function run()
    {
        Tim::all()->each(function ($tim) {
            Clan::factory()->count(5)->create(['tim_id' => $tim->id]);
        });
    }
}

