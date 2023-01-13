<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .sidebar{
        text-align: center;
        font-size: 2vw;
    }
</style>
<body>
    <div class="container-body d-flex">

        <div class="sidebar">
            <div class="logo">
                <img src="/assets/images/medicare.png" alt="" style="max-width: 85px;">
            </div>
            <form class="me-2" action="/logout" method="post" style="margin:0;">
                @csrf
                <button type="submit" class="dropdown-item"><b>Log Out</b></button>
            </form>
        </div>
        <div class="table-container m-3">
            <div class="table-1">
                <h2>Menunggu Konfirmasi</h2>
                <table class="table table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Bidang Dokter</th>
                            <th scope="col">Konfirmasi/Cancel</th>
                        </tr>
                    </thead>
                    @foreach($menunggu as $index => $menungguu)
                    <tbody>
                        <tr>
                            <th scope="row">
                            {{ $index+1 }}
                            </th>
                            <td>{{ $menungguu->nama_lengkap }}</td>
                            <td>{{ $menungguu->umur }}</td>
                            <td>{{ $menungguu->jenis_kelamin }}</td>
                            <td>{{ $menungguu->bidang_dokter }}</td>
                            <td style="font-size:1.5vw;">
                                <a href="/admin/detail/{{$menungguu->id}}"><i class='bx bxs-check-square'
                                        style="color: green; cursor: pointer"></i></a>
                                <a href="/admin/cancel/{{$menungguu->id}}"><i class='bx bx-x-circle' style="color: red; cursor: pointer"></i></a>

                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
            </div>
            <div class="table-1">
                <h2>Terkonfirmasi</h2>
                <table class="table table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Dokter</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                        </tr>
                    </thead>
                    @foreach($terkonfirmasi as $index => $terkonfirmasi)
                    <tbody>
                        <tr>
                            <th scope="row">
                            {{ $index+1 }}
                        </th>
                        <td>{{ $terkonfirmasi->nama_lengkap }}</td>
                        <td>{{ $terkonfirmasi->umur }}</td>
                        <td>{{ $terkonfirmasi->jenis_kelamin }}</td>
                        <td>{{ $terkonfirmasi->dokter }}</td>
                        <td>{{ $terkonfirmasi->tanggal }}</td>
                        <td>{{ $terkonfirmasi->jam }}</td>
                    </tr>
                </tbody>
                @endforeach
                </table>
            </div>
            <div class="table-1">
                <h2>Cancel</h2>
                <table class="table table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Bidang Dokter</th>
                            <th scope="col">Alasan</th>
                        </tr>
                    </thead>
                    @foreach($cancel as $index => $canceled)
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{ $index+1}}
                            </th>
                            <td>{{ $canceled->nama_lengkap }}</td>
                            <td>{{ $canceled->umur }}</td>
                            <td>{{ $canceled->jenis_kelamin }}</td>
                            <td>{{ $canceled->bidang_dokter }}</td>
                            <td>{{ $canceled->alasan }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
