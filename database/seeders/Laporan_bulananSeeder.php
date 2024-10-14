<?php

namespace Database\Seeders;

use App\Models\keuangan\Laporan_bulanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Laporan_bulananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laporan_bulanan::factory()->count(10)->create();
    }
}
