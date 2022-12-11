@extends('layouts.app')

@section('content')
<div class="container mb-5">
<form action="/showrooms/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="m-4">
        <h1>Tambah Mobil</h1>
        <p class="text-muted">Tambah Mobil Baru Anda Ke List Show Room</p>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="BMW - I4">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
        <input type="text" class="form-control" name="owner" id="exampleFormControlInput1" placeholder="Josh">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merk</label>
        <input type="text" class="form-control" name="brand" id="exampleFormControlInput1" placeholder="BMW">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
        <input type="date" class="form-control" name="purchase_date" id="exampleFormControlInput1" placeholder="BMW">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <label for="exampleFormControlTextarea1" class="form-label">Status Pembayaran</label><br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas">
  <label class="form-check-label" for="inlineRadio1">Lunas</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas">
  <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
</div>
<div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary">Selesai</button>
  </div>
    </form>
</div>
@endsection
