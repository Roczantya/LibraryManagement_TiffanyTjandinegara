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
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Pastikan password di-hash
            'role' => 'admin',  // Set role sebagai admin
        ]);

        User::create([
            'name' => 'Librarian User',
            'email' => 'library@example.com',
            'password' => bcrypt('password'), // Pastikan password di-hash
            'role' => 'library',  // Set role sebagai admin
        ]);
    }
}
