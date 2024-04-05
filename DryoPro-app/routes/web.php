<?php

use App\Http\Controllers\C_panduan;
use App\Http\Controllers\CRiwayat;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/beranda', function () {
    return view('beranda', [
        "title" => "Beranda",
        "kondisi" => "Mati",
        "suhu" => "0°",
        "kelembapan" => "0",
    ]);
});

Route::get('/riwayat', [CRiwayat::class, 'index']);

Route::get('/about', [C_panduan::class, 'F_panduan']);


