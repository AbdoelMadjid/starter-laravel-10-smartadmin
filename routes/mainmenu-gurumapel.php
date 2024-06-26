<?php

use App\Http\Controllers\GuruMapelController;
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

Route::get('/gurumapel_profil', [GuruMapelController::class, 'gurumapel_profil'])->name('gurumapel_profil');
Route::get('/gurumapel_data_kbm', [GuruMapelController::class, 'gurumapel_data_kbm'])->name('gurumapel_data_kbm');
Route::get('/gurumapel_capaian_pembelajaran', [GuruMapelController::class, 'gurumapel_capaian_pembelajaran'])->name('gurumapel_capaian_pembelajaran');
Route::get('/gurumapel_proses_penilaian', [GuruMapelController::class, 'gurumapel_proses_penilaian'])->name('gurumapel_proses_penilaian');
Route::get('/gurumapel_absensi', [GuruMapelController::class, 'gurumapel_absensi'])->name('gurumapel_absensi');
