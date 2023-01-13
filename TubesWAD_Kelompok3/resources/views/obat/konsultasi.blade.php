@extends('layouts.master')
<style>
    .judul-konsultasi {
        font-size: 48px;
        font-weight: 650;
    }

    .container-konsultasi>img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
    }

    .container-konsultasi>.p {
        justify-content: center;
        text-align: center;
        display: flex;
    }

    .p>div {
        width: 60%;
    }

    .konsultasi-form {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .konsultasi-form>form {
        width: 60%;
    }

    .konsultasi-form>form>p {
        font-size: 24px;
    }

</style>
@section('content')
<h1 class="animate__animated animate__fadeIn judul-konsultasi m-5">Konsultasi Kesehatan</h1>
<div class="container-konsultasi">
    <img class="animate__animated animate__fadeIn" src="/assets/images/konsultasi.jpg" alt="" width="60%">
    <div class="p mt-3">
        <div>
            <p>Konsultasi Kesehatan akan membantu pasien untuk mengetahui penyakit apa yang dialami oleh pasien, Ahli
                kesehatan
                juga akan memberikan saran kepada pasien untuk menghadapi penyakit yang diderita oleh pasien.
            </p>
        </div>
    </div>
    <div class="konsultasi-form">
        <form action="/konsultasi/store/{{ auth()->user()->id }}" method="post">
            @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="email" class="form-control" name="nama_lengkap" id="exampleInputEmail1"
                    aria-describedby="emailHelp" readonly
                    value="{{ auth()->user()->namaDepan }} {{ auth()->user()->namaBelakang }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected value="">Pilih Jenis Kelamin</option>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Keluhan</label>
                <textarea class="form-control" name="deskripsi_konsul" placeholder="Isi keluhan..." id="floatingTextarea2"
                     rows="6"></textarea>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bidang Dokter</label>
            <select class="form-select" aria-label="Default select example" name="bidang_dokter">
                <option selected value="">Pilih Dokter</option>
                <option value="Dokter Umum">Dokter Umum</option>
                <option value="Dokter Kulit">Dokter Kulit</option>
                <option value="Dokter Anak">Dokter Anak</option>
                <option value="Dokter THT">Dokter THT</option>
                <option value="Dokter Gigi">Dokter Gigi</option>
                <option value="Dokter Penyakit Dalam">Dokter Penyakit Dalam</option>
            </select>
            </div>
            <button type="submit" class="btn btn-danger mt-3">Konsultasi</button>
        </form>
    </div>
</div>
@endsection
