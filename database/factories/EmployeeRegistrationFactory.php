<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeeRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'division_id' => fake()->randomNumber(),
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'mname' => fake()->lastName(),
            'position' => fake()->jobTitle(),
            'address' => fake()->address(),
            'birthdate' => fake()->date('mm-dd-yyyy'),
            'martial_status' => fake()->text(),
            'contact_nos' => fake()->mobileNumber(),
            'email' => fake()->unique()->safeEmail(),
            'image_path' => fake()->imageUrl(),
            'email_verified_at' => now()
        ];
    }

     /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
