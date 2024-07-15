<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruMapelController extends Controller
{
    public function gurumapel_profil()
    {
        return view('gurumapel.gurumapel_profil');
    }
    public function gurumapel_data_kbm()
    {
        return view('gurumapel.gurumapel_data_kbm');
    }
    public function gurumapel_capaian_pembelajaran()
    {
        return view('gurumapel.gurumapel_capaian_pembelajaran');
    }
    public function gurumapel_proses_penilaian()
    {
        return view('gurumapel.gurumapel_proses_penilaian');
    }
    public function gurumapel_absensi()
    {
        return view('gurumapel.gurumapel_absensi');
    }
}
