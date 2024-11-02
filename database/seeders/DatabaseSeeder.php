<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;
use App\Models\User;
use App\Models\Divisions;
use App\Models\DocumentType;
use Nette\Utils\Random;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $divisions = Divisions::factory(2)->create();

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
            'emp_status' => 1
        ]);


        $divisions->filter(function ($division){
            return $division->division_id !== 1;
        })->each(function($division){
            Employees::factory()->count(1)->for($division)->create();
        });


        Employees::all()->each(function ($employee) {
            User::factory()->for($employee)->create();
        });

        $documentTypes = [
            ['document_type' => 'Memorandum'],
            ['document_type' => 'Office Order'],
            ['document_type' => 'Letter'],
            ['document_type' => 'Request'],
            ['document_type' => 'Invitation'],
            ['document_type' => 'Solicitation'],
            ['document_type' => 'Others']
        ];

        DocumentType::insert($documentTypes);
    }
}
