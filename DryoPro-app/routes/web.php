<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\C_panduan;
use App\Http\Controllers\CRiwayat;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');

Route::get('/riwayat', [CRiwayat::class, 'index'])->middleware('auth');

Route::get('/about', [C_panduan::class, 'F_panduan'])->middleware('auth');

Route::get('/bacasuhu', [BerandaController::class, 'bacasuhu']);
Route::get('/bacakelembaban', [BerandaController::class, 'bacakelembaban']);

Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [BerandaController::class, 'simpansensor']);
