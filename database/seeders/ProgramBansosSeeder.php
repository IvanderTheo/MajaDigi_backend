<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramBansosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('program_bansos')->insert([
            [
                'name' => 'Bantuan Langsung Tunai (BLT)',
                'description' => 'Bantuan uang tunai untuk masyarakat kurang mampu.',
                'total_fund' => 500000000.00, // Format decimal 15,2
                'quota_total' => 1000,
                'quota_distributed' => 500,
                'percentage' => 50.00, // Format decimal 5,2
            ],
            [
                'name' => 'Program Keluarga Harapan (PKH)',
                'description' => 'Bantuan sosial bersyarat kepada Keluarga Penerima Manfaat.',
                'total_fund' => 1000000000.00,
                'quota_total' => 2000,
                'quota_distributed' => 1500,
                'percentage' => 75.00,
            ]
        ]);
    }
}