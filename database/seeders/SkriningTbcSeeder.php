<?php

namespace Database\Seeders;

use App\Models\SkriningTbc;
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

        SkriningTbc::create([
            
                'user_id' => $userId,
                'cough_duration' => 14, // integer (misal: hari)
                'fever' => 'true',        // boolean
                'weight_loss' => 'true',  // boolean
                'night_sweat' => 'true',  // boolean
                'screening_result' => 'High Risk',
                'screening_date' => Carbon::now(), // timestamp hari ini
                'updated_at'=>now(),
        ]);
    }
}