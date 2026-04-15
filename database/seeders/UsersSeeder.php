<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => '900e803d-61ce-4205-b0bd-662ac76e9674', // UUID unik
            'name' => 'Rofi Pratama',
            'email' => 'rofi@example.com',
            'phone_number' => '081234567890',
            'password' => bcrypt('password123'),
            'address' => 'Jl. Mawar No. 1, Talun, Indonesia',
            'latitude' => -8.1111111,
            'longitude' => 112.2222222,
            'birth_date' => '2003-07-01',
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
