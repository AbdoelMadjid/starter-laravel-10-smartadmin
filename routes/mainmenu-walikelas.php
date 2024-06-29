<?php

use App\Http\Controllers\WaliKelasController;
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

// DEVELOPER
Route::get('/walikelas_profil', [WaliKelasController::class, 'walikelas_profil'])->middleware('walas')->name('walikelas_profil');
Route::get('/walikelas_data_kelas', [WaliKelasController::class, 'walikelas_data_kelas'])->middleware('walas')->name('walikelas_data_kelas');
Route::get('/walikelas_identitas_siswa', [WaliKelasController::class, 'walikelas_identitas_siswa'])->middleware('walas')->name('walikelas_identitas_siswa');
Route::get('/walikelas_rapor_siswa_absensi', [WaliKelasController::class, 'walikelas_rapor_siswa_absensi'])->middleware('walas')->name('walikelas_rapor_siswa_absensi');
Route::get('/walikelas_rapor_siswa_kegiatan_eskul', [WaliKelasController::class, 'walikelas_rapor_siswa_kegiatan_eskul'])->middleware('walas')->name('walikelas_rapor_siswa_kegiatan_eskul');
Route::get('/walikelas_rapor_siswa_prestasi_siswa', [WaliKelasController::class, 'walikelas_rapor_siswa_prestasi_siswa'])->middleware('walas')->name('walikelas_rapor_siswa_prestasi_siswa');
Route::get('/walikelas_rapor_siswa_praktek_kerja', [WaliKelasController::class, 'walikelas_rapor_siswa_praktek_kerja'])->middleware('walas')->name('walikelas_rapor_siswa_praktek_kerja');
Route::get('/walikelas_rapor_siswa_catatan', [WaliKelasController::class, 'walikelas_rapor_siswa_catatan'])->middleware('walas')->name('walikelas_rapor_siswa_catatan');
Route::get('/walikelas_peringkat_kelas', [WaliKelasController::class, 'walikelas_peringkat_kelas'])->middleware('walas')->name('walikelas_peringkat_kelas');
Route::get('/walikelas_remedial', [WaliKelasController::class, 'walikelas_remedial'])->middleware('walas')->name('walikelas_remedial');
