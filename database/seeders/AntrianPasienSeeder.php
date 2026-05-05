<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class AntrianPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => bcrypt('123'),
            'role' => 'user',
        ]);

        DB::table('antrian_pasien')->insert([
            [
                'user_id' => $user->id,
                'rs_id' => 1,
                'queue_number' => 1,
                'service_type' => 'Poli Umum',
                'queue_date' => '2026-04-09',
                'status' => 'waiting',
            ]
        ]);
    }
}
