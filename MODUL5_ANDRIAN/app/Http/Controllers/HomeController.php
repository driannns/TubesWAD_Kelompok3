<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('showrooms.index');
    }

    public function update($id, Request $request)
    {   
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password
        ]);

        return redirect('/showrooms/Profile-Andrian');
}
}