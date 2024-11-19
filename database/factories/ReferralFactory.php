<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentRequest>
 */
class ReferralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $remarks = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $for = [];
        $please = [];

        return [
            'employee_number' => \App\Models\Employees::class,
            'for' => '',
            'for_urgent' => fake()->boolean(),
            'please' => '',
            'please_urgent' => fake()->boolean(),
            'remarks' => '', //Randomized
        ];
    }
}
