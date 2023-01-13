<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tipe' => 'required|max:255',
            'namaDepan' => 'required|max:255',
            'namaBelakang' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirmPassword' => 'required_with:password|min:5|same:password'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('loin');
    }
}
