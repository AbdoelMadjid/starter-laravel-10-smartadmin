<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaliKelasController extends Controller
{
    public function walikelas_profil()
    {
        return view('walikelas.walikelas_profil');
    }
    public function walikelas_data_kelas()
    {
        return view('walikelas.walikelas_data_kelas');
    }
    public function walikelas_identitas_siswa()
    {
        return view('walikelas.walikelas_identitas_siswa');
    }
    public function walikelas_rapor_siswa_absensi()
    {
        return view('walikelas.walikelas_rapor_siswa_absensi');
    }
    public function walikelas_rapor_siswa_kegiatan_eskul()
    {
        return view('walikelas.walikelas_rapor_siswa_kegiatan_eskul');
    }
    public function walikelas_rapor_siswa_prestasi_siswa()
    {
        return view('walikelas.walikelas_rapor_siswa_prestasi_siswa');
    }
    public function walikelas_rapor_siswa_praktek_kerja()
    {
        return view('walikelas.walikelas_rapor_siswa_praktek_kerja');
    }
    public function walikelas_rapor_siswa_catatan()
    {
        return view('walikelas.walikelas_rapor_siswa_catatan');
    }
    public function walikelas_peringkat_kelas()
    {
        return view('walikelas.walikelas_peringkat_kelas');
    }
    public function walikelas_remedial()
    {
        return view('walikelas.walikelas_remedial');
    }
}
