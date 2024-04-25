<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('userloker.edit', compact('user'));
    }

    public function update(Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // tambahkan validasi untuk data diri lainnya
        ]);


       

        return redirect()->route('userloker.dashboard')->with('success', 'Profile updated successfully!');
    }
}
