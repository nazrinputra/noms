<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all();
        $reports = Report::all();

        return [
            'type' => $this->faker->words(1, true),
            'remarks' => $this->faker->words(10, true),
            'user_id' => $this->faker->randomElement($users),
            'report_id' => $this->faker->randomElement($reports),
        ];
    }
}
