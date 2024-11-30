<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Divisions;
use phpDocumentor\Reflection\PseudoTypes\IntegerValue;
use Ramsey\Uuid\Type\Integer;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('en_PH');

        return [
            'division_id' => Divisions::inRandomOrder()->first()->id ?? Divisions::factory(),
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'mname' => fake()->lastName(),
            'position' => fake()->jobTitle(),
            'address' => $faker->barangay().', '.$faker->municipality().', '.$faker->province(),
            'birthdate' => fake()->date('Y-m-d', 'now'),
            'martial_status' => "Married",
            'contact_nos' => $faker->mobileNumber(),
            'email' => fake()->unique()->safeEmail(),
            'image_path' => "/public/profile_images/default-profile.jpg",
            'email_verified_at' => now(),
            'emp_status' => fake()->randomElement([0, 1]),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
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
