<?php

namespace App\Http\Controllers;

use App\Models\Datapt;
use App\Models\Dloker;
use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    public function index(){
        $pelamar = Lamaran::where('datapt_id', Auth::guard('adminpt')->user()->id)->paginate(30);
        return view('pelamar.index')->with('pelamar', $pelamar);
    }

    public function edit(string $id)
    {
        $user = User::all();
        $datapt = Datapt::all();
        $dloker = Dloker::all();
        $pelamar = Lamaran::with('user', 'datapt', 'dloker')->where('id', $id)->first();
        return view('pelamar.edit', compact('pelamar', 'user', 'datapt', 'dloker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'user_id' => 'required',
            'status' => 'required'

        ],[
            'user_id.required'=>'user_id Wajib Diisi',
            'status.required'=>'status Wajib Diisi',

        ]);

        $pelamar = [
            'user_id'=>$request->user_id,
            'status'=>$request->status,


        ];
        Lamaran::where('id', $id)->update($pelamar);
        return redirect()->route('pelamar.index')->with('success', 'Pastikan kembali jika data yang diubah telah sesuai.');
    }




    public function downloadPdf($id)
    {
        $pelamar = Lamaran::find($id);

        if (!$pelamar) {
            return abort(404);
        }

        // Ambil path file PDF dari database
        $pdfPath = $pelamar->pdf_file;

        // Baca file PDF dari penyimpanan
        $filePath = storage_path("app/public/{$pdfPath}");

        // Pastikan file PDF ada
        if (Storage::disk('local')->exists("public/{$pdfPath}")) {
            // Atur nama file yang akan digunakan untuk unduhan
            $fileName = $pelamar->user->nama . '.pdf';

            return response()->file($filePath, ['Content-Disposition' => "attachment; filename=\"$fileName\""]);
        } else {
            return abort(404);
        }
    }
}
