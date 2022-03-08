<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->words(3, true),
            'description' => $this->faker->words(7, true),
            'category' => $this->faker->words(2, true),
            'product' => $this->faker->words(1, true),
        ];
    }
}
