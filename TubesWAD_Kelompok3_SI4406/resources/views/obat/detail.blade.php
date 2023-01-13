@extends('layouts.master')
<style>
    .container {
        height: 80vh;
        border: 1px solid #999;
        padding: 2%;
    }

    .container>h2 {
        font-weight: 600;
        text-align: center;
    }

    .container>.btn {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .warning-text {
        color: white;
    }

    .judul-detail {
        font-size: 48px;
        font-weight: 650;
    }

</style>
@section('content')
<h1 class="judul-detail m-5">Tiket Kunjungan</h1>
<div class="container">
    <h2>Konsultasi {{ $konsultasi->created_at }}</h2>
    <button class="btn 
    @if($konsultasi->status == 'Menunggu Konfirmasi') 
    btn-warning text-white
    @elseif($konsultasi->status == 'Telah Terkonfirmasi')
    btn-success
    @elseif($konsultasi->status == 'Di Batalkan')
    btn-danger
    @endif
    ">{{ $konsultasi->status }}</button>
    <p>Nama Lengkap&emsp; : {{$konsultasi->nama_lengkap}} </p>
    <p>Umur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : {{$konsultasi->umur}}</p>
    <p>Jenis Kelamin&emsp;&emsp;: {{$konsultasi->jenis_kelamin}}</p>
    <p>Keluhan&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->deskripsi_konsul}}</p>
    <p>Bidang Dokter&emsp;&emsp;: {{$konsultasi->bidang_dokter}}</p>
    <p>Status&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->status}}</p>
    @if($konsultasi->status == 'Telah Terkonfirmasi')
    <p>Dokter&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->dokter}}</p>
    <p>Jadwal Kunjungan&emsp;&emsp;&emsp;: {{$konsultasi->tanggal}} Pukul {{ $konsultasi->jam }}</p>
    @endif
    @if($konsultasi->status == 'Menunggu Konfirmasi')
    <p>Note : Saat ini status tiket kunjungan anda
        masih Menunggu Konfirmasi, pihak kami akan membalas dalam waktu paling lama 1x24 jam<br>
        @elseif($konsultasi->status == 'Telah Terkonfirmasi')</p>
    <p>Note : Saat ini status tiket kunjungan anda
        Telah dikonfirmasi, Hubungin WhatsApp kami +62 821-5095-9900 jika ingin mengetahui informasi lebih lanjut</p>
    @elseif($konsultasi->status == 'Di Batalkan')
    <p>Note : Saat ini status tiket kunjungan anda
        Telah dibatalkan karena {{ $konsultasi->alasan  }}</p>
    @endif

    @if($konsultasi->status == 'Menunggu Konfirmasi')
    <h3 class="mt-5 text-center"><b>Jika lewat dari 1x24 jam tidak ada balasan, anda bisa menghubungi pihak kami di
            WhatsApp +62 821-5095-9900</b></h3>
    @elseif($konsultasi->status == 'Telah Terkonfirmasi')
    <h3 class="mt-5 text-center"><b>Silahkan Melakukan Kunjungan dengan dokter di atas<br>dan sesuai waktu yang
    ditentukan</b></h3>
    @elseif($konsultasi->status == 'Di Batalkan')
    <h3 class="mt-5 text-center"><b>Hubungi WhatsApp kami +62 821-5095-9900 jika ingin mengetahui<br>
        informasi lebih lanjut
    @endif
    </p>
</div>
@endsection
