<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Abdul Madjid',
            'email' => 'abdulmadjid@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Admin',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Tabiin',
            'email' => 'tabiin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Wali Kelas',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Ade Lina Inayatul Barkah',
            'email' => 'adelina@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Guru Mapel',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Azzam Ikbara Al-Madjid',
            'email' => 'ikbara@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Siswa',
            'remember_token' => Str::random(10),
        ]);
    }
}
