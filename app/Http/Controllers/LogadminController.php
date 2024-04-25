<?php

namespace App\Http\Controllers;

use App\Models\Datapt;
use App\Models\Dloker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogadminController extends Controller
{

    public function index()
    {
        return view('logadminweb.index');

    }


    public function dashboard()
    {
        return view('adminweb.dsb');

    }

    public function dloker(){

        $datapt = Datapt::all();
        $dloker = Dloker::with('datapt')->latest()->filter()->paginate(30);
        return view('adminweb.dloker', compact('dloker'));
    }


    public function authanticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt($credential)){
            $request->session()->regenerate();

            return redirect()->route('adminweb.dsb');
        }

        return back()->with('error', 'login gagal!');
    }

    public function adminweblogout(){
        Auth::guard('admin')->logout();

    // Redirect ke halaman logout atau halaman lain yang Anda inginkan.
    return redirect('logadminweb')->with('succes', 'berhasil keluar');
    }

}
