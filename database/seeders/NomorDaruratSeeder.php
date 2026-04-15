<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NomorDaruratSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nomor_darurat')->insert([
            [
                'service_name' => 'Ambulans Gawat Darurat',
                'phone_number' => '118',
                'description' => 'Layanan darurat medis dan ambulans siap siaga 24 jam.',
            ],
            [
                'service_name' => 'Pemadam Kebakaran',
                'phone_number' => '113',
                'description' => 'Layanan pemadam kebakaran dan penyelamatan.',
            ],
            [
                'service_name' => 'Polisi',
                'phone_number' => '110',
                'description' => null, // Ini boleh null sesuai migration kamu
            ]
        ]);
    }
}