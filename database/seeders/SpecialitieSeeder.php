<?php

namespace Database\Seeders;

use App\Models\Specialitie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialities = [
            'Menuiserie', 'Céramique', 'Textile', 'Verrerie', 'Art floral', 'Joaillerie', 'Maroquinerie', 'Art du papier', 'Sculpture', 'Peinture',
            ];
        foreach ($specialities as $specialitie) {
            Specialitie::create([
                'name' => $specialitie
            ]);
        }
    }
}
