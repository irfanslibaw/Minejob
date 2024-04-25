<?php

namespace App\Http\Controllers;

use App\Models\Adminpt;
use App\Models\Datapt;
use App\Models\Dloker;
use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfolokerController extends Controller
{

    public function index(){

    $datapt = Datapt::all();
    $dloker = Dloker::with('datapt')->latest()->filter()->paginate(4);
    return view('lamaran.index', compact('dloker'));
    }

    public function index1(){
        $dloker = Dloker::with('datapt')->latest()->filter()->paginate(4);
        return view('lamaran.index1', compact('dloker'));
    }

    public function create($id){
        $datapt = Datapt::all();
        $dloker = Dloker::with('datapt')->find($id);
        return view('lamaran.create', compact( 'datapt', 'dloker'));
    }

    public function store(Request $request)
{
    $request->validate([
        'datapt_id' => 'required',
        'user_id' => 'required',
        'dloker_id' => 'required',
        'status' => 'required',
        'pdf_file' => 'required|mimes:pdf|max:5080',
    ]);
    $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');

    $lamaran = new Lamaran();
    $lamaran->datapt_id = $request->input('datapt_id');
    $lamaran->user_id = $request->input('user_id');
    $lamaran->dloker_id = $request->input('dloker_id');
    $lamaran->status = $request->input('status');
    $lamaran->pdf_file = $pdfPath;
    $lamaran->save();

    return redirect()->route('riwayat.index')->with('success', 'PDF berhasil diunggah.');
}




    public function detail($id)
    {
        $datapt = Datapt::all();
        $dloker = Dloker::with('datapt')->where('id', $id)->first();
        return view('dloker_pt.info', compact('datapt', 'dloker'));
    }


    public function info($id)
    {
        $datapt = Datapt::all();
        $dloker = Dloker::with('datapt')->where('id', $id)->first();
        return view('lamaran.info', compact('datapt', 'dloker'));
    }


    public function isi($id)
    {
        $datapt = Datapt::all();
        $dloker = Dloker::with('datapt')->where('id', $id)->first();
        return view('adminweb.info', compact('datapt', 'dloker'));
    }

}
