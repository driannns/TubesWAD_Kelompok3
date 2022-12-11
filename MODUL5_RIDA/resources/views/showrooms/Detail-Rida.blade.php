@extends('layouts.master')

@section('content')
@method('put')
<div class="text m-5">
    <h4>Detail Mobil</h4>
    <p>Detail Mobil Show Room</p>
</div>
<div class="d-flex justify-content-around container m-4">
    <center>
        <div class="photo">
            <img src="/assets/images/{{ $showrooms->image }}" alt="" style="width:500px">
        </div>
    </center>
    <div class="wrap" width="800px">
        <form action="/showrooms/{{$showrooms->id}}/edit" method="post" enctype="multipart/form-data" style="width:500px" disabled>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="name" value="{{ $showrooms->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pemilik Mobil</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="owner" value="{{ $showrooms->owner }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Merk Mobil</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="brand" value="{{ $showrooms->brand }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Beli</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="purchase_date" value="{{ $showrooms->purchase_date }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px" name="description" disabled>{{ $showrooms->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="image" value="{{ $showrooms->image }}" disabled>
            </div>
            <label for="exampleInputEmail1" class="form-label">Status</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="Lunas" name="status" {{ ($showrooms->status=="Lunas")? "checked" : ""}} disabled>
                <label class="form-check-label" for="inlineRadio1">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="Belum-Lunas" name="status" {{ ($showrooms->status=="Belum-Lunas")? "checked" : ""}} disabled>
                <label class="form-check-label" for="inlineRadio1">Belum Lunas</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-3" value="add" name="add">Edit</button>
        </form>
    </div>
</div>
@endsection
