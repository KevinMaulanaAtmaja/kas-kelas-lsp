<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'loginLayout']);

Route::middleware('checkLogin')->group(function(){
    // siswa
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/create', [SiswaController::class, 'create']);
    Route::post('/siswa/store', [SiswaController::class, 'store']);
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
    Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('update');
    Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);

    // pembayaran
    Route::resource('/pembayaran', PembayaranController::class);
    Route::get('/pembayaran/{id_siswa}/detail', [PembayaranController::class, 'detail']);

    // AuthController
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
});



// AuthController
Route::get('/auth/register', [AuthController::class, 'registerLayout'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::get('/auth/login', [AuthController::class, 'loginLayout'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
