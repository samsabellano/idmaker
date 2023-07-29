<?php

namespace Database\Seeders;

use App\Models\Suffix;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuffixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nameSuffixes = array('Jr', 'Sr', 'I', 'II', 'III', 'IV', 'V');

        foreach ($nameSuffixes as $suffix) {
            Suffix::firstOrCreate(['name' => $suffix]);
        }
    }
}