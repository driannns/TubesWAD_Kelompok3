@extends('layouts.master')

@section('content')
<div class="container mb-5">
    <form action="/obat/add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="m-4">
            <h1>Tambah Obat</h1>
            <p class="text-muted">Tambah Obat Baru</p>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" name="nama_obat" id="exampleFormControlInput1"
                placeholder="Epexol Sirup 120 ml">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" name="jenis_obat" id="exampleFormControlInput1" placeholder="Sirup">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Produksi</label>
            <input type="date" class="form-control" name="tanggal_produksi" id="exampleFormControlInput1"
                placeholder="05/01/2022">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_obat"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="gambar_obat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga_obat" id="exampleFormControlInput1" placeholder="Rp. 19.900">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Input Obat</button>
        </div>
    </form>
</div>
@endsection
