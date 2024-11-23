<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisions>
 */
class DivisionsFactory extends Factory
{
    protected static int $index = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $division = ['APHSO Department', 'Administrative', 'Economic Support and Services', 'Settlement Plans and Projects'];
        $abbreviation = ['HEAD', 'ADMIN', 'ESSD', 'SPPD'];

        $curIndex = self::$index % count($division);
        self::$index++;

        return [
            'division_name' => $division[$curIndex],
            'abbreviation' => $abbreviation[$curIndex],
            'no_of_employees' => 5
        ];
    }
}
