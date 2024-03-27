<?php

namespace Database\Seeders;

use App\Models\Artist;
use Database\Factories\ArtistFactory;
use Faker\Provider\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\NumberInterface;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Artist::factory()
                ->count(20)
                ->create();
    }
}
