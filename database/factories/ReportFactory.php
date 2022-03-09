<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Incident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    protected $customers;
    protected $incidents;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->customers = Customer::all();
        $this->incidents = Incident::all();

        return [
            'reference_no' => 'INC000' . $this->faker->randomNumber(7, true),
            'title' => $this->faker->words(3, true),
            'incident_id' => $this->faker->randomElement($this->incidents),
            'customer_id' => $this->faker->randomElement($this->customers)
        ];
    }
}
