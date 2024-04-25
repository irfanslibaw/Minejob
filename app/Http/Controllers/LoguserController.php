<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoguserController extends Controller
{
    public function index()
    {
        return view('loguser.index');

    }


    public function dashboard()
    {
        return view('userloker.dashboard');

    }

    public function dashboard1()
    {
        return view('userloker.dsb');

    }


    public function authanticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->route('userloker.dsb');
        }

        return back()->with('error', 'login failed!');
    }

    public function logoutuser(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

    // Redirect ke halaman logout atau halaman lain yang Anda inginkan.
    return redirect('loguser')->with('success', 'berhasil keluar');
    }
}
