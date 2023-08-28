<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ! SEEDER NOT WORKING
        // * to be fixed.

        $educations = Education::EDUCATIONS;

        foreach ($educations as $education) {
            Education::firstOrCreate([
                'name' => $education['name'],
                'icon' => '<i class="fa-solid fa-child"></i>',
                'slug' => \Str::slug($education['name'])
            ]);
        }
    }
}