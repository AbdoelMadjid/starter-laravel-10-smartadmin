<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function master_profil()
    {
        return view('admin.master.master_profil');
    }
    //tools
    public function tools_opsi_aplikasi()
    {
        return view('admin.master.tools_opsi_aplikasi');
    }
    public function tools_impor_data_master()
    {
        return view('admin.master.tools_impor_data_master');
    }
    public function tools_ekspor_data_master()
    {
        return view('admin.master.tools_ekspor_data_master');
    }
    public function tools_backup_database()
    {
        return view('admin.master.tools_backup_database');
    }
    public function tools_data_login()
    {
        return view('admin.master.tools_data_login');
    }

    //akademik
    public function akademik_indentitas_sekolah()
    {
        return view('admin.master.akademik_indentitas_sekolah');
    }
    public function akademik_tenaga_pendidik()
    {
        return view('admin.master.akademik_tenaga_pendidik');
    }
    public function akademik_paket_keahlian()
    {
        return view('admin.master.akademik_paket_keahlian');
    }
    public function akademik_mata_pelajaran()
    {
        return view('admin.master.akademik_mata_pelajaran');
    }
    public function akademik_capaian_pembelajaran()
    {
        return view('admin.master.akademik_capaian_pembelajaran');
    }
    public function akademik_kelas_walikelas()
    {
        return view('admin.master.akademik_kelas_walikelas');
    }
    public function akademik_peserta_didik()
    {
        return view('admin.master.akademik_peserta_didik');
    }

    //kurikulum
    public function kurikulum_versi()
    {
        return view('admin.master.kurikulum_versi');
    }
    public function kurikulum_tahunajaran()
    {
        return view('admin.master.kurikulum_tahunajaran');
    }
    public function kurikulum_pengumuman()
    {
        return view('admin.master.kurikulum_pengumuman');
    }
    public function kurikulum_perakat_ujian()
    {
        return view('admin.master.kurikulum_perakat_ujian');
    }
    public function kurikulum_proses_kbm_perkelas()
    {
        return view('admin.master.kurikulum_proses_kbm_perkelas');
    }
    public function kurikulum_proses_kbm_perguru()
    {
        return view('admin.master.kurikulum_proses_kbm_perguru');
    }
    public function kurikulum_proses_kbm_remedial()
    {
        return view('admin.master.kurikulum_proses_kbm_remedial');
    }
    public function kurikulum_cetak_rapor()
    {
        return view('admin.master.kurikulum_cetak_rapor');
    }
    public function kurikulum_transkrip_nilai()
    {
        return view('admin.master.kurikulum_transkrip_nilai');
    }
}
