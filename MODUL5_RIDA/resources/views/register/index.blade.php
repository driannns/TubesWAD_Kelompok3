<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center m-4" style="height: 100vh;">
        <div class="img" style="width:50%;">
            <img src="../assets/images/pajero.jpg" alt="">
        </div>
        <form action="/register" method="post" style="width:50%;">
            @csrf
            <h3>Register</h3>
            <div class="text-danger"></div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="email" required value="{{ old('email')}}">
                @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="name" required value="{{ old('name')}}">
                    @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputPassword1"
                    name="no_hp" required value="{{ old('no_hp')}}">
                    @error('no_hp')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleInputPassword1" name="password" required value="{{ old('password')}}">
                    @error('password')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control @error('konfirmasipassword') is-invalid @enderror"
                    id="exampleInputPassword1" name="konfirmasipassword" required
                    value="{{ old('konfirmasipassword')}}">
                    @error('konfirmasipassword')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}    
                </div>
                @enderror
                </div>
            <button type="submit" class="btn btn-primary" value="register" name="register">Register</button>
            <p>Anda sudah punya akun? <a href="/login">Login</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
