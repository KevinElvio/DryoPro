<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use Illuminate\Http\Request;

class RelayController extends Controller
{
    // public function update(Request $request)
    // {
    //     $nilai = $request->input('status');

    //     Kontrol::updateOrCreate(['id' => 1], ['status' => $nilai]);

    // }



}




    // public function kontrol(Request $request)
    // {
    //     // Mendapatkan nilai toggle dari permintaan
    //     $stat = $request->input('stat');

    //     // Memeriksa apakah nilai stat ada dan valid
    //     if ($stat && in_array($stat, ['On', 'Off'])) {
    //         // Mendapatkan nilai relay berdasarkan nilai stat
    //         $relayValue = ($stat == 'On') ? 1 : 0;

    //         // Memperbarui nilai relay di database
    //         Kontrol::updateOrCreate(['id' => 4], ['relay' => $relayValue]);

    //         // Memberikan respons jika berhasil
    //         return response()->json(['status' => 'success', 'message' => 'Data toggle berhasil diperbarui!']);
    //     } else {
    //         // Memberikan respons jika terjadi kesalahan
    //         return response()->json(['status' => 'error', 'message' => 'Permintaan tidak valid.']);
    //     }
    // }
