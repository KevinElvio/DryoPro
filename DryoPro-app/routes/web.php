<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login',[
        "title" => "Login"
    ]);
});
Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/beranda', function () {
    return view('beranda',[
        "title" => "Beranda"
    ]);
});

Route::get('/riwayat', function () {
    return view('riwayat',[
        "title" => "Riwayat"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Panduan"
    ]);
});
