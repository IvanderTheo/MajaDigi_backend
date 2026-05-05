<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SkriningTbcSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID dari salah satu user yang ada. Jika kosong, buat UUID baru agar tidak error.
        $userId = DB::table('users')->value('id') ?? Str::uuid()->toString();

        DB::table('skrining_tbc')->insert([
            [
                'user_id' => $userId,
                'cough_duration' => 14, // integer (misal: hari)
                'fever' => true,        // boolean
                'weight_loss' => true,  // boolean
                'night_sweat' => true,  // boolean
                'screening_result' => 'High Risk',
                'screening_date' => Carbon::now(), // timestamp hari ini
            ],
            [
                'user_id' => $userId,
                'cough_duration' => 3,
                'fever' => false,
                'weight_loss' => false,
                'night_sweat' => false,
                'screening_result' => 'Low Risk',
                'screening_date' => Carbon::now()->subDays(2), // timestamp 2 hari lalu
            ]
        ]);
    }
}