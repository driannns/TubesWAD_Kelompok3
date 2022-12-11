@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center m-5" width="100%" height="140vh">
      <div class="detail">
        <h1>Selamat Datang Di Show Room Andrian Saputra</h1>
        <p>Show Room yang akan memanjakan mata anda dengan mobil-mobil terbaru</p>
        <a href="/showrooms/ListCar-Andrian"><button type="button" class="btn btn-primary">My Car</button></a>
        <div class="d-flex mt-5 align-items-center">
          <div class="ead">
            <img src="assets/logo-ead.png" alt="Photo of EAD Logo" style="width: 70px;">
          </div>
          <div class="nama" style="font-size: 14px; padding-left: 10px;">
            AndrianSaputra_1202204011
          </div>
        </div>
      </div>
      <div class="photo">
        <img src="assets/poto1.png" alt="">
      </div>
    </div>
@endsection