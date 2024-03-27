<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'description' =>fake()->text(200),
            'price'=> fake()->randomFloat(2,0,1000),
            'stock' =>fake()->numberBetween(10),
            'imageUrl' => fake()->imageUrl(),
            'type' =>fake()->text(200),
        ];
    }
}
