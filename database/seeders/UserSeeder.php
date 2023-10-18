<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'ebel',
            'email' => 'ebel@gmail.com',
            'password' => bcrypt('ebel123'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'khaliq',
            'email' => 'khaliq@gmail.com',
            'password' => bcrypt('khaliq123'),
            'role' => 'user',
        ]);


    }
}