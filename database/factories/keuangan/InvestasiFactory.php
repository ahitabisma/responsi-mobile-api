<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Investasi>
 */
class InvestasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "investment"=> $this->faker->word(),
            "value"=> $this->faker->randomNumber(),
            "portfolio"=> $this->faker->company(),
        ];
    }
}
