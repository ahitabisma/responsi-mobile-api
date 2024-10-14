<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Laporan_bulanan>
 */
class Laporan_bulananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "month"=> $this->faker->monthName(),
            "income"=> $this->faker->randomNumber(),
            "expenses"=> $this->faker->randomNumber(),
        ];
    }
}
