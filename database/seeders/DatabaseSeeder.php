<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ArtistSeeder::class,
            UserSeeder::class,
            CustomSeeder::class,
            MaterialSeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            RoleSeeder::class,
            SpecialitieSeeder::class,
            ThemeSeeder::class,
        ]);
    }
}
