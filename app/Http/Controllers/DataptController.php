<?php

namespace App\Http\Controllers;
use App\Models\Datapt;
use Illuminate\Http\Request;

class DataptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $baris = 4;
        if (strlen($katakunci)){
            $datapt = Datapt::where('nama', 'like', "%$katakunci%")
            ->paginate($baris);
        }
        else{
          $datapt = Datapt::latest('id')->paginate($baris);
        }

        return view('datapt.index')->with('datapt',$datapt);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        Datapt::where('id', $id)->delete();
        return redirect()->to('datapt')->with('success', 'Data perusahaan telah dihapus');
    }
}
