<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet" href="assets/registrasi.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="registrasi">
        <h2>Registrasi</h2>
        <h3>Silahkan mengisi sesuai data diri</h3>
        <form action="/registrasi/store" method="post" class="registrasi-form">
            @csrf
        <div class="mb-3 d-flex">
            <input type="text" name="tipe" value="user" style="display: none">
                <input type="text" class="form-control me-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaDepan" placeholder="Nama Depan" required>
                <input type="text" class="form-control ms-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaBelakang" placeholder="Nama Belakang" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email Address" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword" placeholder="Konfirmasi Password">
            </div>
            <button type="submit" class="btn btn-danger w-25">Submit</button>
            <p>Sudah punya akun? <a href="/loin">Login</a></p>
        </form>
    </div>
</body>

</html>
