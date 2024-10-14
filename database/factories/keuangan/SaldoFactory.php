<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Saldo>
 */
class SaldoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "account"=> $this->faker->email(),
            "balance"=> $this->faker->randomNumber(),
            "status"=> $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
