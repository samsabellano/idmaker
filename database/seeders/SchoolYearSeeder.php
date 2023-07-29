<?php

namespace Database\Seeders;

use App\Models\SchoolYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_years = array(2020, 2021, 2022, 2023, 2024);

        foreach ($school_years as $year) {
            SchoolYear::firstOrCreate([
                'start_year' => $year,
                'end_year' => $year,
            ]);
        }
    }
}