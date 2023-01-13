@extends('layouts.master')
<style>
    .container{
        width: 100%;
    }
    .container > .show-image{
        border: 1px solid #ccc;
        min-width: 30%;
    }
    .container > .show-detail{
        width: 70%;
        margin-left: 1vw;
    }
    .show-detail > .show-judul{
        margin-bottom: -10px;
    }

    .btn{
        width: 70%;
    }

    @media only screen and (min-width: 768px){
    .container {
        display: flex;
    }
}
</style>
@section('content')
<div class="container">
    <div class="show-image">
        <img src="/assets/images/obat/{{$obat->gambar_obat}}" alt="" width= 100%>
    </div>
    <div class="show-detail">
        <div class="show-judul">
            <h3>{{ $obat->nama_obat}}</h3>
            <h5 class="text-muted">{{ $obat->jenis_obat }}</h5>
        </div>
        <h5>Tanggal Produksi</h5>
        <h5>{{ $obat->tanggal_produksi }}</h5>
        <h5>Harga : Rp.{{ $obat->harga_obat}}</h5>
        <hr>
        <p><b>Deskripsi</b></p>
        <p>{{ $obat->deskripsi_obat }}</p>
    </div>
</div>
@endsection