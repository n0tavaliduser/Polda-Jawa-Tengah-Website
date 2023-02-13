<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galleryphoto>
 */
class GalleryphotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gambar' => fake()->imageUrl(640, 480, 'animals', true),
            'title' => fake()->text(20),
            'description' => fake()->text(20),
        ];
    }
}
