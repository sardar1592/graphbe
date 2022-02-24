<?php

namespace Database\Factories;
use App\Models\Author;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'type' => $this->faker->randomElement(['hardcover', 'paperback']),
            'price' => $this->faker->numberBetween(10, 100),
            'pages' => $this->faker->numberBetween(100, 1000),
            'author_id' => Author::pluck('id')->random(),
        ];
    }
}
