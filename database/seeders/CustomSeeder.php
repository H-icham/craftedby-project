<?php

namespace Database\Seeders;

use App\Models\Custom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
//    public function run(): void
//    {
//        $nameColors = ['blanc', 'beige', 'noir', 'rouge', 'vert', 'bleu'];
//        $nameSizes = ['xs', 's', 'm', 'l', 'xl'];
//        foreach ([$nameColors, $nameSizes] as [$nameColor, $nameSize]) {
//            Custom::create([
//                'nameColor' => $nameColor,
//                'nameSize' => $nameSize
//            ]);
//        }
//
//    }
//}

    public function run(): void
    {
        $nameColors = ['blanc', 'beige', 'noir', 'rouge', 'vert', 'bleu'];
        $nameSizes = ['xs', 's', 'm', 'l', 'xl'];

        foreach ($nameColors as $nameColor) {
            foreach ($nameSizes as $nameSize) {
                Custom::create([
                    'nameColor' => $nameColor,
                    'nameSize' => $nameSize
                ]);
            }
        }
    }
}
