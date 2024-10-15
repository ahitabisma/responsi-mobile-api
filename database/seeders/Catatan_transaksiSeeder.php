<?php

namespace Database\Seeders;

use App\Models\keuangan\Catatan_transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Catatan_transaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catatan_transaksi::factory()->count(10)->create();
    }
}
