<?php

namespace Database\Factories;

use App\Models\Dogadjaj;
use App\Models\Sezona;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogadjajFactory extends Factory
{
    protected $model = Dogadjaj::class;

    public function definition()
    {
        return [
            'naziv' => null,
            'datum_odrzavanja' => $this->faker->dateTime(), // Ovde se datumi postavljaju u Seederu
            'sezona_id' => null, // Ostavlja se ovde da se popuni u Seederu
        ];
    }
}
