<?php

namespace App\Http\Controllers;

use App\Models\Adminpt;
use App\Models\cobaimg;
use App\Models\Datapt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterptController extends Controller
{
    public function index(){
        return view('regispt.index');
    }

    public function store(Request $request){

        $request->validate([
            'namapt' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5089',
            'email' => 'required|email|unique:datapts,email',
            'password' => 'required',
            'no_hpkantor' => 'required',
            'alamat' => 'required',
            'domisili' => 'required',
            'web_pt' => 'required',

        ]);
        $item = new Datapt();
        $item->namapt = $request->input('namapt');
        $item->email = $request->input('email');
        $item->password = Hash::make($request->input('password'));
        $item->no_hpkantor = $request->input('no_hpkantor');
        $item->domisili = $request->input('domisili');
        $item->alamat = $request->input('alamat');
        $item->web_pt = $request->input('web_pt');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('gambarpt/', $filename);
            $item->image = $filename;
        }


        $item->save();

        return redirect()->route('logadminpt')->with('succes', 'registrasi berhasil silahkan login ');
    }
}
