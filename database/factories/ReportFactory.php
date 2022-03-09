<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Customer;
use App\Models\Incident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customers = Customer::all();
        $incidents = Incident::all();
        $assets = Asset::all();

        return [
            'reference_no' => 'INC000' . $this->faker->randomNumber(7, true),
            'title' => $this->faker->words(3, true),
            'incident_id' => $this->faker->randomElement($incidents),
            'customer_id' => $this->faker->randomElement($customers),
            'asset_id' => $this->faker->randomElement($assets),
        ];
    }
}
