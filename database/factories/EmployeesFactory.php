<?php

namespace Database\Factories;

use App\Models\Divisions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('en_PH');

        return [
            'division_id' => Divisions::factory(),
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'mname' => fake()->lastName(),
            'position' => fake()->jobTitle(),
            'address' => $faker->barangay().', '.$faker->municipality().', '.$faker->province(),
            'birthdate' => fake()->date('Y-m-d', 'now'),
            'martial_status' => "Married",
            'contact_nos' => $faker->mobileNumber(),
            'email' => fake()->unique()->safeEmail(),
            'image_path' => "/public/default-profile.jpg",
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
