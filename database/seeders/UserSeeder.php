<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Kantin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111111'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'YeQiu',
            'email' => 'yeqiu@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
        ]);
    }
}