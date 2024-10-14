<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;
use App\Models\User;
use App\Models\Divisions;
use Nette\Utils\Random;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $divisionData = [
            ['division_name' => 'APHSO Department Head', 'abbreviation' => 'HEAD'],
            ['division_name' => 'Administrative', 'abbreviation' => 'ADMIN'],
            ['division_name' => 'Economic Support and Services', 'abbreviation' => 'ESSD'],
            ['division_name' => 'Settlement Plans and Projects', 'abbreviation' => 'SPPD'],
        ];

        foreach ($divisionData as $data) {
            Divisions::firstOrCreate([
                'division_name' => $data['division_name']
            ], [
                'abbreviation' => $data['abbreviation'],
                'has_head' => 1,
                'no_of_employees' => 5
            ]);
        }
        $divisions = Divisions::all();

        $faker = \Faker\Factory::create('en_PH');

        //Department Head Only
        DB::table('aphso_employees')->insert([
            'division_id' => 1,
            'lname' => "Sipin",
            'fname' => "Engr. Gina Paz",
            'mname' => "",
            'position' => "APHSO Department Head",
            'address' => $faker->barangay().', '.$faker->municipality().', '.$faker->province(),
            'birthdate' => "1970-03-22",
            'martial_status' => "Married",
            'contact_nos' => $faker->mobileNumber(),
            'email' => "test@example.com",
            'image_path' => "/images/default-profile.jpg", //Default Image
            'email_verified_at' => now(),
            'created_at' => now()
        ]);


        $divisions->each(function ($division) {
            // Create 5 employees for each division
            Employees::factory()->count(5)->for($division)->create();
        });


        Employees::all()->each(function ($employee) {
            User::factory()->for($employee)->create();
        });
    }
}
