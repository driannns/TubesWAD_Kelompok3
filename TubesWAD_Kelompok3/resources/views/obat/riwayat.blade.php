@extends('layouts.master')
<style>
   .isEmpty{
    display: none;
   }
   .noEmpty{
    text-align: center;
    margin: 20% 0;
    align-items: center;
   }
   .judul-riwayat {
        font-size: 48px;
        font-weight: 650;
    }
</style>
@section('content')
<h1 class="animate__animated animate__fadeIn judul-riwayat m-5">Riwayat Penyakit {{ auth()->user()->namaDepan }} {{ auth()->user()->namaBelakang }}</h1 class="m-5">
<div class="animate__animated animate__fadeIn container">
    <h1 class="
    @if($konsultasi->count() > 0)
    isEmpty
    @else
    noEmpty
    @endif
    ">ANDA BELUM MEMPUNYAI RIWAYAT PENYAKIT</h1>
    @foreach ($konsultasi as $select)
    @if($select->count() > 0)
    <div class="card mb-3" 
        @if($select->status == 'Menunggu Konfirmasi')
        style="border: 1px solid orange"
        @elseif($select->status == 'Telah Terkonfirmasi')
        style="border: 1px solid lightgreen"
        @elseif($select->status == 'Di Batalkan')
        style="border: 1px solid red"
        @endif
        >
        <div class="card-header" 
            @if($select->status == 'Menunggu Konfirmasi')
            style="background: yellow;"
            @elseif($select->status == 'Telah Terkonfirmasi')
            style="background: #2bce2b;"
            @elseif($select->status == 'Di Batalkan')
            style="background: #FF0000;"
            @endif
            >
            {{ $select -> status }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Konsultasi ({{ $select -> created_at }})</h5>
            <p class="card-text">{{ $select->deskripsi_konsul }}</p>
            <a href="/riwayat/detail/{{$select->id}}" class="btn btn-primary">Detail</a>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
