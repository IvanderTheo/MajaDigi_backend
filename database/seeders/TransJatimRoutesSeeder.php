<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransJatimRoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('transjatim_route')->insert([
            [
                'route_name'=>'JTM1',
                'start_point'=>'Sidoarjo via Surabaya',
                'end_point'=>'Gresik',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM2',
                'start_point'=>'Surabaya',
                'end_point'=>'Mojokerto',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM3',
                'start_point'=>'Mojokerto',
                'end_point'=>'Gresik',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM4',
                'start_point'=>'Gresik',
                'end_point'=>'Lamongan',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM5',
                'start_point'=>'Surabaya',
                'end_point'=>'Bangkalan',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM6',
                'start_point'=>'Sidoarjo',
                'end_point'=>'Mojokerto',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTM7',
                'start_point'=>'Terminal Lamongan',
                'end_point'=>'Terminal Paciran',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'MLG1',
                'start_point'=>'Terminal Hamid Rusdi',
                'end_point'=>'Terminal Batu',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTML1',
                'start_point'=>'Gresik',
                'end_point'=>'Sidoarjo via Surabaya',
                'ticket_price'=>null
            ],
            [
                'route_name'=>'JTML4',
                'start_point'=>'Terminal Bunder (OD)',
                'end_point'=>'Terminal Paciran (OD)',
                'ticket_price'=>null
            ]
        ]);
    }
}
