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

Route::get('/siswa_profil', [SiswaController::class, 'siswa_profil'])->name('siswa_profil');
Route::get('/siswa_lcks_penilaian', [SiswaController::class, 'siswa_lcks_penilaian'])->name('siswa_lcks_penilaian');
Route::get('/siswa_lcks_absensi', [SiswaController::class, 'siswa_lcks_absensi'])->name('siswa_lcks_absensi');
Route::get('/siswa_lcks_kegiatan_eskul', [SiswaController::class, 'siswa_lcks_kegiatan_eskul'])->name('siswa_lcks_kegiatan_eskul');
Route::get('/siswa_lcks_prestasi_siswa', [SiswaController::class, 'siswa_lcks_prestasi_siswa'])->name('siswa_lcks_prestasi_siswa');
Route::get('/siswa_lcks_praktek_kerja', [SiswaController::class, 'siswa_lcks_praktek_kerja'])->name('siswa_lcks_praktek_kerja');
Route::get('/siswa_lcks_catatan', [SiswaController::class, 'siswa_lcks_catatan'])->name('siswa_lcks_catatan');
Route::get('/siswa_remedial', [SiswaController::class, 'siswa_remedial'])->name('siswa_remedial');
