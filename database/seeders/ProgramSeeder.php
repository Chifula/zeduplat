<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        DB::table('programs')->insert([
            ['school_id' => 3, 'name' => 'Bachelor of Laws', 'description' => 'A program focused on the study of law.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Business Administration', 'description' => 'A program focused on business administration skills.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Marketing', 'description' => 'A program focused on marketing and advertising.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Human Resource Management', 'description' => 'A program focused on managing human resources effectively.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Purchasing and Supply', 'description' => 'A program focused on procurement and supply chain management.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Accountancy', 'description' => 'A program focused on accounting and financial reporting.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Banking and Finance', 'description' => 'A program focused on banking and financial systems.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Actuarial Science', 'description' => 'A program focused on risk analysis and mathematics.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Insurance and Pension Management', 'description' => 'A program focused on insurance and pension systems.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 1, 'name' => 'Bachelor of Economics and Finance', 'description' => 'A program focused on economic theory and financial analysis.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 4, 'name' => 'Bachelor of Political and International Relations', 'description' => 'A program focused on politics and global relations.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 4, 'name' => 'Bachelor of Development Studies', 'description' => 'A program focused on social and economic development.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 2, 'name' => 'Bachelor of Information Systems and Technology', 'description' => 'A program focused on IT systems and their applications.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 2, 'name' => 'Bachelor of Computer Science', 'description' => 'A program focused on computer programming and technology.', 'created_at' => now(), 'updated_at' => now()],
            ['school_id' => 5, 'name' => 'Bachelor of Public Administration', 'description' => 'A program focused on administrative roles in the public sector.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
