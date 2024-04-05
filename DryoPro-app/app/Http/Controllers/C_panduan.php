<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panduan;


class C_panduan extends Controller
{
    public function F_Panduan (){
        return view('about', [
            "title" => "Panduan",
            "panduan" => Panduan::all()
        ]);
    }
}
