<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-center align-items-center m-4" style="height: 100vh;">
    <div class="img" style="width:50%;">
        <img src="../assets/images/pajero.jpg" alt="">
    </div>
        <form action="/login" method="post" style="width:50%;">
        @csrf
        <h3>Login</h3>
        <div class="text-danger"></div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" value="login" name="login">Login</button>
            <p>Anda belum punya akun?<a href="/register">Register</a></p>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>