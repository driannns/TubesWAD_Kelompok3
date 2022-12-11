@extends('layouts.master')

@section('content')
<div class="container m-4">
<form action="/showrooms/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text">
        <h4>Tambah Mobil</h4>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pemilik Mobil</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="owner">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Merk Mobil</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brand">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal Beli</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="purchase_date">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
            name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <label for="exampleInputEmail1" class="form-label">Status</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineRadio1" value="Lunas"
            name="status">
        <label class="form-check-label" for="inlineRadio1">Lunas</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineRadio1" value="Belum-Lunas"
            name="status">
        <label class="form-check-label" for="inlineRadio1">Belum Lunas</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary mt-3" value="add" name="add">Insert</button>
</form>
</div>

@endsection
