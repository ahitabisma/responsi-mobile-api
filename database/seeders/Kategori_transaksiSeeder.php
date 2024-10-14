<?php

namespace Database\Seeders;

use App\Models\keuangan\Kategori_transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kategori_transaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori_transaksi::factory()->count(10)->create();
    }
}
