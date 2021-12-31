<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\absenController;

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

Route::get('/', [absenController::class, 'index']);
Route::get('/absen/{kelas:kelas}', [absenController::class, 'show']);
Route::post('/absen', [absenController::class, 'input']);
Route::get('/search', [absenController::class, 'search']);
