<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Goola Quiz',
            'email' => 'admin@goola-quiz.com',
            'role' => 'admin',
        ])->each(function ($user) {
            $user->save();
        });

        \App\Models\User::factory()->create([
            'name' => 'Mohamad Akbar',
            'email' => 'muhamadakbar1801@gmail.com',
            'role' => 'user',
        ])->each(function ($user) {
            $user->save();
        });
    }
}
