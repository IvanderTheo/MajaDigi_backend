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
        ],
        [
            'name' => 'RSUD Dr. Soetomo',
            'city' => 'Surabaya',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Mayjen Prof. Dr. Moestopo No.6-8',
            'phone' => '0315501078'
        ],
        [
            'name' => 'RSUD Daha Husada',
            'city' => 'Kediri',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Veteran No.48',
            'phone' => '0354681234'
        ],
        [
            'name' => 'RSUD Haji Prov. Jatim',
            'city' => 'Surabaya',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Manyar Kertoadi',
            'phone' => '0315924000'
        ],
        [
            'name' => 'RSUD Karsa Husada Batu',
            'city' => 'Batu',
            'type' => 'Rumah Sakit Umum',
            'address' => 'Jl. Ahmad Yani No.11',
            'phone' => '0341512312'
        ]
    ]);
    }
}
