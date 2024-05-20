<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required ',
            'password' => 'required'

            // | email:dns
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
            // ->with('success','Login Berhasil');
        }

        return back()->with('loginError', 'Data yang Anda masukkan salah. Mohon cek kembali !');
    }

    // public function logout(Request $request)
    // {
    //     if (Kontrol::where('status', 0)->exists()) {
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/')->with("success", "Anda Berhasil Logout");
    //     } else {
    //         return back()->with('Warning', 'Lampu masih dalam keadaan menyala, harap matikan lampu sebelum logout');
    //     }
    // }

    public function logout(Request $request)
    {
        // Cek status toogle dari database
        $statusToogle = Kontrol::find(1)->status;

        // Jika status toogle menyala (1)
        if ($statusToogle == 1) {
            // Tampilkan peringatan dan kembali ke halaman sebelumnya
            return back()->with('Warning', 'Lampu masih dalam keadaan menyala. Matikan lampu sebelum logout.');
        } else {
            // Jika status toogle mati (0)
            // Lakukan proses logout seperti biasa
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Jika Anda ingin menampilkan popup SweetAlert
            // Anda dapat mengirimkan respons JSON dari sini
            return response()->json([
                'message' => 'Anda berhasil logout.'
            ]);
        }
    }


    // public function popupLogout(Request $request)
    // {
    //     return response()->json([
    //         "popup" => "Anda Berhasil Logout"
    //     ]);
    // }

    // public function logout(Request $request)
    // {
    //     if ($request->input('confirmed') == 'true') {
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/');
    //     } else {
    //         // Jika pengguna membatalkan konfirmasi logout, kembalikan respons bahwa logout dibatalkan

    //         return redirect('/beranda');
    //     }
    // }
}
