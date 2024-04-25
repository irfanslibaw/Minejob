<?php

namespace App\Http\Controllers;

use App\Models\Datapt;
use App\Models\Dloker;
use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DlokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dloker = Dloker::where('datapt_id', Auth::guard('adminpt')->user()->id)->filter()->paginate(4);
        return view('dloker_pt.index')->with('dloker',$dloker);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapt = Datapt::all();
        return view('dloker_pt.create', compact('datapt'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('datapt_id',$request->datapt_id);
        Session::flash('bagian_pekerjaan',$request->bagian_pekerjaan);
        Session::flash('tanggal_akhir',$request->tanggal_akhir);
        Session::flash('deskripsi_pekerjaan',$request->deskripsi_pekerjaan);
        Session::flash('persyaratan',$request->persyaratan);
        Session::flash('tingkat_pekerjaan',$request->tingkat_pekerjaan);
        Session::flash('minimal_kelulusan',$request->minimal_kelulusan);
        Session::flash('pengalaman',$request->pengalaman);
        Session::flash('jenis_pekerjaan',$request->jenis_pekerjaan);

        $request->validate([
            'datapt_id' => 'required',
            'bagian_pekerjaan' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi_pekerjaan' => 'required',
            'tingkat_pekerjaan' => 'required',
            'persyaratan' => 'required',
            'minimal_kelulusan' => 'required',
            'pengalaman' => 'required',
            'jenis_pekerjaan' => 'required',

        ],[
            'datapt_id.required'=>'datapt_id Wajib Diisi',
            'bagian_pekerjaan.required'=>'bagian_pekerjaan Wajib Diisi',
            'tanggal_akhir.required'=>'tanggal_akhir Wajib Diisi',
            'deskripsi_pekerjaan.required'=>'deskripsi_pekerjaan Wajib Diisi',
            'tingkat_pekerjaan.required'=>'tingkat_pekerjaan Wajib Diisi',
            'persyaratan.required'=>'persyaratan Wajib Diisi',
            'minimal_kelulusan.required'=>'kelulusan Wajib Diisi',
            'pengalaman.required'=>'pengalaman Wajib Diisi',
            'jenis_pekerjaan.required'=>'jenis_pekerjaan Wajib Diisi',

        ]);
       $dloker = [
            'datapt_id'=>$request->datapt_id,
            'bagian_pekerjaan'=>$request->bagian_pekerjaan,
            'tanggal_akhir'=>$request->tanggal_akhir,
            'deskripsi_pekerjaan'=>$request->deskripsi_pekerjaan,
            'tingkat_pekerjaan'=>$request->tingkat_pekerjaan,
            'persyaratan'=>$request->persyaratan,
            'minimal_kelulusan'=>$request->minimal_kelulusan,
            'pengalaman'=>$request->pengalaman,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,

        ];
        Dloker::create($dloker);
        return redirect()->to('dloker_pt')->with('success', 'Pastikan kembali jika data yang ditambahkan telah sesuai.');
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
        $dloker = Dloker::where('id', $id)->first();
        return view('dloker_pt.edit', compact('dloker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'datapt_id' => 'required',
            'bagian_pekerjaan' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi_pekerjaan' => 'required',
            'tingkat_pekerjaan' => 'required',
            'persyaratan' => 'required',
            'minimal_kelulusan' => 'required',
            'pengalaman' => 'required',
            'jenis_pekerjaan' => 'required',

        ],[
            'datapt_id.required'=>'datapt_id Wajib Diisi',
            'bagian_pekerjaan.required'=>'bagian_pekerjaan Wajib Diisi',
            'tanggal_akhir.required'=>'tanggal_akhir Wajib Diisi',
            'deskripsi_pekerjaan.required'=>'deskripsi_pekerjaan Wajib Diisi',
            'tingkat_pekerjaan.required'=>'tingkat_pekerjaan Wajib Diisi',
            'persyaratan.required'=>'persyaratan Wajib Diisi',
            'minimal_kelulusan.required'=>'kelulusan Wajib Diisi',
            'pengalaman.required'=>'pengalaman Wajib Diisi',
            'jenis_pekerjaan.required'=>'jenis_pekerjaan Wajib Diisi',

        ]);

        $dloker = [
            'datapt_id'=>$request->datapt_id,
            'bagian_pekerjaan'=>$request->bagian_pekerjaan,
            'tanggal_akhir'=>$request->tanggal_akhir,
            'deskripsi_pekerjaan'=>$request->deskripsi_pekerjaan,
            'tingkat_pekerjaan'=>$request->tingkat_pekerjaan,
            'persyaratan'=>$request->persyaratan,
            'minimal_kelulusan'=>$request->minimal_kelulusan,
            'pengalaman'=>$request->pengalaman,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,

        ];
        Dloker::where('id', $id)->update($dloker);
        return redirect()->route('dloker_pt')->with('success', 'Pastikan kembali jika data yang diubah telah sesuai.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dloker::where('id', $id)->delete();
        return redirect()->route('dloker_pt')->with('successd', 'Tetap berhati-hati dengan data yang akan dihapus.');
    }
}
