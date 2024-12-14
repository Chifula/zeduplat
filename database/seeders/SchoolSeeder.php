<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class SchoolSeeder extends Seeder
{
    public function run()
    {
        DB::table('schools')->insert([
            ['name' => 'School of Business', 'icon' => 'icons/business.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'School of Technology', 'icon' => 'icons/technology.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'School of Law', 'icon' => 'icons/law.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'School of Social Sciences', 'icon' => 'icons/social_sciences.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'School of Public Health', 'icon' => 'icons/public_health.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
