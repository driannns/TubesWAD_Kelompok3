<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'email' => 'required|email:dns|unique:users',
            'name' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'konfirmasipassword' => 'required_with:password|min:5|same:password',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
}
    public function profile()
    {
        
        return view('showrooms/Profile-Rida',[
            "title" => "Profile"
        ]);
    }

    public function update($id, Request $request)
    {   
        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password
        ]);

        return redirect('/showrooms/Profile-Rida');
}
}
