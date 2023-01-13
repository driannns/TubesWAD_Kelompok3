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
        <h1>Cancel Konsultasi!</h1>
        <p>Nama Lengkap&emsp; : {{$konsultasi->nama_lengkap}} </p>
        <p>Umur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : {{$konsultasi->umur}}</p>
        <p>Jenis Kelamin&emsp;&emsp;: {{$konsultasi->jenis_kelamin}}</p>
        <p>Keluhan&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->deskripsi_konsul}}</p>
        <p>Bidang Dokter&emsp;&emsp;: {{$konsultasi->bidang_dokter}}</p>
        <p>Status&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$konsultasi->status}}</p>
        <form action="/admin/cancel/update/{{$konsultasi->id}}" method='post'>
            @csrf
            <label for="exampleInputEmail1" class="form-label mt-2">Alasan</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px" name='alasan'></textarea>
                <label for="floatingTextarea2">Alasan cancel...</label>
            </div>
            <button type="submit" class="btn btn-danger mt-3">Cancel</button>
        </form>
    </div>
</body>

</html>
