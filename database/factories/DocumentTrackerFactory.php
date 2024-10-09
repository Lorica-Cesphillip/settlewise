<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentTracker>
 */
class DocumentTrackerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'document_type_id'  => Integer::class,
        'from_employee_id' => Integer::class,
        'to_employee_id' => Integer::class,
        'request_id' => Integer::class,
        'referral_id' => Integer::class,
        'document_name' => Str::random(140),
        'urgent' => fake()->boolean(),
        'confidential' => fake()->boolean(),
        'subject' => fake()->title(),
        'remarks' => Str::random(140),
        'timestamp' => now(),
        'is_archived' => fake()->boolean(),
        'file_path' => fake()->filePath()
        ];
    }

    public function failed(): static{
        return $this->state(fn(array $attributes) => [
            'timestamp' => null
        ]);
    }
}
