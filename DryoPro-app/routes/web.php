<?php

use App\Http\Controllers\C_panduan;
use App\Http\Controllers\CRiwayat;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\RelayController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::post('/dashboard/toogle-status',[RiwayatController::class, "toogleStatus"]);
Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware('auth');

Route::get('/panduan', [PanduanController::class, 'F_panduan'])->middleware('auth');

Route::get('/bacasuhu', [DashboardController::class, 'bacasuhu']);
Route::get('/bacakelembaban', [DashboardController::class, 'bacakelembaban']);

Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [DashboardController::class, 'simpansensor']);

// Route::get('/kontrol', [DashboardController::class, 'update']);
// Route::get('/kontrol', [DashboardController::class, 'update']);
Route::get('/kontrol', [DashboardController::class, 'createRiwayat']);