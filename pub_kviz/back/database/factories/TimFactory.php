<?php

namespace Database\Factories;

use App\Models\Tim;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimFactory extends Factory
{
    protected $model = Tim::class;

    public function definition()
    {
        return [
            'ime' => $this->faker->company,
        ];
    }
}
