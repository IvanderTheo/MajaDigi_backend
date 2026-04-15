<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AntrianPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('antrian_pasien')->insert([
            [
                'user_id' => '900e803d-61ce-4205-b0bd-662ac76e9674',
                'rs_id' => 1,
                'queue_number' => 1,
                'service_type' => 'Poli Umum',
                'queue_date' => '2026-04-09',
                'status' => 'waiting',
            ]
        ]);
    }
}
