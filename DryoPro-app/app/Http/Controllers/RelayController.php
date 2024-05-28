<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use Illuminate\Http\Request;

class RelayController extends Controller
{
    // public function kirimSensor(){
    //     $statusRelay = Kontrol::select('status')->first();

    //     return response()->json([
    //         'relay' => $statusRelay->status
    //     ]);
    // }

    public function kirimSensor()
    {
        $statusRelay = Kontrol::select('status')->first(); 

        return response()->json([
            'relay' => $statusRelay->status 
        ]);
    }


}
