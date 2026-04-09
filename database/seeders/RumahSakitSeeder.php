<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rumah_sakit')->insert([
        [
            'name' => 'RSUD Kota Malang',
            'city' => 'Malang',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Rajasa No.27',
            'phone' => '0341-123456'
        ],
        [
            'name' => 'RSUD Dr. Saiful Anwar',
            'city' => 'Malang',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Jaksa Agung Suprapto No.2',
            'phone' => '0341-654321'
        ],
         [
            'name' => 'RSUD Kota Batu',
            'city' => 'Batu',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Indragiri No.10',
            'phone' => '0341-789012'
        ]
    ]);
    }
}
