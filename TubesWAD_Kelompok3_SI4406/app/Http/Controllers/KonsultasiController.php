<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('obat.konsultasi', [
            'title' => 'Konsultasi'
        ]);
    }
    
    public function store(Request $request, $id)
    {
        Konsultasi::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap' => $request -> nama_lengkap,
            'umur' => $request -> umur,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'deskripsi_konsul' => $request -> deskripsi_konsul,
            'bidang_dokter' => $request -> bidang_dokter,
            'dokter' => '-',
            'tanggal' => '-',
            'jam' => '-',
            'status' => 'Menunggu Konfirmasi',
            'alasan' => '-',
        ]);
        $konsultasi = Konsultasi::where('user_id','=',$id)->get();
        return view('obat.riwayat', compact('konsultasi'),[
            'title' => 'Riwayat'
        ]);
    }
}
