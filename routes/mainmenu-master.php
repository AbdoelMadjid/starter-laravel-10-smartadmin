<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */


/* Route::fallback([TemplateController::class, 'error_pages']); */

Route::get('/master_profil', [MasterController::class, 'master_profil'])->name('master_profil');

// Tools
Route::get('/tools_opsi_aplikasi', [MasterController::class, 'tools_opsi_aplikasi'])->name('tools_opsi_aplikasi');
Route::get('/tools_impor_data_master', [MasterController::class, 'tools_impor_data_master'])->name('tools_impor_data_master');
Route::get('/tools_ekspor_data_master', [MasterController::class, 'tools_ekspor_data_master'])->name('tools_ekspor_data_master');
Route::get('/tools_backup_database', [MasterController::class, 'tools_backup_database'])->name('tools_backup_database');
Route::get('/tools_data_login', [MasterController::class, 'tools_data_login'])->name('tools_data_login');

//akademik
Route::get('/akademik_indentitas_sekolah', [MasterController::class, 'akademik_indentitas_sekolah'])->name('akademik_indentitas_sekolah');
Route::get('/akademik_tenaga_pendidik', [MasterController::class, 'akademik_tenaga_pendidik'])->name('akademik_tenaga_pendidik');
Route::get('/akademik_paket_keahlian', [MasterController::class, 'akademik_paket_keahlian'])->name('akademik_paket_keahlian');
Route::get('/akademik_mata_pelajaran', [MasterController::class, 'akademik_mata_pelajaran'])->name('akademik_mata_pelajaran');
Route::get('/akademik_capaian_pembelajaran', [MasterController::class, 'akademik_capaian_pembelajaran'])->name('akademik_capaian_pembelajaran');
Route::get('/akademik_kelas_walikelas', [MasterController::class, 'akademik_kelas_walikelas'])->name('akademik_kelas_walikelas');
Route::get('/akademik_peserta_didik', [MasterController::class, 'akademik_peserta_didik'])->name('akademik_peserta_didik');

//kurikulum
Route::get('/kurikulum_versi', [MasterController::class, 'kurikulum_versi'])->name('kurikulum_versi');
Route::get('/kurikulum_tahunajaran', [MasterController::class, 'kurikulum_tahunajaran'])->name('kurikulum_tahunajaran');
Route::get('/kurikulum_pengumuman', [MasterController::class, 'kurikulum_pengumuman'])->name('kurikulum_pengumuman');
Route::get('/kurikulum_perakat_ujian', [MasterController::class, 'kurikulum_perakat_ujian'])->name('kurikulum_perakat_ujian');
Route::get('/kurikulum_proses_kbm_perkelas', [MasterController::class, 'kurikulum_proses_kbm_perkelas'])->name('kurikulum_proses_kbm_perkelas');
Route::get('/kurikulum_proses_kbm_perguru', [MasterController::class, 'kurikulum_proses_kbm_perguru'])->name('kurikulum_proses_kbm_perguru');
Route::get('/kurikulum_proses_kbm_remedial', [MasterController::class, 'kurikulum_proses_kbm_remedial'])->name('kurikulum_proses_kbm_remedial');
Route::get('/kurikulum_cetak_rapor', [MasterController::class, 'kurikulum_cetak_rapor'])->name('kurikulum_cetak_rapor');
Route::get('/kurikulum_transkrip_nilai', [MasterController::class, 'kurikulum_transkrip_nilai'])->name('kurikulum_transkrip_nilai');
