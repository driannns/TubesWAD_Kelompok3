@extends('layouts.master')

@section('content')
<section class="section1">
    <div class="wrap justify-content-around align-items-center">
        <div class="home-text ms-4">
            <p class="animate__animated animate__fadeIn h1">Find your doctor and <br>make an appointment</p>
            <p class="text-muted animate__animated animate__fadeIn">Selamat datang di website MediCare, Solusi kesehatan terbaik</p>
        </div>
        <div class="animate__animated animate__fadeIn image m-1" width="50%">
            <img class=" rounded" src="/assets/images/ada.jpg" alt="" width="650px" style="max-width: 100%;">
        </div>
    </div>

    <!-- Service -->
    <div class="animate__animated animate__fadeIn service">
    <a class="href" href="/konsultasi">  
        <div class="d-flex align-items-center div">
        <div class="icon">
            <img src="/assets/images/service2.png" alt="">
            </div>
            <div class="detail">
                <div class="text">
                    <p>Konsultasi Dokter</p>
                    <p class="service-detail">Konsultasi real time dengan ahlinya</p>
                </div>
            </div>
        </div>
    </a>
        <a class="href" href="/obat">    
        <div class="d-flex align-items-center div">
            <div class="icon">
            <img src="/assets/images/service3.png" alt="">
            </div>
            <div class="detail">
                    <div class="text">
                        <p>Obat</p>
                        <p class="service-detail">Daftar obat di tempat terlengkap</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="href" href=
        @auth
        "/riwayat/{{auth()->user()->id}}"
        @else
        ""
        @endauth
        >  
        <div class="d-flex align-items-center div">
            <div class="icon">
            <img src="/assets/images/service1.png" alt="">
            </div>
            <div class="detail">
                <div class="text">
                    <p>Riwayat Penyakit</p>
                    <p class="service-detail">Melihat riwayat penyakit</p>
                </div>
            </div>
        </div>
        </a>
    </div>
</section>

<section class="animate__animated animate__fadeIn service-wrapper mt-3">
    <div class="service-container">
        <div class="image-wrapper">
            <img class="service-image" src="/assets/images/obat.png" alt="" width="95%">
        </div>
            <div class="service-text m-3">
                <h3 class="service-title">Obat</h3>
                <p>MediCare menyediakan obat yang terlengkap dan terbaik. Di MediCare
                    pasien dapat dengan mudah mengetahui informasi mengenai obat yang diinginkan secara online.
                </p>
                <a href="/obat"><button class="btn btn-danger">Obat</button></a>
            </div>
    </div>
    <div class="service-container">
        <div class="service-text m-3">
            <h3 class="service-title">Konsultasi</h3>
            <p>Konsultasi pada MediCare, mempertemukan pasien dengan ahli kesehatan yang sudah Profesional pada bidangnya.
                Setiap ahli kesehatan pada MediCare mempunyai Sertifikat Internasional.
            </p>
            <a href="/konsultasi"><button class="btn btn-danger">Konsultasi</button></a>
        </div>
        <div class="image-wrapper">
            <img class="service-image" src="/assets/images/konsultasi.jpg" alt="" width="95%">
            </div>
    </div>
    <div class="service-container mt-3">
        <div class="image-wrapper">
            <img class="service-image" src="/assets/images/riwayat.png" alt="" width="95%">
        </div>
            <div class="service-text m-3">
                <h3 class="service-title">Riwayat Penyakit</h3>
                <p>Riwayat penyakit pada MediCare bersifat fakta dan detail. Setiap pasien
                    yang memiliki penyakit di masa lampau, dapat melihat riwayat penyakitnya dengan lebih mudah di MediCare.
                </p>
                <a href="
                @auth
        /riwayat/{{auth()->user()->id}}"
        @endauth
                "><button class="btn btn-danger">Riwayat Penyakit</button></a>
            </div>
    </div>
</section>

@endsection