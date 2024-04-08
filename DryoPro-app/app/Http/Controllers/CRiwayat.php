<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;



class CRiwayat extends Controller
{
    public function index(){
        return view('riwayat', [
            "title" => "Riwayat",
            "riwayat" => Riwayat::latest()->paginate(7),
        ]);
    }

}
