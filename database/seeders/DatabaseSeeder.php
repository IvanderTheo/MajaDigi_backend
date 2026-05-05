<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('trans_jatim_detail_routes')->truncate();
        DB::table('transjatim_route')->truncate();
        DB::table('skrining_tbc')->truncate();
        DB::table('transjatim_trip')->truncate();
        DB::table('open_data_article')->truncate();
        DB::table('nomor_darurat')->truncate();
        DB::table('open_data_dataset')->truncate();
        DB::table('penerima_bansos')->truncate();
        DB::table('program_bansos')->truncate();
        DB::table('kesehatan_user')->truncate();
        DB::table('antrian_pasien')->truncate();
        DB::table('kamar_rs')->truncate();
        DB::table('rumah_sakit')->truncate();
        DB::table('users')->truncate();

        $this->call([
            UsersSeeder::class,
            NomorDaruratSeeder::class,
            OpenDataSeeder::class,
            ProgramBansosSeeder::class,
            RumahSakitSeeder::class,
            KamarRsSeeder::class,
            KamarSoetomoSeeder::class,
            AntrianPasienSeeder::class,
            SkriningTbcSeeder::class,
            TransJatimRoutesSeeder::class,
            TransJatimTripsSeeder::class,
            TransJatimRoutesDetailSeeder::class,
        ]);
    }
}
