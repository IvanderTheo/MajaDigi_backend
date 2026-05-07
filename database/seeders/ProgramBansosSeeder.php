<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramBansosSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [];

        for ($i = 1; $i <= 10; $i++) {
            $quota = rand(100, 1000);
            $distributed = rand(0, $quota);

            $programs[] = [
                'id' => $i,
                'name' => "Program Bansos $i",
                'description' => "Deskripsi program bansos ke-$i",
                'total_fund' => rand(10000000, 100000000),
                'quota_total' => $quota,
                'quota_distributed' => $distributed,
                'percentage' => ($quota > 0) ? ($distributed / $quota) * 100 : 0,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('program_bansos')->truncate();
        DB::table('program_bansos')->insert($programs);
    }
}