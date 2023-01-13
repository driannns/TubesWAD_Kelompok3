<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class RiwayatController extends Controller
{
    public function index($user_id)
    {
        $konsultasi = Konsultasi::where('user_id','=',$user_id)->get();
        return view('obat.riwayat', compact('konsultasi'),[
            'title' => 'Riwayat'
        ]);
    }

    public function riwayat($id)
    {
        $konsultasi = Konsultasi::find($id);
        // dd($konsultasi);
        return view('obat.detail', compact('konsultasi'), [
            'title' => 'Riwayat'
        ]);
    }
}
