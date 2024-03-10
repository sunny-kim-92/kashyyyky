<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ArenaSeeder::class,
            AspectSeeder::class,
            CardTraitSeeder::class,
            KeywordSeeder::class,
            SetSeeder::class,
            CardSeeder::class
        ]);
    }
}
