<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Pengeluaran>
 */
class PengeluaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "expense"=> $this->faker->word(),
            "cost"=> $this->faker->randomNumber(),
            "category"=> $this->faker->word(),
        ];
    }
}
