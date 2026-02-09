<?php

namespace Database\Seeders;

use App\Models\User;   
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Known test user
        // Create or update the known test user (idempotent)
        User::updateOrCreate(
            ['email' => 'admin@test.com'],
            [
                'username' => 'adminuser',
                'name' => 'Admin User',
                'password' => bcrypt('password123'),
                'is_active' => true,
            ]
        );


        // 99 random users
        User::factory()->count(99)->create();
    }
}
