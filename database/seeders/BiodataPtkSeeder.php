<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BiodataPtk;

class BiodataPtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //BiodataPtk::factory()->count(100)->create();
        // Get users data
        // Get users data
        // Get users data
        $users = \App\Models\User::all();

        // Seed biodata_ptks table
        foreach ($users as $user) {
            BiodataPtk::create([
                'id_user' => $user->id,
                'nip' => null,
                'gelardepan' => '', // Example value
                'namalengkap' => $user->name,
                'gelarbelakang' => '', // Example value
                'jeniskelamin' => 'Laki-laki', // Example value
                'jenisguru' => 'Produktif', // Example value
                'tempatlahir' => 'Jakarta',
                'tanggallahir' => '1980-01-01',
                'agama' => 'Islam',
                'email' => $user->email,
                'nomorhp' => '08123456789',
                'photo' => null,
                'motto' => 'Motto example', // Example value
                'alamat_dusun' => 'Dusun Contoh', // Example value
                'alamat_jalan' => 'Jl. Contoh',
                'alamat_norumah' => '123',
                'alamat_rt' => '01',
                'alamat_rw' => '02',
                'alamat_desa' => 'Desa Contoh',
                'alamat_kec' => 'Kecamatan Contoh',
                'alamat_kab' => 'Kabupaten Contoh',
                'alamat_kodepos' => '12345',
                'aktif' => 'Aktif',
            ]);
        }
    }
}
