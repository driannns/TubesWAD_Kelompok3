@extends('layouts.app')

@section('content')
<div class="m-4">
    <h1>Edit Mobil</h1>
    <p class="text-muted">Edit Mobil Anda Ke List Show Room</p>
</div>
<div class="d-flex container mb-5">
    
    <div class="img">
        <img src="/assets/images/{{ $showrooms -> image}}" alt="" width="450px">
    </div>
    <div class="form" style="width:700px; margin-left: 50px;">

        <form action="/showrooms/update/{{ $showrooms -> id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="BMW - I4"
                    value="{{ $showrooms->name }}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" name="owner" id="exampleFormControlInput1" placeholder="Josh"
                    value="{{ $showrooms->owner }}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                <input type="text" class="form-control" name="brand" id="exampleFormControlInput1" placeholder="BMW"
                    value="{{ $showrooms->brand }}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                <input type="date" class="form-control" name="purchase_date" id="exampleFormControlInput1"
                    placeholder="BMW" value="{{ $showrooms->purchase_date }}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                    >{{ $showrooms->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="image" value="{{ $showrooms->image}}"
                    >
            </div>
            <label for="exampleFormControlTextarea1" class="form-label">Status Pembayaran</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" 
                    {{ ($showrooms->status == 'Lunas') ? 'checked' : ""}}>
                <label class="form-check-label" for="inlineRadio1">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas"
                     {{ ($showrooms->status == 'Belum-Lunas') ? 'checked' : ""}}>
                <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection
