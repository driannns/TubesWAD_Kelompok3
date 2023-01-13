<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\User;

class ObatController extends Controller
{
    public function index()
    {
        return view('obat.index', [
            'title' => 'Home'
        ]);
    }

    public function obat()
    {
        $obat = Obat::all();
        return view('obat.obat', compact('obat'),[
            'title' => 'Pesan Obat'
        ]);
    }

    public function aboutus()
    {
        return view('obat.aboutus', [
            'title' => 'Tentang Kami'
        ]);
    }

    public function input()
    {
        return view('obat.inputobat', [
            'title' => 'Input Obat | Admin'
        ]);
    }

    public function store(Request $request)
    {
        $image = time().'.'.$request->gambar_obat->extension();
        $request->gambar_obat->move(public_path('assets/images/obat'), $image);
        Obat::create([
            'nama_obat' => $request -> nama_obat,
            'jenis_obat' => $request -> jenis_obat,
            'deskripsi_obat' => $request -> deskripsi_obat,
            'gambar_obat' => $image,
            'tanggal_produksi' => $request -> tanggal_produksi,
            'harga_obat' => $request -> harga_obat,
        ]);
        return redirect('/obat/obat');
    }

    public function display()
    {
        $obat = Obat::all();
        return view('/obat/obat', compact('obat'),[
            'title' => 'Pesan Obat'
        ]);
    }

    public function show($id)
    {
        $obat = Obat::find($id);
        return view('obat.showobat', compact('obat'),[
            'title' => $obat -> nama_obat]);
    }
}

