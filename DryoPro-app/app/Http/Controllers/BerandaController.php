<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('beranda', [
            "title" => "Beranda",
            "suhu" => "0°",
            "kelembapan" => "0",
        ]);
    }
}
