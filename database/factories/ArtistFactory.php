<?php

namespace Database\Factories;

use App\Models\Specialitie;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'siret'=> fake()->randomNumber(1,14),
            'history'=>fake()->text(255),
            'craftingDescription'=>fake()->text(255),
        ];
    }
}
