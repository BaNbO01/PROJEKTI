<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dogadjaj;
use App\Models\Sezona;
use Faker\Factory as Faker; // Uključite Faker
use Carbon\Carbon;
class DogadjajSeeder extends Seeder
{
    public function run()
    {
        // Inicijalizujte Faker
        $faker = Faker::create();

        // Prikupljanje svih sezona
        $sezone = Sezona::all();

        foreach ($sezone as $sezona) {
            for ($i = 0; $i < 20; $i++) {
                // Generisanje nasumičnog datuma unutar opsega sezone
                $datumOdrzavanja = $this->generateRandomDate($sezona->pocetak, $sezona->kraj, $faker);

                // Kreiranje dogadjaja
                Dogadjaj::create([
                    'naziv'=>$faker->sentence($nbWords = 3, $variableNbWords = true),
                    'sezona_id' => $sezona->id,
                    'datum_odrzavanja' => $datumOdrzavanja,
                ]);
            }
        }
    }

    private function generateRandomDate($startDate, $endDate, $faker)
    {
        // Konvertovanje stringova u Carbon instancu
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);
        
        // Generisanje nasumičnog datuma između start i end datuma
        return $faker->dateTimeBetween($start, $end);
    }
}
