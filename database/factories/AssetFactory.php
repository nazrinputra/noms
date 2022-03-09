<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'asset_name' => $this->faker->name(),
            'product_type' => $this->faker->words(2, true),
            'service_id' => 'LV' . $this->faker->randomNumber(9, true),
            'account_name' => $this->faker->name(),
            'status' => $this->faker->words(1, true),
        ];
    }
}
