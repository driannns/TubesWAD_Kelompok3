<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $showrooms = Showrooms::all();
        return view('showrooms.index', compact(['showrooms']));
    }

    public function add()
    {
        return view('showrooms.add');
    }

    public function store(Request $request)
    {
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $image);
        Showrooms::create([
            'user_id' => auth()->user()->id,
            'name' => $request ->name,
            'owner' => $request ->owner,
            'brand' => $request ->brand,
            'purchase_date' => $request ->purchase_date,
            'description' => $request ->description,
            'image' => $image,
            'status' => $request ->status
        ]);
        return redirect('/showrooms/ListCar-Andrian');
    }

    public function show()
    {
        $showrooms = Showrooms::all();
        return view('/showrooms.ListCar-Andrian', compact('showrooms'));
    }

    public function detail($id)
    {
        $showrooms = Showrooms::find($id);
        return view('/showrooms.Detail-Andrian', compact('showrooms'));
    }

    public function edit($id)
    {
        $showrooms = Showrooms::find($id);
        return view('/showrooms.Edit-Andrian', compact('showrooms'));
    }

    public function update($id, Request $request)
    {
        $showrooms = Showrooms::find($id);
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $image);
        $showrooms->update([
            'user_id' => auth()->user()->id,
            'name' => $request ->name,
            'owner' => $request ->owner,
            'brand' => $request ->brand,
            'purchase_date' => $request ->purchase_date,
            'description' => $request ->description,
            'image' => $image,
            'status' => $request ->status
        ]);
        return redirect('/showrooms/ListCar-Andrian');
    }

    public function destroy($id)
    {
        $showrooms = Showrooms::find($id);
        $showrooms->delete();
        return redirect('/showrooms/ListCar-Andrian');
    }
}


