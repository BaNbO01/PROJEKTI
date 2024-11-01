<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tim;

class TimSeeder extends Seeder
{
    public function run()
    {
        Tim::factory()->count(10)->create(); // kreira deset timova
    }
}
