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
            'subject' => $this->faker->text(),
            'description' => $this->faker->text(),
            'fault_category' => $this->faker->text(),
            'product_name' => $this->faker->name(),
        ];
    }
}
