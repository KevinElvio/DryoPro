<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/about', function () {
    return view('about');
});
