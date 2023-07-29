<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'username' => 'samsabellano',
            'password' => Hash::make('admin'),
            'role_id' => Role::SUPER_ADMIN,
            'remember_token' => rand(1, 10)
        ]);
    }
}