<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Mata_uang>
 */
class Mata_uangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "currency"=> $this->faker->numberBetween(1,0),
            "exchange_rate"=> $this->faker->numberBetween(1,0),
            "symbol"=> $this->faker->randomElement(['Rp.','$']),
        ];
    }
}
