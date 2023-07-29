<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            Role::SUPER_ADMIN,
            Role::SCHOOL_ADMIN,
            Role::STAFF,
            Role::STUDENT
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role
            ]);
        }
    }
}