<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
    public function index()
    {
        $menunggu = Konsultasi::where('status','=','Menunggu Konfirmasi')->get();
        $terkonfirmasi = Konsultasi::where('status','=','Telah Terkonfirmasi')->get();
        $cancel = Konsultasi::where('status','=','Di Batalkan')->get();
        $menungguCount = $menunggu->count();
        $terkonfirmasiCount = $terkonfirmasi->count();
        $cancelCount = $cancel->count();
        return View::make('admin.index')
        -> with(compact('menunggu'))
        -> with(compact('cancel')) 
        -> with(compact('terkonfirmasi'))
        -> with('menungguCount', $menungguCount)
        -> with('terkonfirmasiCount',$terkonfirmasiCount)
        -> with('cancelCount',$cancelCount);
    }

    public function detail($id)
    {
        $konsultasi = Konsultasi::find($id);
        // dd($detail);
        return view('admin.detail', compact('konsultasi'),[
            'title' => 'Detail | Admin'
        ]);
    }

    public function cancel($id)
    {
        $konsultasi = Konsultasi::find($id);
        // dd($detail);
        return view('admin.cancel', compact('konsultasi'),[
            'title' => 'Cancel | Admin'
        ]);
    }

    public function update($id, Request $request)
    {
        Konsultasi::where('id',$id)->update([
            'status'=>'Telah Terkonfirmasi',
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'dokter'=>$request->dokter,
        ]);
        $menunggu = Konsultasi::where('status','=','Menunggu Konfirmasi')->get();
        $terkonfirmasi = Konsultasi::where('status','=','Telah Terkonfirmasi')->get();
        $cancel = Konsultasi::where('status','=','Di Batalkan')->get();
        return View::make('admin.index')
        -> with(compact('menunggu'))
        -> with(compact('cancel')) 
        -> with(compact('terkonfirmasi'))
        ;
    }

    public function cancelUpdate($id, Request $request)
    {
        Konsultasi::where('id',$id)->update([
            'status'=>'Di Batalkan',
            'alasan'=>$request->alasan,
        ]);
        $menunggu = Konsultasi::where('status','=','Menunggu Konfirmasi')->get();
        $terkonfirmasi = Konsultasi::where('status','=','Telah Terkonfirmasi')->get();
        $cancel = Konsultasi::where('status','=','Di Batalkan')->get();
        return View::make('admin.index')
        -> with(compact('menunggu'))
        -> with(compact('cancel')) 
        -> with(compact('terkonfirmasi'));
    }
}
