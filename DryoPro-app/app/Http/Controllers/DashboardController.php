<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $suhu = Sensor::value('suhu');
        // $kelembaban = Sensor::value('kelembaban');


        return view('Dashboard', [
            "title" => "Dashboard",
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
