<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update admin user
        User::updateOrCreate(
            ['email' => 'fear126@live.com'],
            [
                'name' => 'Admin User',
                'email' => 'fear126@live.com',
                'password' => Hash::make('F34r@9878695378'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // Also make any existing user with this email an admin
        User::where('email', 'fear126@live.com')->update(['role' => 'admin']);
    }
}
