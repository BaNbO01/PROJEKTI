<?php

namespace Database\Factories;

use App\Models\Sezona;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class SezonaFactory extends Factory
{
    protected $model = Sezona::class;

    public function definition()
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $this->faker->date('Y-m-d', 'now'));
        $endDate = (clone $startDate)->addMonths($this->faker->numberBetween(3, 12));

        return [
            'pocetak' => $startDate,
            'kraj' => $endDate,
        ];
    }
}
