<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogadminptController extends Controller
{
    public function index()
    {
        return view('logadminpt.index');

    }


    public function dashboard()
    {
        return view('adminpt.dsb');

    }


    public function authanticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('adminpt')->attempt($credential)){
            $request->session()->regenerate();

            return redirect()->route('adminpt.dsb');
        }

        return back()->with('error', 'login failed!');
    }

    public function adminptlogout(){
        Auth::guard('adminpt')->logout();

    // Redirect ke halaman logout atau halaman lain yang Anda inginkan.
    return redirect('logadminpt')->with('success', 'berhasil keluar');
    }

}
