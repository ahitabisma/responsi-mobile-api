<?php

namespace Database\Seeders;

use App\Models\keuangan\Mata_uang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Mata_uangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mata_uang::factory()->count(10)->create();
    }
}
