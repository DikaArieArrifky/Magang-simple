<?php

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

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PendaftarController;

// halaman login (guest)
Route::get('/', function () {
    return view('landing');
});

// ======================
// ADMIN
// ======================
Route::get('/admin/login', [AdminController::class, 'loginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/lowongan', [AdminController::class, 'lowongan']);
    Route::post('/lowongan', [AdminController::class, 'storeLowongan']);
    Route::get('/lowongan/{id}/edit', [AdminController::class, 'editLowongan']);
    Route::post('/lowongan/{id}/update', [AdminController::class, 'updateLowongan']);

    Route::get('/lowongan/{id}/delete', [AdminController::class, 'deleteLowongan']);
    Route::get('/pendaftar', [AdminController::class, 'pendaftar']);
    Route::get('/pendaftar/{id}/approve', [AdminController::class, 'approve']);
    Route::get('/pendaftar/{id}/reject', [AdminController::class, 'reject']);

    Route::get('/logout', [AdminController::class, 'logout']);
});

// ======================
// GUEST
// ======================
Route::get('/lowongan', [LowonganController::class, 'index']);
Route::get('/daftar/{id}', [LowonganController::class, 'daftar']);
Route::post('/daftar', [PendaftarController::class, 'store']);
