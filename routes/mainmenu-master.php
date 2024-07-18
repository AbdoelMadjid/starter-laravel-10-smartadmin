<?php

use App\Http\Controllers\AppFiturController;
use App\Http\Controllers\AppProfileController;
use App\Http\Controllers\BiodataPtkController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\KompetensiKeahlianController;
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


// Route::fallback([TemplateController::class, 'error_pages']);

/* Route::middleware(['auth'])->group(function () {
    Route::resource('app_fiturs', AppFiturController::class);
    Route::post('app_fiturs/toggle-aktif', [AppFiturController::class, 'toggleAktif'])->name('app_fiturs.toggleAktif');

    Route::get('app_profiles', [AppProfileController::class, 'show'])->name('app_profiles.show');
    Route::get('app_profiles/edit', [AppProfileController::class, 'edit'])->name('app_profiles.edit');
    Route::put('app_profiles', [AppProfileController::class, 'update'])->name('app_profiles.update');
    //Route::get('/app_fiturs', [AppFiturController::class, 'index'])->name('app_fiturs');

    Route::get('/master_profil', [MasterController::class, 'master_profil'])->name('master_profil');
}); */
//TOOLS
Route::middleware('admin')->prefix('tools')->group(function () {


    Route::resource('app_fiturs', AppFiturController::class);
    Route::post('app_fiturs/toggle-aktif', [AppFiturController::class, 'toggleAktif'])->name('app_fiturs.toggleAktif');

    Route::get('app_profiles', [AppProfileController::class, 'show'])->name('app_profiles.show');
    Route::get('app_profiles/edit', [AppProfileController::class, 'edit'])->name('app_profiles.edit');
    Route::put('app_profiles', [AppProfileController::class, 'update'])->name('app_profiles.update');
    //Route::get('/app_fiturs', [AppFiturController::class, 'index'])->name('app_fiturs');

    Route::get('/opsi_aplikasi', [MasterController::class, 'tools_opsi_aplikasi'])->name('opsi_aplikasi');
    Route::get('/impor_data_master', [MasterController::class, 'tools_impor_data_master'])->name('impor_data_master');
    Route::get('/ekspor_data_master', [MasterController::class, 'tools_ekspor_data_master'])->name('ekspor_data_master');
    Route::get('/backup_database', [MasterController::class, 'tools_backup_database'])->name('backup_database');
    Route::get('/data_login', [MasterController::class, 'tools_data_login'])->name('data_login');
});

//Profil Admin
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/profil_admin', [MasterController::class, 'master_profil'])->name('profil_admin');
});
//AKADEMIK
Route::middleware('admin')->prefix('akademik')->group(function () {

    Route::get('profil-sekolah', [ProfilSekolahController::class, 'show'])->name('profil-sekolah.index');
    Route::get('profil-sekolah/edit', [ProfilSekolahController::class, 'edit'])->name('profil-sekolah.edit');
    Route::put('profil-sekolah', [ProfilSekolahController::class, 'update'])->name('profil-sekolah.update');

    Route::resource('kompetensi-keahlian', KompetensiKeahlianController::class);

    Route::resource('biodata_ptk', BiodataPtkController::class);

    //Route::get('/indentitas_sekolah', [MasterController::class, 'akademik_indentitas_sekolah'])->name('indentitas_sekolah');
    //Route::get('/tenaga_pendidik', [MasterController::class, 'akademik_tenaga_pendidik'])->name('tenaga_pendidik');
    Route::get('/paket_keahlian', [MasterController::class, 'akademik_paket_keahlian'])->name('paket_keahlian');
    Route::get('/mata_pelajaran', [MasterController::class, 'akademik_mata_pelajaran'])->name('mata_pelajaran');
    Route::get('/capaian_pembelajaran', [MasterController::class, 'akademik_capaian_pembelajaran'])->name('capaian_pembelajaran');
    Route::get('/kelas_walikelas', [MasterController::class, 'akademik_kelas_walikelas'])->name('kelas_walikelas');
    Route::get('/peserta_didik', [MasterController::class, 'akademik_peserta_didik'])->name('peserta_didik');
});


//kurikulum
Route::middleware('admin')->prefix('kurikulum')->group(function () {

    Route::resource('tahun_ajaran', TahunAjaranController::class);

    Route::get('/versi', [MasterController::class, 'kurikulum_versi'])->name('versi');
    //Route::get('/tahunajaran', [MasterController::class, 'kurikulum_tahunajaran'])->name('tahunajaran');
    Route::get('/pengumuman', [MasterController::class, 'kurikulum_pengumuman'])->name('pengumuman');
    Route::get('/perakat_ujian', [MasterController::class, 'kurikulum_perakat_ujian'])->name('perakat_ujian');
    Route::get('/proses_kbm_perkelas', [MasterController::class, 'kurikulum_proses_kbm_perkelas'])->name('proses_kbm_perkelas');
    Route::get('/proses_kbm_perguru', [MasterController::class, 'kurikulum_proses_kbm_perguru'])->name('proses_kbm_perguru');
    Route::get('/proses_kbm_remedial', [MasterController::class, 'kurikulum_proses_kbm_remedial'])->name('proses_kbm_remedial');
    Route::get('/cetak_rapor', [MasterController::class, 'kurikulum_cetak_rapor'])->name('cetak_rapor');
    Route::get('/transkrip_nilai', [MasterController::class, 'kurikulum_transkrip_nilai'])->name('transkrip_nilai');
});
