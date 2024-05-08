<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function F_Panduan()
    {
        return view('panduan', [
            "title" => "Panduan",
            "content" => Panduan::all()
        ]);
    }
}
