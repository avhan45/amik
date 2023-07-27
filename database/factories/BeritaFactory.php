<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'isi' => $this->faker->paragraph,
            'gambar' => $this->faker->imageUrl('https://api.unsplash.com/photos/random', 640, 480, 'computer', false),
        ];

    }
}
