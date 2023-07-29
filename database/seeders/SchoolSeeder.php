<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::firstOrCreate([
            'name' => 'University of Mindanao',
            'address' => 'Bolton St, Poblacion District, Davao City, 8000 Davao del Sur',
            'logo' => 'https://upload.wikimedia.org/wikipedia/en/a/a8/University_of_Mindanao_Logo.png',
            'background_image' => 'https://umindanao.edu.ph/images/tour/be.jpg',
            'has_olsis' => false,
        ]);
    }
}