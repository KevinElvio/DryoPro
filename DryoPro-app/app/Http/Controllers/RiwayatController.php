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
    

    //HISTROY STATUS
    // public function toogleStatus(Request $request)
    // {
    //     $status = $request->input("status");

    //     Riwayat::create([
    //         'user_id' => 1,
    //         'tanggal' => now()->toDateString(),
    //         'waktu' => now(),
    //         'status' => $status === 'Off' ? 0 : 1,
    //     ]);
    //     return response()->json(['status' => 'success']);
    // }
}
