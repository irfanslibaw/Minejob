<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        Session::flash('nama',$request->nama);
        Session::flash('email',$request->email);
        Session::flash('password',$request->password);
        Session::flash('umur',$request->umur);
        Session::flash('tanggal_lahir',$request->tanggal_lahir);
        Session::flash('jenis_kelamin',$request->jenis_kelamin);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',

        ],[
            'nama.required'=>'nama Wajib Diisi',
            'email.required'=>'email Wajib Diisi',
            'email.unique' => 'email sudah tersedia',
            'password.required'=>'password Wajib Diisi',
            'umur.required'=>'umur Wajib Diisi',
            'jenis_kelamin.required'=>'jenis_kelamin Wajib Diisi',
            'tanggal_lahir.required' => 'No handphone Wajib angka'

        ]);
       $regis = [
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'umur'=>$request->umur,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ];
        User::create($regis);
        return redirect()->to('loguser')->with('success', 'Data berhasil di tambahkan, silahkan login ulang.');
    }
}
