<?php

namespace Database\Seeders;

use App\Models\keuangan\Anggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggaran::factory()->count(10)->create();
    }
}
