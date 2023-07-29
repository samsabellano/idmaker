<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => 'Pictured', 'color' => '#3F993F'],
            ['name' => 'Printing', 'color' => '#1F75CC'],
            ['name' => 'Received', 'color' => '#BD7332'],
            ['name' => 'Delivered', 'color' => '#FF8B8B'],
            ['name' => 'Correction', 'color' => '#FD6852'],
            ['name' => 'Resolved', 'color' => '#7A7E87'],
        ];

        foreach ($statuses as $status) {
            Status::firstOrCreate([
                'name' => $status['name'],
                'color' => $status['color'],
                'slug' => \Str::slug($status['name'])
            ]);
        }
    }
}