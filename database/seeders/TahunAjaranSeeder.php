<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahunAjaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('tahun_ajarans')->insert([
            ['tahunajaran' => '2023/2024', 'semester' => 'Ganjil', 'aktif' => 'Y'],
            ['tahunajaran' => '2023/2024', 'semester' => 'Genap', 'aktif' => 'N'],
            ['tahunajaran' => '2024/2025', 'semester' => 'Ganjil', 'aktif' => 'N'],
        ]);
    }
}
