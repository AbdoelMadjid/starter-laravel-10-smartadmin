<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_keahlians')->insert([
            ['kode_program' => '1001', 'kode_bidang' =>    '10', 'nama_program' =>    'Pengembangan Perangkat Lunak dan Gim'],
            ['kode_program' => '1002', 'kode_bidang' =>    '10', 'nama_program' =>    'Teknik Jaringan Komputer dan Telekomunikasi'],
            ['kode_program' => '1101', 'kode_bidang' =>    '11', 'nama_program' =>    'Pemasaran'],
            ['kode_program' => '1102', 'kode_bidang' =>    '11', 'nama_program' =>    'Manajemen Perkantoran dan Layanan Bisnis'],
            ['kode_program' => '1103', 'kode_bidang' =>    '11', 'nama_program' =>    'Akuntansi dan Keuangan Lembaga'],
        ]);
    }
}
