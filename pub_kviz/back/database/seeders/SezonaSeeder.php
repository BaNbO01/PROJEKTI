<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sezona;

class SezonaSeeder extends Seeder
{
    public function run()
    {
        Sezona::factory()->count(3)->create(); // kreira tri sezone
    }
}

