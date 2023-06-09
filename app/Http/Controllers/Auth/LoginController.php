<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('pages.auth.login');
    }
    //memproses login
    function login(Request $request)
    {
        //memvalidasi inputan dari form
        $input = $request->validate([
            'email' => ' required',
            'password' => 'required',
        ]);
        //ngecek data inputan dengan data di database, jika cocok login
        if (Auth::attempt($input)){
            //mengalihkan ke halaman selanjutnya
            return redirect()-> to('/merk');
        }else{
            //balik ke halaman login karena gagal
            return redirect()->back();

        }

    }
    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()-> to('/login');
    }
}
