<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_sekolahs')->insert([
            [
                'npsn' => '20213871',
                'nm_sekolah' => 'SMKN 1 Kadipaten',
                'status' => 'Negeri',
                'alamat_blok' => 'Jl. Siliwangi',
                'alamat_no' => '30',
                'alamat_rt' => '02',
                'alamat_rw' => '05',
                'alamat_desa' => 'Liangjulang',
                'alamat_kec' => 'Kadipaten',
                'alamat_kab' => 'Majalengka',
                'alamat_provinsi' => 'Jawa Barat',
                'alamat_kodepos' => '45452',
                'alamat_telepon' => '6614343',
                'alamat_website' => 'http://smkn1kadipaten.sch.id',
                'alamat_email' => 'info@smkn1kadipaten.sch.id',
                'logo_sekolah' => 'logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
