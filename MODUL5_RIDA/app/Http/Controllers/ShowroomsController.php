<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;

use Illuminate\Http\Request;

class ShowroomsController extends Controller
{
    public function index()
    {
        return view('showrooms.Home-Rida',[
            "title" => "Home"
        ]);
    }

    public function create()
    {
        return view('/showrooms.Add-Rida',[
            "title" => "Add Car"
        ]);
    }
    public function store(Request $request)
    {
        $imgname = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $imgname);
        Showrooms::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
            'image' => $imgname,
            'status' => $request->status
        ]);
        $showrooms = showrooms::all();
        return view('/showrooms/ListCar-Rida', compact('showrooms'),[
            "title" => "List Car"
        ]);
        
        
    }
    public function edit($id)
    {
        $showrooms = Showrooms::find($id);
        $showrooms->purchasedate = date('Y-m-d H:i:s');;
        return view('/showrooms.Edit-Rida', compact(['showrooms']),
    [
        "title" => "Edit Car"
    ]);
    }
    public function update($id, Request $request)
    {
        $showrooms = Showrooms::find($id);
        $imgname = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $imgname);
        $showrooms->update([
        'user_id' => auth()->user()->id,
        'name' => $request->name,
        'owner' => $request->owner,
        'brand' => $request->brand,
        'purchase_date' => $request->purchase_date,
        'description' => $request->description,
        'image' => $imgname,
        'status' => $request->status
    ]);   
    $showrooms = showrooms::all();
    return view('/showrooms.ListCar-Rida', compact('showrooms'),[
        "title" => "List Car"
    ]);

    }
    public function delete($id)
    {
        $showrooms = Showrooms::find($id);
        $showrooms->delete();
        return redirect('/showrooms/ListCar-Rida');
    }

    public function tampil()
    {
        $showrooms = Showrooms::all();
        return view('/showrooms/ListCar-Rida', compact('showrooms'),
    [
        "title" => "List Car"
    ]);
    }

    public function detail($id)
    {
        $showrooms = Showrooms::find($id);
        return view('/showrooms.Detail-Rida', compact('showrooms'),[
            "title" => "Detail Car"
        ]);
    }
}
