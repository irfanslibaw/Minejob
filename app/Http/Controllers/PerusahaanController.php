<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $baris = 10;
        if (strlen($katakunci)){
            $perusahaan = Perusahaan::where('nama', 'like', "%$katakunci%")
            ->orWhere('password', 'like', "%$katakunci%")
            ->orWhere('email', 'like', "%$katakunci%")
            ->paginate($baris);
        }
        else{
          $perusahaan = perusahaan::latest('id')->paginate($baris);
        }

        return view('perusahaan.index')->with('perusahaan',$perusahaan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_perusahaan',$request->nama_perusahaan);
        Session::flash('email_resmi',$request->email_resmi);
        Session::flash('no_hpkantor',$request->no_hpkantor);
        Session::flash('password',$request->password);
        Session::flash('nama_operator',$request->nama_operator);
        Session::flash('alamat_perusahaan',$request->alamat_perusahaan);
        Session::flash('domisili',$request->domisili);

        $request->validate([
            'nama_perusahaan' => 'required',
            'no_hpkantor' => 'required|numeric',
            'email_resmi' => 'required|unique:perusahaans,email_resmi',
            'alamat_perusahaan' => 'required',
            'password' => 'required',
            'nama_operator' => 'required',
            'domisili' => 'required',
        ],[
            'nama_perusahaan.required'=>'nama_perusahaan Wajib Diisi',
            'email_resmi.unique'=>'email_resmi Yang Diisikan Sudah Ada Dalam Database',
            'email_resmi.required'=>'email_resmi Wajib Diisi',
            'no_hpkantor.numeric'=>'No Hp Wajib Dalam Angka',
            'no_hpkantor.required'=>'No Hp Wajib Diisi',
            'alamat_perusahaan.required'=>'alamat_perusahaan Wajib Diisi',
            'password.required'=>'Jenis Kelamin Wajib Diisi',
            'nama_operator.required'=>'nama_operator Wajib Diisi',
            'domisili.required'=>'domisili Wajib Diisi',
        ]);
        $perusahaan = [
            'nama_perusahaan'=>$request->nama_perusahaan,
            'email_resmi'=>$request->email_resmi,
            'no_hpkantor'=>$request->no_hpkantor,
            'password'=>Hash::make($request->password),
            'alamat_perusahaan'=>$request->alamat_perusahaan,
            'nama_operator'=>$request->nama_operator,
            'domisili'=>$request->domisili,

        ];
        Perusahaan::create($perusahaan);
        return redirect()->to('perusahaan')->with('success', 'Pastikan kembali jika data yang ditambahkan telah sesuai.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
