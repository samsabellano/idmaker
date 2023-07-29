<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::firstOrCreate([
            'school_id' => School::where('name', 'University of Mindanao')->pluck('id')->first(),
            'user_id' => User::where('username', 'samsabellano')->pluck('id')->first(),
            'first_name' => 'Sam',
            'middle_name' => 'Canilanza',
            'last_name' => 'Sabellano',
            'suffix' => 'Jr'
        ]);
    }
}