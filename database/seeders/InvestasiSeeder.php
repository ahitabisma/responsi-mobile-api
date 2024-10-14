<?php

namespace Database\Seeders;

use App\Models\keuangan\Investasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Investasi::factory()->count(10)->create();
    }
}
