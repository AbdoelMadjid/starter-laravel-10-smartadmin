<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kompetensi_keahlians')->insert([
            ["kode_paket" => "411", "kode_bidang" => "10", "kode_program" => "1001", "nama_paket" => "Rekayasa Perangkat Lunak", "singkatan" => "RPL"],
            ["kode_paket" => "421", "kode_bidang" => "10", "kode_program" => "1002", "nama_paket" => "Teknik Komputer dan Jaringan", "singkatan" => "TKJ"],
            ["kode_paket" => "811", "kode_bidang" => "11", "kode_program" => "1101", "nama_paket" => "Bisnis Digital", "singkatan" => "BD"],
            ["kode_paket" => "821", "kode_bidang" => "11", "kode_program" => "1102", "nama_paket" => "Manajemen Perkantoran", "singkatan" => "MP"],
            ["kode_paket" => "833", "kode_bidang" => "11", "kode_program" => "1103", "nama_paket" => "Akuntansi", "singkatan" => "AK"],
        ]);
    }
}
