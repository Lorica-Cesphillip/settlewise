<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;
use Faker\Guesser\Name;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employees::factory(5)->create();

        Employees::factory()->create([
            'division_id' => uniqid("000"),
            'lname' => Random::generate(1, 'A-Z').Random::generate(49, 'a-z'),
            'fname' => Random::generate(1, 'A-Z').Random::generate(49, 'a-z'),
            'mname' => Random::generate(1, 'A-Z').Random::generate(49, 'a-z'),
            'position' => Random::generate(20, 'A-Za-z')
        ]);
    }
}
