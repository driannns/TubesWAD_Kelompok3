@extends('layouts.master')
<style>
    .container {
        height: 140vh;
    }

    .image-aboutus {
        /* width:80%; */
        height: 50%;
        margin: 0;
    }

    .image {
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 300px;
        height: 450px;
        object-fit: cover;
    }

    .judul-profile {
        font-weight: 600;
    }

    .deskripsi-profile {
        text-align: justify;
    }
</style>
@section('content')
<div class="container">
    <h1 class="animate__animated animate__fadeIn text-center judul-profile mb-3">Rumah Sakit MediCare</h1>
    <div class="animate__animated animate__fadeIn image-aboutus">
        <img class="image" src="/assets/images/foto-medicare.png" alt="" style="width: 80%;">
    </div>
    <div class="deskripsi-profile animate__animated animate__fadeIn">
        <p>Rumah sakit MediCare merupakan rumah sakit umum yang menyediakan pelayanan kesehatan kepada masyarakat
            sekitar dan juga menjadi tempat pendidikan bagi mahasiswa kedokteran. Rumah sakit ini memiliki fasilitas
            yang lengkap dan staf medis yang terdiri dari dokter spesialis dan dokter umum yang berkompeten dalam
            bidangnya. Rumah sakit ini juga mengutamakan keselamatan pasien dengan menerapkan budaya keselamatan pasien
            dalam semua kegiatannya.</p>
        <h4>Visi :</h4>
        <p>Menjadi rumah sakit terkemuka di Indonesia yang menyediakan pelayanan kesehatan terbaik bagi masyarakat
            dengan menggunakan teknologi terkini dan sumber daya manusia yang berkualitas.</p>
        <h4>Misi :</h4>
        <ul class="misi">
            <li>Menyediakan pelayanan kesehatan yang berkualitas dan terjangkau bagi masyarakat</li>
            <li>Menciptakan lingkungan kerja yang nyaman dan bersahabat bagi seluruh staf</li>
            <li>Mengembangkan ilmu pengetahuan kesehatan melalui kegiatan riset dan publikasi ilmiah.</li>
            <li>Meningkatkan kerjasama dengan rumah sakit dan institusi kesehatan lainnya.</li>
            <li>Mendorong terciptanya budaya keselamatan pasien
        </ul>
        <h4>Jam Operasional :</h4>
    <p>Senin-Sabtu, 08.00-17.00 WIB</p>
    </div>
</div>
@endsection
