<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterwebController extends Controller
{
    public function index(){
        return view('regisweb.index');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required',
        ]);

        $admin = new Admin();
        $admin->nama = $request->input('nama');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));

        $admin->save();

        return redirect()->route('logadminweb')->with('succes', 'img berhasil diunggah.');
    }
}
