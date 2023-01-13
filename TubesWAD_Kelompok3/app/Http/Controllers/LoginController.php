<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function indx()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->tipe="admin"){
                return redirect('/admin');
            }
            if (auth()->user()->tipe="user"){
                return redirect('/');
            }
        }
        return view([
            'title' => 'Login'
        ]);

        return back()->with('loginError', 'Login Failed!');
    }
    
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return redirect('/loin');
    }
}
