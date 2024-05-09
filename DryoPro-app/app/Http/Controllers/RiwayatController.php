<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    public function index(){
        return view('riwayat', [
            "title" => "Riwayat",
            "riwayat" => Riwayat::latest()->paginate(7),
             
        ]);
    }
}
