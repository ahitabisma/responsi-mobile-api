<?php

namespace Database\Factories\keuangan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\keuangan\Kategori_transaksi>
 */
class Kategori_transaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "transaction"=> $this->faker->word,
            "type"=> $this->faker->word,
            "amount"=> $this->faker->randomNumber(),
        ];
    }
}
