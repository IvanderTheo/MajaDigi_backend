<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransJatimRoutesDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('trans_jatim__detail__routes')->truncate();

        DB::table('trans_jatim__detail__routes')->insert([
            [
                'halte_name' => 'Halte Terminal Porong',
                'latitude' => '-7.538562',
                'longitude' => '112.695812',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Gedang',
                'latitude' => '-7.535069',
                'longitude' => '112.700963',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Tanggulangin',
                'latitude' => '-7.507116',
                'longitude' => '112.708273',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Keramean',
                'latitude' => '-7.492475',
                'longitude' => '112.710938',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Terminal Larangan',
                'latitude' => '-7.466692',
                'longitude' => '112.712460',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Lemah Putro',
                'latitude' => '-7.452591',
                'longitude' => '112.714876',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Alun- Alun I',
                'latitude' => '-7.447055',
                'longitude' => '112.717286',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Sun City I',
                'latitude' => '-7.450053',
                'longitude' => '112.710307',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Pondok Mutiara',
                'latitude' => '-7.448400',
                'longitude' => '112.702277',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Medaeng',
                'latitude' => '-7.350017',
                'longitude' => '112.713193',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte transit point transjatim',
                'latitude' => '-7.351401',
                'longitude' => '112.725037',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Bungurasih Luar',
                'latitude' => '-7.349996',
                'longitude' => '112.728943',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Segoromadu I',
                'latitude' => '-7.193713',
                'longitude' => '112.645351',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Gelora Joko Samudra I',
                'latitude' => '-7.184874',
                'longitude' => '112.648004',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte BNI I',
                'latitude' => '-7.170779',
                'longitude' => '112.652496',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte RS Semen Gresik I',
                'latitude' => '-7.166789',
                'longitude' => '112.641443',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Universitas Muhammadiyah Gresik I',
                'latitude' => '-7.161471',
                'longitude' => '112.616263',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Polres Gresik 1',
                'latitude' => '-7.166520',
                'longitude' => '112.609723',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Halte Kantor Bupati Gresik I',
                'latitude' => '-7.167784',
                'longitude' => '112.599605',
                'transjatim_route_id' => '1'
            ],
            [
                'halte_name' => 'Terminal Bunder (OD)',
                'latitude' => '-7.170311',
                'longitude' => '112.584515',
                'transjatim_route_id' => '1'
            ],
            
            //id 2
            [
                'halte_name' => 'Halte Dukuh Menanggal ',
                'latitude' => '-7.343455',
                'longitude' => '112.728910',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Siwalankerto 2',
                'latitude' => '-7.336854',
                'longitude' => '112.729576',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Medaeng',
                'latitude' => '-7.350017',
                'longitude' => '112.713193',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Kemendung 2',
                'latitude' => '-7.370142',
                'longitude' => '112.650946',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Trosobo Pos 2',
                'latitude' => '-7.375484',
                'longitude' => '112.636076',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Bypass Timur 2',
                'latitude' => '-7.389309',
                'longitude' => '112.606514',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Terminal Krian',
                'latitude' => '-7.411267',
                'longitude' => '112.582422',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Klenteng Krian',
                'latitude' => '-7.411143',
                'longitude' => '112.577011',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Jabaran 2',
                'latitude' => '-7.414324',
                'longitude' => '112.554749',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Bypass Barat 2',
                'latitude' => '-7.414754',
                'longitude' => '112.546764',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Bakalan 2',
                'latitude' => '-7.409580',
                'longitude' => '112.527798',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Bakung 2',
                'latitude' => '-7.416086',
                'longitude' => '112.501169',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Ciro 2',
                'latitude' => '-7.418621',
                'longitude' => '112.492907',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Singkalan 2',
                'latitude' => '-7.428453',
                'longitude' => '112.474484',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Kramat Temenggung 2 ',
                'latitude' => '-7.433167',
                'longitude' => '112.464659',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Mlirip 2',
                'latitude' => '-7.439814',
                'longitude' => '112.460183',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Mertex 2',
                'latitude' => '-7.452238',
                'longitude' => '112.459737',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Sekar Putih 2',
                'latitude' => '-7.463986',
                'longitude' => '112.460153',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Halte Gunung Gedangan',
                'latitude' => '-7.470404',
                'longitude' => '112.459470',
                'transjatim_route_id' => '2'
            ],
            [
                'halte_name' => 'Terminal kertajaya',
                'latitude' => '-7.490223',
                'longitude' => '112.449199',
                'transjatim_route_id' => '2'
            ],

            //id 3
            [
                'halte_name' => 'Terminal kertajaya',
                'latitude' => '-7.490223',
                'longitude' => '112.449199',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Pahlawan',
                'latitude' => '-7.480047',
                'longitude' => '112.439636',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte HOS Cokro Aminoto',
                'latitude' => '-7.468503',
                'longitude' => '112.439455',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Mlirip 1',
                'latitude' => '-7.456231',
                'longitude' => '112.437537',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Lespadangan 1',
                'latitude' => '-7.459305',
                'longitude' => '112.432339',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Pasar Terusan 1',
                'latitude' => '-7.457218',
                'longitude' => '112.430519',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Sidoharjo 1',
                'latitude' => '-7.448327',
                'longitude' => '112.430910',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Ngabar',
                'latitude' => '-7.424469',
                'longitude' => '112.431592',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Kupang 1',
                'latitude' => '-7.402693',
                'longitude' => '112.427424',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Bukit Kayu Putih 1',
                'latitude' => '-7.390679',
                'longitude' => '112.431350',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Desa Suru 1',
                'latitude' => '-7.372823',
                'longitude' => '112.424056',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Sekiping 1',
                'latitude' => '-7.351273',
                'longitude' => '112.421515',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Jatirowo 1',
                'latitude' => '-7.345693',
                'longitude' => '112.424681',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Pulorejo 1',
                'latitude' => '-7.328453',
                'longitude' => '112.424970',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Dawarblandong 1',
                'latitude' => '-7.319926',
                'longitude' => '112.426254',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Beru 1',
                'latitude' => '-7.314887',
                'longitude' => '112.426402',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Dapet 1',
                'latitude' => '-7.307860',
                'longitude' => '112.429069',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Dapet 3',
                'latitude' => '-7.305878',
                'longitude' => '112.429651',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Wonorejo',
                'latitude' => '-7.298967',
                'longitude' => '112.432407',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte RS Walisongo',
                'latitude' => '-7.290696',
                'longitude' => '112.435838',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Wahas 1',
                'latitude' => '-7.286406',
                'longitude' => '112.437574',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Wates 1',
                'latitude' => '-7.275176',
                'longitude' => '112.442263',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Rambu Islamic Center 1',
                'latitude' => '-7.280156',
                'longitude' => '112.440026',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Wates RS Husada',
                'latitude' => '-7.270593',
                'longitude' => '112.442755',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Pasar Balong panggang 1',
                'latitude' => '-7.267700',
                'longitude' => '112.447629',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Balongpanggang',
                'latitude' => '-7.267020',
                'longitude' => '112.452589',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte SMK Hidayatul Ummah 1',
                'latitude' => '-7.266786',
                'longitude' => '112.456266',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Kedungrukem 1',
                'latitude' => '-7.265107',
                'longitude' => '112.476697',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Munggugianti 1',
                'latitude' => '-7.263604',
                'longitude' => '112.491825',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Benjeng 1',
                'latitude' => '-7.262204',
                'longitude' => '112.500515',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Dadap Kuning 1',
                'latitude' => '-7.257205',
                'longitude' => '112.516424',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Morowudi 1',
                'latitude' => '-7.252904',
                'longitude' => '112.551820',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Spemajugres 1',
                'latitude' => '-7.251978',
                'longitude' => '112.559377',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Halte Cerme 1',
                'latitude' => '-7.232511',
                'longitude' => '112.565321',
                'transjatim_route_id' => '3'
            ],
            [
                'halte_name' => 'Terminal Bunder (OD)',
                'latitude' => '-7.170311',
                'longitude' => '112.584515',
                'transjatim_route_id' => '3'
            ],

            //id 4
            [
                'halte_name' => 'Terminal Bunder (OD)',
                'latitude' => '-7.170311',
                'longitude' => '112.584515',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Manyar 1',
                'latitude' => '-7.121786',
                'longitude' => '112.603557',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Betoyo 1',
                'latitude' => '-7.088028',
                'longitude' => '112.572802',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu RS Fathma Medika 1',
                'latitude' => '-7.074234',
                'longitude' => '112.573786',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Karangrejo 1',
                'latitude' => '-7.066679',
                'longitude' => '112.575635',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Bungah 1',
                'latitude' => '-7.055490',
                'longitude' => '112.576134',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Pegundan 1',
                'latitude' => '-7.013987',
                'longitude' => '112.567350',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Sidayu 1',
                'latitude' => '-6.997335',
                'longitude' => '112.563905',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Alun-alun Sidayu 1',
                'latitude' => '-6.992455',
                'longitude' => '112.563789',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Ujung Pangkah 1',
                'latitude' => '-6.983928',
                'longitude' => '112.550105',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Balai Desa Golokan 1',
                'latitude' => '-6.978143',
                'longitude' => '112.539971',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Glatik 1',
                'latitude' => '-6.976576',
                'longitude' => '112.537067',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Golokan 1',
                'latitude' => '-6.974186',
                'longitude' => '112.532680',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Balai Desa Wadeng 1',
                'latitude' => '-6.964528',
                'longitude' => '112.514368',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Wadeng 1',
                'latitude' => '-6.961777',
                'longitude' => '112.511798',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Moedhar Arifin Center 1',
                'latitude' => '-6.959687',
                'longitude' => '112.509431',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Sekapuk 1',
                'latitude' => '-6.956257',
                'longitude' => '112.504005',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Wotan 1',
                'latitude' => '-6.946909',
                'longitude' => '112.492933',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Surowiti 1',
                'latitude' => '-6.929000',
                'longitude' => '112.469276',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Panceng 1',
                'latitude' => '-6.911760',
                'longitude' => '112.457633',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Banyu Tengah 1',
                'latitude' => '-6.894083',
                'longitude' => '112.450140',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Gapura Perbatasan 1',
                'latitude' => '-6.889520',
                'longitude' => '112.446242',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Tlogosadang 1',
                'latitude' => '-6.887049',
                'longitude' => '112.441380',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Tlogo Ringin 1',
                'latitude' => '-6.884396',
                'longitude' => '112.436678',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Pantai Putri Klayar 1',
                'latitude' => '-6.882958',
                'longitude' => '112.433041',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Sumur Tiban 1',
                'latitude' => '-6.881830',
                'longitude' => '112.430037',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Dok Lamongan 1',
                'latitude' => '-6.878868',
                'longitude' => '112.423267',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Shorebase 1',
                'latitude' => '-6.877072',
                'longitude' => '112.413050',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Kemantren 1',
                'latitude' => '-6.875943',
                'longitude' => '112.401271',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Banjarwati',
                'latitude' => '-6.877698',
                'longitude' => '112.392025',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Univ. Sunan Drajat',
                'latitude' => '-6.881032',
                'longitude' => '112.391660',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Sunan Drajat',
                'latitude' => '-6.885359',
                'longitude' => '112.391552',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Pasar Wage',
                'latitude' => '-6.877645',
                'longitude' => '112.391853',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Pasar Kranji 1',
                'latitude' => '-6.876324',
                'longitude' => '112.383807',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Kampus Tabah 1',
                'latitude' => '-6.875504',
                'longitude' => '112.379290',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Rambu Tunggul Ulung 1',
                'latitude' => '-6.874854',
                'longitude' => '112.375481',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Shelter Tunggul 1',
                'latitude' => '-6.874630',
                'longitude' => '112.373528',
                'transjatim_route_id' => '4'
            ],
            [
                'halte_name' => 'Terminal Paciran (OD)',
                'latitude' => '-6.869592',
                'longitude' => '112.365804',
                'transjatim_route_id' => '4'
            ],

            //id 5
            [
                'halte_name' => 'Halte transit point transjatim',
                'latitude' => '-7.351401',
                'longitude' => '112.725037',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Halte Bungurasih Luar',
                'latitude' => '-7.349996',
                'longitude' => '112.728943',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Morokrembangan',
                'latitude' => '-7.219505',
                'longitude' => '112.730370',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Barunawati',
                'latitude' => '-7.220526',
                'longitude' => '112.732279',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Perak Timur',
                'latitude' => '-7.220986',
                'longitude' => '112.732689',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Sarwajala',
                'latitude' => '-7.222246',
                'longitude' => '112.739614',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Al-Irsyad',
                'latitude' => '-7.223617',
                'longitude' => '112.740904',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Semampir 1',
                'latitude' => '-7.225374',
                'longitude' => '112.744208',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Sidotopo 1',
                'latitude' => '-7.230320',
                'longitude' => '112.752349',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Simokerto 1',
                'latitude' => '-7.236135',
                'longitude' => '112.754778',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Kenjeran 1',
                'latitude' => '-7.242502',
                'longitude' => '112.759518',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Tuwowo 1',
                'latitude' => '-7.244895',
                'longitude' => '112.768791',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Pogot',
                'latitude' => '-7.233277',
                'longitude' => '112.772336',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Kedung Cowek 1',
                'latitude' => '-7.226644',
                'longitude' => '112.774892',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Samsat Kenjeran 1',
                'latitude' => '-7.222907',
                'longitude' => '112.776332',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Tanean Suramadu 1',
                'latitude' => '-7.154312',
                'longitude' => '112.781872',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter IKM 1',
                'latitude' => '-7.142880',
                'longitude' => '112.788457',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Mor Kepek',
                'latitude' => '-7.137941',
                'longitude' => '112.789400',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Sendang Dajah',
                'latitude' => '-7.122302',
                'longitude' => '112.793074',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Tangkel 1',
                'latitude' => '-7.060560',
                'longitude' => '112.794681',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Burneh',
                'latitude' => '-7.053367',
                'longitude' => '112.783620',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Bebek Sinjay 1',
                'latitude' => '-7.043636',
                'longitude' => '112.778445',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter RSUD Bangkalan 1',
                'latitude' => '-7.029733',
                'longitude' => '112.759238',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Jokotole',
                'latitude' => '-7.028755',
                'longitude' => '112.754209',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Pendopo Alun-Alun',
                'latitude' => '-7.029746',
                'longitude' => '112.749016',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Masjid Agung',
                'latitude' => '-7.029899',
                'longitude' => '112.746708',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Rambu Pasar Kapoh',
                'latitude' => '-7.034332',
                'longitude' => '112.743855',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Pasar Senenan',
                'latitude' => '-7.039098',
                'longitude' => '112.740877',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Stadion Bangkalan 1',
                'latitude' => '-7.042389',
                'longitude' => '112.738716',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Shelter Kantor Bupati Bangkalan',
                'latitude' => '-7.047306',
                'longitude' => '112.735720',
                'transjatim_route_id' => '5'
            ],
            [
                'halte_name' => 'Terminal Bangkalan',
                'latitude' => '-7.052596',
                'longitude' => '112.732712',
                'transjatim_route_id' => '5'
            ],

            //id 6
            
            [
                'halte_name' => 'Halte Terminal Porong',
                'latitude' => '-7.538562',
                'longitude' => '112.695812',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Arteri Porong',
                'latitude' => '-7.539130',
                'longitude' => '112.685054',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Gempol 1',
                'latitude' => '-7.554246',
                'longitude' => '112.695015',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Apollo',
                'latitude' => '-7.578371',
                'longitude' => '112.690890',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Japanan 1',
                'latitude' => '-7.564217',
                'longitude' => '112.691579',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Carat 1',
                'latitude' => '-7.562167',
                'longitude' => '112.682361',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Nglawang 1',
                'latitude' => '-7.568496',
                'longitude' => '112.673974',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter PUSDIK BRIMOB 1',
                'latitude' => '-7.566735',
                'longitude' => '112.658037',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Watesnegoro 1',
                'latitude' => '-7.564722',
                'longitude' => '112.650075',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Manduro 1',
                'latitude' => '-7.562560',
                'longitude' => '112.640370',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Wonosari 1',
                'latitude' => '-7.559757',
                'longitude' => '112.633088',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Kecapangan 1',
                'latitude' => '-7.555837',
                'longitude' => '112.625852',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Ngoro Industri 1',
                'latitude' => '-7.552791',
                'longitude' => '112.619460',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Kembangsri 1',
                'latitude' => '-7.540053',
                'longitude' => '112.622610',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Jajar 1',
                'latitude' => '-7.532815',
                'longitude' => '112.616578',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Raya Jasem 1',
                'latitude' => '-7.529989',
                'longitude' => '112.601269',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Pungging 1',
                'latitude' => '-7.525266',
                'longitude' => '112.583487',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'terminal Mojosari',
                'latitude' => '-7.522730',
                'longitude' => '112.574822',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Hayam Wuruk 1',
                'latitude' => '-7.519283',
                'longitude' => '112.562075',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Pasar Legi 1',
                'latitude' => '-7.514764',
                'longitude' => '112.556455',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Stadion 1',
                'latitude' => '-7.511877',
                'longitude' => '112.548509',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Polres Mojokerto 1',
                'latitude' => '-7.509299',
                'longitude' => '112.539569',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter Gapura Perbatasan 1',
                'latitude' => '-7.506385',
                'longitude' => '112.531491',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Mojoroto 1',
                'latitude' => '-7.504354',
                'longitude' => '112.524430',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Pustu Ngrowo 1',
                'latitude' => '-7.501747',
                'longitude' => '112.517811',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Ngrowo Pendowo 1',
                'latitude' => '-7.500264',
                'longitude' => '112.509329',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Shelter RS Sido Waras',
                'latitude' => '-7.499021',
                'longitude' => '112.498593',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Bangsal 1',
                'latitude' => '-7.497793',
                'longitude' => '112.480273',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Rambu Jabon 1',
                'latitude' => '-7.494945',
                'longitude' => '112.458909',
                'transjatim_route_id' => '6'
            ],
            [
                'halte_name' => 'Terminal Kertajaya 1',
                'latitude' => '-7.490654',
                'longitude' => '112.449156',
                'transjatim_route_id' => '6'
            ],

            //id 7
            [
                'halte_name' => 'Terminal Lamongan',
                'latitude' => '-7.111398',
                'longitude' => '112.408424',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Gor 1',
                'latitude' => '-7.119513',
                'longitude' => '112.404084',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter SMPN 3 Lamongan 1',
                'latitude' => '-7.120407',
                'longitude' => '112.397572',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Made 1',
                'latitude' => '-7.122270',
                'longitude' => '112.391253',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Kebet 1',
                'latitude' => '-7.127349',
                'longitude' => '112.372520',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Balai Desa Baturono 1',
                'latitude' => '-7.131000',
                'longitude' => '112.360729',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Masjid Mustajabah 1',
                'latitude' => '-7.135046',
                'longitude' => '112.349067',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Baturono 1',
                'latitude' => '-7.138239',
                'longitude' => '112.340140',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu SMPN 1 Sukodadi 1',
                'latitude' => '-7.130830',
                'longitude' => '112.334229',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Menongo 1',
                'latitude' => '-7.116117',
                'longitude' => '112.326225',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter SDN Menongo 1',
                'latitude' => '-7.107100',
                'longitude' => '112.328703',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu UNISDA 1',
                'latitude' => '-7.095207',
                'longitude' => '112.332029',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Terminal Sukodadi 1',
                'latitude' => '-7.092599',
                'longitude' => '112.331439',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Cuping 1',
                'latitude' => '-7.078769',
                'longitude' => '112.336085',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Banjarmadu 1',
                'latitude' => '-7.068004',
                'longitude' => '112.339711',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Masjid AL-Attaqwa',
                'latitude' => '-7.065305',
                'longitude' => '112.340639',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Pucangro 1',
                'latitude' => '-7.042423',
                'longitude' => '112.347860',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Balai Desa Sungelebak 1',
                'latitude' => '-7.038713',
                'longitude' => '112.349249',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Ma Matholi\'ul Anwar 1',
                'latitude' => '-7.035193',
                'longitude' => '112.350515',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Kantor Desa Kendalkemlagi',
                'latitude' => '-7.023805',
                'longitude' => '112.355847',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Masjid Hidayatul Muslimin 1',
                'latitude' => '-7.008642',
                'longitude' => '112.363272',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Masjid Jami\' AL-Ikhlas',
                'latitude' => '-7.000538',
                'longitude' => '112.367161',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu SMPN 1 Karanggeneng 1',
                'latitude' => '-6.998323',
                'longitude' => '112.368293',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Kantor Kec. Karanggeneng',
                'latitude' => '-6.993542',
                'longitude' => '112.370585',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Pasar Karanggeneng 1',
                'latitude' => '-6.990883',
                'longitude' => '112.371935',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter SDN 288 Gresik 1',
                'latitude' => '-6.970220',
                'longitude' => '112.379622',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Pertigaan Takeran 1',
                'latitude' => '-6.957802',
                'longitude' => '112.389729',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Raya Takeran 1',
                'latitude' => '-6.939037',
                'longitude' => '112.409577',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Banyubang 1',
                'latitude' => '-6.925788',
                'longitude' => '112.415993',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Balai Desa Dagan 1',
                'latitude' => '-6.917651',
                'longitude' => '112.414770',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Raya Dagan 1',
                'latitude' => '-6.914716',
                'longitude' => '112.411734',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Wisata PJM 1',
                'latitude' => '-6.897622',
                'longitude' => '112.390180',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Sunan Drajat',
                'latitude' => '-6.885359',
                'longitude' => '112.391552',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Univ. Sunan Drajat',
                'latitude' => '-6.881032',
                'longitude' => '112.391660',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Pasar Wage',
                'latitude' => '-6.877645',
                'longitude' => '112.391853',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Pasar Kranji 1',
                'latitude' => '-6.876324',
                'longitude' => '112.383807',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Kampus Tabah 1',
                'latitude' => '-6.875504',
                'longitude' => '112.379290',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Rambu Tunggul Ulung 1',
                'latitude' => '-6.874854',
                'longitude' => '112.375481',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Shelter Tunggul 1',
                'latitude' => '-6.874630',
                'longitude' => '112.373528',
                'transjatim_route_id' => '7'
            ],
            [
                'halte_name' => 'Terminal Paciran (OD)',
                'latitude' => '-6.869592',
                'longitude' => '112.365804',
                'transjatim_route_id' => '7'
            ],

            //id 8
            [
                "halte_name" => "Terminal Hamid Rusdi",
                "latitude" => "-8.025591",
                "longitude" => "112.643884",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter GOR Ken Arok 1",
                "latitude" => "-8.012124",
                "longitude" => "112.643482",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Ki Ageng Gribig",
                "latitude" => "-7.979998",
                "longitude" => "112.668335",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Terminal Madyapuro",
                "latitude" => "-7.974768",
                "longitude" => "112.670543",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Eksisting Sawojajar 1",
                "latitude" => "-7.981614",
                "longitude" => "112.654775",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "St. Malang Kota Baru Barat",
                "latitude" => "-7.977096",
                "longitude" => "112.636868",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Kajoetangan",
                "latitude" => "-7.979965",
                "longitude" => "112.630033",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Kawi 1",
                "latitude" => "-7.976878",
                "longitude" => "112.621960",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Ijen 1",
                "latitude" => "-7.963172",
                "longitude" => "112.625404",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Eksisting Veteran 1",
                "latitude" => "-7.957100",
                "longitude" => "112.617123",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Ketawanggede 1",
                "latitude" => "-7.950501",
                "longitude" => "112.608823",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Dinoyo 1",
                "latitude" => "-7.936596",
                "longitude" => "112.605702",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Terminal Landungsari",
                "latitude" => "-7.924844",
                "longitude" => "112.598028",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Raya Tlogomas 1",
                "latitude" => "-7.921001",
                "longitude" => "112.594840",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Sengkaling 1",
                "latitude" => "-7.915679",
                "longitude" => "112.586845",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu DAU 1",
                "latitude" => "-7.916606",
                "longitude" => "112.582989",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Mulyoagung 1",
                "latitude" => "-7.922509",
                "longitude" => "112.581367",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Perempatan Semanding 1",
                "latitude" => "-7.922681",
                "longitude" => "112.575701",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Sumber Sekar 1",
                "latitude" => "-7.920452",
                "longitude" => "112.566243",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Banjartengah 1",
                "latitude" => "-7.916348",
                "longitude" => "112.566650",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Kampung Dokar Banjar 1",
                "latitude" => "-7.914605",
                "longitude" => "112.563499",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Kelurahan Junrejo 1",
                "latitude" => "-7.911083",
                "longitude" => "112.559799",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Kecamatan Junrejo 1",
                "latitude" => "-7.910566",
                "longitude" => "112.557623",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Gangsiran Wetan ",
                "latitude" => "-7.912990",
                "longitude" => "112.548951",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Gangsiran Puthuk 1",
                "latitude" => "-7.916159",
                "longitude" => "112.540493",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Jalibar Tlekung 1",
                "latitude" => "-7.912908",
                "longitude" => "112.537776",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Balai Desa Tlekung 1",
                "latitude" => "-7.911146",
                "longitude" => "112.538677",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu Krajan Tlekung 1",
                "latitude" => "-7.908367",
                "longitude" => "112.538286",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Rambu RS BAPTIS 1",
                "latitude" => "-7.906420",
                "longitude" => "112.536981",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Kementan BSIP 1",
                "latitude" => "-7.903278",
                "longitude" => "112.536249",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Oro-oro Ombo 1",
                "latitude" => "-7.896609",
                "longitude" => "112.534058",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Bukit Panderman 1",
                "latitude" => "-7.890323",
                "longitude" => "112.531896",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Shelter Oro-oro Ombo 3",
                "latitude" => "-7.888355",
                "longitude" => "112.529966",
                "transjatim_route_id" => "8"
            ],
            [
                "halte_name" => "Terminal Batu",
                "latitude" => "-7.882122",
                "longitude" => "112.533130",
                "transjatim_route_id" => "8"
            ],

            //id 9
            [
                "halte_name" => "Terminal Bunder (OD)",
                "latitude" => "-7.170311",
                "longitude" => "112.584515",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Kantor Bupati Gresik II",
                "latitude" => "-7.167535",
                "longitude" => "112.599907",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Polres Gresik 2",
                "latitude" => "-7.166407",
                "longitude" => "112.609220",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Universitas Muhammadiyah Gresik II",
                "latitude" => "-7.161617",
                "longitude" => "112.616022",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte RS Semen Gresik II",
                "latitude" => "-7.166747",
                "longitude" => "112.641857",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte BNI II",
                "latitude" => "-7.171857",
                "longitude" => "112.653465",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Gelora Joko Samudra II",
                "latitude" => "-7.185163",
                "longitude" => "112.648315",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Segoromadu II",
                "latitude" => "-7.193806",
                "longitude" => "112.645912",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte transit point transjatim",
                "latitude" => "-7.351401",
                "longitude" => "112.725037",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Bungurasih Luar",
                "latitude" => "-7.349996",
                "longitude" => "112.728943",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Pondok Jati",
                "latitude" => "-7.448135",
                "longitude" => "112.702410",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Sun City II",
                "latitude" => "-7.449773",
                "longitude" => "112.709942",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Alun-Alun II",
                "latitude" => "-7.447018",
                "longitude" => "112.717940",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Celep (Hanya menurunkan penumpang)",
                "latitude" => "-7.465411",
                "longitude" => "112.716932",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Bligo",
                "latitude" => "-7.474161",
                "longitude" => "112.715381",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Ngampelsari",
                "latitude" => "-7.491495",
                "longitude" => "112.711487",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Ngaban",
                "latitude" => "-7.500984",
                "longitude" => "112.709466",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Kalitengah",
                "latitude" => "-7.507705",
                "longitude" => "112.708504",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Shelter Arteri Porong",
                "latitude" => "-7.539130",
                "longitude" => "112.685054",
                "transjatim_route_id" => "9"
            ],
            [
                "halte_name" => "Halte Terminal Porong",
                "latitude" => "-7.538562",
                "longitude" => "112.695812",
                "transjatim_route_id" => "9"
            ],

            //id 10
            [
                "halte_name" => "Terminal Bunder (OD)",
                "latitude" => "-7.170311",
                "longitude" => "112.584515",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Kantor Bupati Gresik II",
                "latitude" => "-7.167535",
                "longitude" => "112.599907",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Polres Gresik 2",
                "latitude" => "-7.166407",
                "longitude" => "112.609220",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Universitas Muhammadiyah Gresik II",
                "latitude" => "-7.161617",
                "longitude" => "112.616022",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte RS Semen Gresik II",
                "latitude" => "-7.166747",
                "longitude" => "112.641857",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte BNI II",
                "latitude" => "-7.171857",
                "longitude" => "112.653465",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Gelora Joko Samudra II",
                "latitude" => "-7.185163",
                "longitude" => "112.648315",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Segoromadu II",
                "latitude" => "-7.193806",
                "longitude" => "112.645912",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte transit point transjatim",
                "latitude" => "-7.351401",
                "longitude" => "112.725037",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Bungurasih Luar",
                "latitude" => "-7.349996",
                "longitude" => "112.728943",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Pondok Jati",
                "latitude" => "-7.448135",
                "longitude" => "112.702410",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Sun City II",
                "latitude" => "-7.449773",
                "longitude" => "112.709942",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Alun-Alun II",
                "latitude" => "-7.447018",
                "longitude" => "112.717940",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Celep (Hanya menurunkan penumpang)",
                "latitude" => "-7.465411",
                "longitude" => "112.716932",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Bligo",
                "latitude" => "-7.474161",
                "longitude" => "112.715381",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Ngampelsari",
                "latitude" => "-7.491495",
                "longitude" => "112.711487",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Ngaban",
                "latitude" => "-7.500984",
                "longitude" => "112.709466",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Kalitengah",
                "latitude" => "-7.507705",
                "longitude" => "112.708504",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Shelter Arteri Porong",
                "latitude" => "-7.539130",
                "longitude" => "112.685054",
                "transjatim_route_id" => "10"
            ],
            [
                "halte_name" => "Halte Terminal Porong",
                "latitude" => "-7.538562",
                "longitude" => "112.695812",
                "transjatim_route_id" => "10"
            ]
        ]);
    }
}
