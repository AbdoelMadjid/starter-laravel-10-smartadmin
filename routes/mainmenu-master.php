<?php

use App\Http\Controllers\AppFiturController;
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

Route::resource('app_fiturs', AppFiturController::class)->middleware('admin');

//Route::get('/app_fiturs', [AppFiturController::class, 'index'])->middleware('admin')->name('app_fiturs');

Route::get('/master_profil', [MasterController::class, 'master_profil'])->middleware('admin')->name('master_profil');

// Tools
Route::get('/tools_opsi_aplikasi', [MasterController::class, 'tools_opsi_aplikasi'])->middleware('admin')->name('tools_opsi_aplikasi');
Route::get('/tools_impor_data_master', [MasterController::class, 'tools_impor_data_master'])->middleware('admin')->name('tools_impor_data_master');
Route::get('/tools_ekspor_data_master', [MasterController::class, 'tools_ekspor_data_master'])->middleware('admin')->name('tools_ekspor_data_master');
Route::get('/tools_backup_database', [MasterController::class, 'tools_backup_database'])->middleware('admin')->name('tools_backup_database');
Route::get('/tools_data_login', [MasterController::class, 'tools_data_login'])->middleware('admin')->name('tools_data_login');

//akademik
Route::get('/akademik_indentitas_sekolah', [MasterController::class, 'akademik_indentitas_sekolah'])->middleware('admin')->name('akademik_indentitas_sekolah');
Route::get('/akademik_tenaga_pendidik', [MasterController::class, 'akademik_tenaga_pendidik'])->middleware('admin')->name('akademik_tenaga_pendidik');
Route::get('/akademik_paket_keahlian', [MasterController::class, 'akademik_paket_keahlian'])->middleware('admin')->name('akademik_paket_keahlian');
Route::get('/akademik_mata_pelajaran', [MasterController::class, 'akademik_mata_pelajaran'])->middleware('admin')->name('akademik_mata_pelajaran');
Route::get('/akademik_capaian_pembelajaran', [MasterController::class, 'akademik_capaian_pembelajaran'])->middleware('admin')->name('akademik_capaian_pembelajaran');
Route::get('/akademik_kelas_walikelas', [MasterController::class, 'akademik_kelas_walikelas'])->middleware('admin')->name('akademik_kelas_walikelas');
Route::get('/akademik_peserta_didik', [MasterController::class, 'akademik_peserta_didik'])->middleware('admin')->name('akademik_peserta_didik');

//kurikulum
Route::get('/kurikulum_versi', [MasterController::class, 'kurikulum_versi'])->middleware('admin')->name('kurikulum_versi');
Route::get('/kurikulum_tahunajaran', [MasterController::class, 'kurikulum_tahunajaran'])->middleware('admin')->name('kurikulum_tahunajaran');
Route::get('/kurikulum_pengumuman', [MasterController::class, 'kurikulum_pengumuman'])->middleware('admin')->name('kurikulum_pengumuman');
Route::get('/kurikulum_perakat_ujian', [MasterController::class, 'kurikulum_perakat_ujian'])->middleware('admin')->name('kurikulum_perakat_ujian');
Route::get('/kurikulum_proses_kbm_perkelas', [MasterController::class, 'kurikulum_proses_kbm_perkelas'])->middleware('admin')->name('kurikulum_proses_kbm_perkelas');
Route::get('/kurikulum_proses_kbm_perguru', [MasterController::class, 'kurikulum_proses_kbm_perguru'])->middleware('admin')->name('kurikulum_proses_kbm_perguru');
Route::get('/kurikulum_proses_kbm_remedial', [MasterController::class, 'kurikulum_proses_kbm_remedial'])->middleware('admin')->name('kurikulum_proses_kbm_remedial');
Route::get('/kurikulum_cetak_rapor', [MasterController::class, 'kurikulum_cetak_rapor'])->middleware('admin')->name('kurikulum_cetak_rapor');
Route::get('/kurikulum_transkrip_nilai', [MasterController::class, 'kurikulum_transkrip_nilai'])->middleware('admin')->name('kurikulum_transkrip_nilai');
