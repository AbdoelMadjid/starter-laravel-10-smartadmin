<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpsiLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'peran' => 'Admin',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran' => 'Wali Kelas',
                'aktif' => 'N',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran' => 'Guru Mapel',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran' => 'Siswa',
                'aktif' => 'N',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('opsi_logins')->insert($data);
    }
}
