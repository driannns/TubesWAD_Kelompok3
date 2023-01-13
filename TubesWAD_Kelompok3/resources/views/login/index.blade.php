<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"/>
    <link rel="stylesheet" href="assets/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="login">
      <div class="avatar">
        <img src="/assets/images/profile.png" />
      </div>
      <h2>Login</h2>
      <h3>Welcome back</h3>
      <form action="/loin" method="post" class="login-form">
        @csrf
      <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
            </div>
        <button class="btn btn-danger" type="submit">LOGIN</button>
        <p>Belum punya akun? <a href="/registrasi">Registrasi</a></p>
      </form>
    </div>
  </body>
</html>
