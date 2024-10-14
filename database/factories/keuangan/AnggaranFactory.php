<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Anggaran>
 */
class AnggaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "budget_item"=> $this->faker->word,
            "allocated"=> $this->faker->numberBetween(1,10),
            "spent"=> $this->faker->randomNumber(),
        ];
    }
}
