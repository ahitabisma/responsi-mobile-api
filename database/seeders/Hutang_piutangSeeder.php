<?php

namespace Database\Seeders;

use App\Models\keuangan\Hutang_piutang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hutang_piutangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hutang_piutang::factory()->count(10)->create();
    }
}
