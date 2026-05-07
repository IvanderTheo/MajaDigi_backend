<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class PenerimaBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // ambil user
        $userId = DB::table('users')->value('id') ?? Str::uuid()->toString();

        $data = [];

        $statusList = ['pending', 'approved', 'rejected'];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id' => $userId,
                'bansos_kabupaten_id' => $i,
                'amount' => rand(500000, 2000000),
                'status' => $statusList[array_rand($statusList)],
                'received_date' => rand(0, 1) ? now()->subDays(rand(1, 30)) : null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('penerima_bansos')->insert($data);
    }
}
