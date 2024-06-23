<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 2,
                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$eR/Ir9AIvj3ku5QVHhaN8egr/upSFkW4MiIsjnXlu8kZCi9DB3tf.',
                'admin' => 0,
                'remember_token' => null,
                'created_at' => '2024-06-20 12:55:08',
                'updated_at' => '2024-06-20 12:55:08',
            ],
            [
                'id' => 3,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$eR/Ir9AIvj3ku5QVHhaN8egr/upSFkW4MiIsjnXlu8kZCi9DB3tf.',
                'admin' => 1,
                'remember_token' => null,
                'created_at' => '2024-06-20 12:55:08',
                'updated_at' => '2024-06-20 12:55:08',
            ],
        ]);
    }
}
