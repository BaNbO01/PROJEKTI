<?php

namespace Database\Factories;
use App\Models\Clan;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClanFactory extends Factory
{
    protected $model = Clan::class;

    public function definition()
    {
        return [
            'ime' => $this->faker->firstName,
            'prezime' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'tim_id' => null, // Ovaj atribut će biti popunjen u seeder-u
        ];
    }
}
