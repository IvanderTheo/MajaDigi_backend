<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntrianSoetomoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kamar_rs')->insert([
            [
                'rs_id'=>'4',
                'room_type'=>'general',
                'total_room'=>'1033',
                'available_room'=>'232',
                'last_updated'=>null
            ]
        ])
    }
}
