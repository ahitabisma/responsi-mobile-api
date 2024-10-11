<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $currentTime = now()->addSecond();

        User::factory(10)->create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);

        $this->call([
            SegmentSeeder::class,
        ]);
    }
}
