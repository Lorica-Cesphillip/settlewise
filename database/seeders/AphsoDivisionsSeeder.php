<?php

namespace Database\Seeders;

use App\Models\Divisions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AphsoDivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Divisions::factory(4)->create();
    }
}
