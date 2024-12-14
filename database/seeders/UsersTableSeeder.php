<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'johndoe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Always hash passwords
                'nrc_number' => '1234567890123',
                'age' => 25,
                'gender' => 'male',
                'phone_number' => '0971234567',
                'year_of_study' => 3,
                'program_of_study' => 'Computer Science',
                'physical_address' => '123 Main Street, Lusaka, Zambia',
                'preferred_mode_of_contact' => 'email',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Jane',
                'lastname' => 'Smith',
                'email' => 'janesmith@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('securepassword'),
                'nrc_number' => '9876543210123',
                'age' => 22,
                'gender' => 'female',
                'phone_number' => '0979876543',
                'year_of_study' => 2,
                'program_of_study' => 'Information Technology',
                'physical_address' => '456 Secondary Road, Ndola, Zambia',
                'preferred_mode_of_contact' => 'phone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
