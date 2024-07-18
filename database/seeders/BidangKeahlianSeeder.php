<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_keahlians')->insert([
            ['kode_bidang' => '01', 'nama_bidang' => 'Teknologi dan Rekayasa'],
            ['kode_bidang' => '02', 'nama_bidang' => 'Teknologi Informasi dan Komunikasi'],
            ['kode_bidang' => '03', 'nama_bidang' => 'Kesehatan'],
            ['kode_bidang' => '04', 'nama_bidang' => 'Agrobisnis dan Agroteknologi'],
            ['kode_bidang' => '05', 'nama_bidang' => 'Perikanan dan Kelautan'],
            ['kode_bidang' => '06', 'nama_bidang' => 'Bisnis dan Manajemen'],
            ['kode_bidang' => '07', 'nama_bidang' => 'Pariwisata'],
            ['kode_bidang' => '08', 'nama_bidang' => 'Seni Rupa dan Kriya'],
            ['kode_bidang' => '09', 'nama_bidang' => 'Seni Pertunjukan'],
            ['kode_bidang' => '10', 'nama_bidang' => 'Teknologi Informasi'],
            ['kode_bidang' => '11', 'nama_bidang' => 'Bisnis dan Manajemen'],
        ]);
    }
}
