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

Route::middleware('gmp')->prefix('gurumapel')->group(function () {
    Route::get('/profil_gmp', [GuruMapelController::class, 'gurumapel_profil'])->name('profil_gmp');
    Route::get('/data_kbm', [GuruMapelController::class, 'gurumapel_data_kbm'])->name('data_kbm');
    Route::get('/capaian_pembelajaran', [GuruMapelController::class, 'gurumapel_capaian_pembelajaran'])->name('capaian_pembelajaran');
    Route::get('/proses_penilaian', [GuruMapelController::class, 'gurumapel_proses_penilaian'])->name('proses_penilaian');
    Route::get('/absensi', [GuruMapelController::class, 'gurumapel_absensi'])->name('absensi');
});
