<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class BerandaController extends Controller
{
    public function index(){
        // $suhu = Sensor::value('suhu');
        // $kelembaban = Sensor::value('kelembaban');


        return view('beranda', [
            "title" => "Beranda",
            // "suhu" => $suhu,
            // "kelembaban" => $kelembaban,
        ]);
    }

    
    public function bacasuhu(){
        $sensor = Sensor::select('*')->get();

        return view('bacasuhu',['nilaisensor'=> $sensor]);
    }
    public function bacakelembaban(){
        $sensor = Sensor::select('*')->get();

        return view('bacakelembaban',['nilaisensor'=> $sensor]);
    }
    public function simpansensor(){
      Sensor::where('id','1')->update(['suhu'=> request()->nilaisuhu, 'kelembaban'=> request()->nilaikelembaban]);
    }
}
