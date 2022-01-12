<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\absenController;
use App\Http\Controllers\recaptsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('cobaa');
// });

Route::get('/', [absenController::class, 'index'])->middleware('guest');
Route::get('/absen/{kelas:kelas}', [absenController::class, 'show'])->middleware('guest');
Route::post('/absen', [absenController::class, 'input'])->middleware('guest');
Route::get('/search', [absenController::class, 'search'])->middleware('guest');

Route::get('/login', [absenController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [absenController::class, 'auth'])->middleware('guest');
Route::post('/logout', [absenController::class, 'logout'])->middleware('auth');

Route::get('/recapts', [recaptsController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/recapt/{kelas:kelas}', [recaptsController::class, 'show'])->middleware('auth')->middleware('auth');

Route::post('/recaptBulan/{kelas:kelas}', [recaptsController::class, 'show2'])->middleware('auth');

Route::get('/absen/{bulan:date}/{kelas:kelas}', [recaptsController::class, 'asw'])->middleware('auth');