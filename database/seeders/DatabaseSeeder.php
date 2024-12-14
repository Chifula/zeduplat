<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SchoolFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SchoolSeeder::class);
        //$this->call(UsersTableSeeder::class,);
        $this->call(SchoolSeeder::class);
        $this->call(ProgramSeeder::class);
        User::factory(10)->create();
        SchoolFactory::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
