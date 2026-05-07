<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BansosKabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kabupatenList = [
            'Surabaya', 'Malang', 'Sidoarjo', 'Gresik', 'Jember',
            'Kediri', 'Blitar', 'Pasuruan', 'Mojokerto', 'Lamongan'
        ];

        $data = [];

        foreach ($kabupatenList as $i => $kab) {
            $quota = rand(50, 500);
            $distributed = rand(0, $quota);

            $data[] = [
                'program_id' => $i + 1,
                'kabupaten' => $kab,
                'quota' => $quota,
                'distributed' => $distributed,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('bansos_kabupaten')->insert($data);
    }
}
