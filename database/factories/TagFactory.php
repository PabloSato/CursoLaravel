<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'      => $this->faker->unique()->word(20),
            'slug'      => $this->faker->slug(),
            'color'     => $this->faker->randomElement(['zink', 'red', 'white', 'yellow', 'amber', 'lime', 'green']),
        ];
    }
}
