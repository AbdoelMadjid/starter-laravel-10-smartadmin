<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\temp\TemplateController;
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
}); */

Route::fallback([ErrorController::class, 'index']);


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [TemplateController::class, 'index'])->name('dashboard');
Route::get('/about', [TemplateController::class, 'about'])->name('about');

require __DIR__ . '/mainmenu-master.php';
require __DIR__ . '/mainmenu-walikelas.php';
require __DIR__ . '/mainmenu-gurumapel.php';
require __DIR__ . '/mainmenu-siswa.php';
