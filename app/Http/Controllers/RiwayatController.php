<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){
        $riwayat = Lamaran::where('user_id', auth()->user()->id)->latest('id')->paginate(100);
        return view('riwayat.index')->with('riwayat', $riwayat);
    }

    public function hapus(string $id)
    {
        Lamaran::where('id', $id)->delete();
        return redirect()->route('riwayat.index')->with('success', 'Tetap berhati-hati dengan data yang akan dihapus.');
    }
}
