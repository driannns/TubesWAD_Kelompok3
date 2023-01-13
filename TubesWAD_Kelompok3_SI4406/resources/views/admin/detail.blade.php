<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Detail | Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="/assets/master.css">
    <link rel="stylesheet" href="/assets/home.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        .container-detail {
            margin: 5%;
            border: 1px solid #9999;
            padding: 2%;
        }

        .container-detail>h1 {
            text-align: center;
            font-weight: 600;
        }

        .btn {
            width: 20%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>

<body>
    <div class="container-detail">
        <h1>Detail Konsultasi</h1>
        <p>Nama Lengkap&emsp; : {{$konsultasi->nama_lengkap}} </p>
        <p>Umur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : {{$konsultasi->umur}}</p>
        <p>Jenis Kelamin&emsp;&emsp;: {{$konsultasi->jenis_kelamin}}</p>
        <p>Keluhan&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->deskripsi_konsul}}</p>
        <p>Bidang Dokter&emsp;&emsp;: {{$konsultasi->bidang_dokter}}</p>
        <p>Status&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->status}}</p>
        <form action="/admin/update/{{$konsultasi->id}}" method='post'>
            @csrf
            <label for="exampleInputEmail1" class="form-label">Pilih Dokter</label>
            <select class="form-select" aria-label="Default select example" name="dokter">
                <option selected value="dr. ASWAN">dr. ASWAN</option>
                <option value="dr. NUR ADHIYAH SIREGAR, MKK">dr. NUR ADHIYAH SIREGAR, MKK</option>
                <option value="dr. ANDRIARTO NUGROHO, MKK">dr. ANDRIARTO NUGROHO, MKK</option>
                <option value="dr. ALFIAN HUSIN, MARS">dr. ALFIAN HUSIN, MARS</option>
                <option value="dr. WAGNER TULUS">dr. WAGNER TULUS</option>
                <option value="dr. LIAN INDRIANI">dr. LIAN INDRIANI</option>
                <option value="dr. MEILLYSSA CHANDRA">dr. MEILLYSSA CHANDRA</option>
                <option value="dr. RAHAYU EVIRIYANTI">dr. RAHAYU EVIRIYANTI</option>
                <option value="dr. MUGI PRANEDYA PRATIWI">dr. MUGI PRANEDYA PRATIWI</option>
                <option value="dr. SOFIA PUTRI NIRMALA">dr. SOFIA PUTRI NIRMALA</option>
                <option value="dr. DESSY ANGGRAENI">dr. DESSY ANGGRAENI</option>
                <option value="dr. SELVI RELITA FITRI, MARS">dr. SELVI RELITA FITRI, MARS</option>
                <option value="dr. NAHARUDDIN">dr. NAHARUDDIN</option>
                <option value="dr. AFRIANTI HANDAYANI">dr. AFRIANTI HANDAYANI</option>
                <option value="dr. Selvia Relita Fitri">dr. Selvia Relita Fitri</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label mt-2">Tanggal Check Up</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label mt-2">Waktu Check Up</label>
                <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jam">
            </div>
            <button type="submit" class="btn btn-success">Konfirmasi</button>
        </form>
    </div>
</body>

</html>
