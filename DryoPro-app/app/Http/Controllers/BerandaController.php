<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use App\Models\Riwayat;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BerandaController extends Controller
{
    public function index()
    {
        // $suhu = Sensor::value('suhu');
        // $kelembaban = Sensor::value('kelembaban');

        $status = Kontrol::find(1);
        // dd($statusText);
        return view('Beranda', [
            "title" => "Beranda",
            'status' => $status,
        ]);
    }


    public function bacasuhu()
    {
        $sensor = Sensor::select('*')->get();

        return view('bacasuhu', ['nilaisensor' => $sensor]);
    }
    public function bacakelembaban()
    {
        $sensor = Sensor::select('*')->get();

        return view('bacakelembaban', ['nilaisensor' => $sensor]);
    }
    public function simpansensor()
    {
        Sensor::where('id', '1')->update(['suhu' => request()->nilaisuhu, 'kelembaban' => request()->nilaikelembaban]);
    }

    public function createRiwayat(Request $request)
    {
        $nilai = $request->input('status');
        if ($nilai == "On") {
            Kontrol::where('id', '1')->update(['status' => 1]);
            Riwayat::create([
                'user_id' => 1,
                'tanggal' => now()->toDateString(),
                'waktu' => now(),
                'status' => $nilai,
            ]);
        } else {
            Kontrol::where('id', '1')->update(['status' => 0]);
            Riwayat::create([
                'user_id' => 1,
                'tanggal' => now()->toDateString(),
                'waktu' => now(),
                'status' => $nilai,
            ]);
        }
        
    }
}
