<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        /*
        return [
            'name' => Str::random(10),
            'short_description' => Str::random(30),
            'description' => Str::random(50),
            'price' => random_int(5, 100),
        ];
        */
        return [
        'name' => $this->faker->word(),
        'short_description' => $this->faker->sentence(5),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->numberBetween(10, 100)
    ];

    }
}
