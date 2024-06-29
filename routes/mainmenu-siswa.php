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

Route::get('/siswa_profil', [SiswaController::class, 'siswa_profil'])->middleware('siswa')->name('siswa_profil');
Route::get('/siswa_lcks_penilaian', [SiswaController::class, 'siswa_lcks_penilaian'])->middleware('siswa')->name('siswa_lcks_penilaian');
Route::get('/siswa_lcks_absensi', [SiswaController::class, 'siswa_lcks_absensi'])->middleware('siswa')->name('siswa_lcks_absensi');
Route::get('/siswa_lcks_kegiatan_eskul', [SiswaController::class, 'siswa_lcks_kegiatan_eskul'])->middleware('siswa')->name('siswa_lcks_kegiatan_eskul');
Route::get('/siswa_lcks_prestasi_siswa', [SiswaController::class, 'siswa_lcks_prestasi_siswa'])->middleware('siswa')->name('siswa_lcks_prestasi_siswa');
Route::get('/siswa_lcks_praktek_kerja', [SiswaController::class, 'siswa_lcks_praktek_kerja'])->middleware('siswa')->name('siswa_lcks_praktek_kerja');
Route::get('/siswa_lcks_catatan', [SiswaController::class, 'siswa_lcks_catatan'])->middleware('siswa')->name('siswa_lcks_catatan');
Route::get('/siswa_remedial', [SiswaController::class, 'siswa_remedial'])->middleware('siswa')->name('siswa_remedial');
