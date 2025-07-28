<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Database\Factories\StudentFactory as FactoriesStudentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Student;
use factories\StudentFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1000)->create();
        Student::factory(100)->create();
        // User::factory(1)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
