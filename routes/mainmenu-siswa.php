<?php

use App\Http\Controllers\SiswaController;
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

Route::middleware('siswa')->prefix('pesertadidik')->group(function () {
    Route::get('/profil_siswa', [SiswaController::class, 'siswa_profil'])->name('profil_siswa');
    Route::get('/lcks_penilaian', [SiswaController::class, 'siswa_lcks_penilaian'])->name('lcks_penilaian');
    Route::get('/lcks_absensi', [SiswaController::class, 'siswa_lcks_absensi'])->name('lcks_absensi');
    Route::get('/lcks_kegiatan_eskul', [SiswaController::class, 'siswa_lcks_kegiatan_eskul'])->name('lcks_kegiatan_eskul');
    Route::get('/lcks_prestasi_siswa', [SiswaController::class, 'siswa_lcks_prestasi_siswa'])->name('lcks_prestasi_siswa');
    Route::get('/lcks_praktek_kerja', [SiswaController::class, 'siswa_lcks_praktek_kerja'])->name('lcks_praktek_kerja');
    Route::get('/lcks_catatan', [SiswaController::class, 'siswa_lcks_catatan'])->name('lcks_catatan');
    Route::get('/remedial_siswa', [SiswaController::class, 'siswa_remedial'])->name('remedial_siswa');
});
