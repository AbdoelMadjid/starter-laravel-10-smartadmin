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

Route::middleware('walas')->prefix('walas')->group(function () {
    Route::get('/profil_walas', [WaliKelasController::class, 'walikelas_profil'])->name('profil_walas');
    Route::get('/data_kelas', [WaliKelasController::class, 'walikelas_data_kelas'])->name('data_kelas');
    Route::get('/identitas_siswa', [WaliKelasController::class, 'walikelas_identitas_siswa'])->name('identitas_siswa');
    Route::get('/rapor_siswa_absensi', [WaliKelasController::class, 'walikelas_rapor_siswa_absensi'])->name('rapor_siswa_absensi');
    Route::get('/rapor_siswa_kegiatan_eskul', [WaliKelasController::class, 'walikelas_rapor_siswa_kegiatan_eskul'])->name('rapor_siswa_kegiatan_eskul');
    Route::get('/rapor_siswa_prestasi_siswa', [WaliKelasController::class, 'walikelas_rapor_siswa_prestasi_siswa'])->name('rapor_siswa_prestasi_siswa');
    Route::get('/rapor_siswa_praktek_kerja', [WaliKelasController::class, 'walikelas_rapor_siswa_praktek_kerja'])->name('rapor_siswa_praktek_kerja');
    Route::get('/rapor_siswa_catatan', [WaliKelasController::class, 'walikelas_rapor_siswa_catatan'])->name('rapor_siswa_catatan');
    Route::get('/peringkat_kelas', [WaliKelasController::class, 'walikelas_peringkat_kelas'])->name('peringkat_kelas');
    Route::get('/remedial_walas', [WaliKelasController::class, 'walikelas_remedial'])->name('remedial_walas');
});
