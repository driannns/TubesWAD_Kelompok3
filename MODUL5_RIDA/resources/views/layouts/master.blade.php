<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        li {
            list-style-type: none;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-light">
        <div class="container-fluid text-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="text-light">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/showrooms/ListCar-Rida">My Car</a>
                    </li>
                </ul>
            </div>
            @auth
            <li class=" nav-item">
                <a class="btn btn-light me-5" href="/showrooms/create"><button class="btn nav-link">Add
                        Car</button></a>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-light me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <button class="btn nav-link dropdown-toggle">{{ auth()->user()->name }}</button>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/showrooms/Profile-Rida">Profile</a></li>
                    <li>
                    <form action="/logout" method="post">
                        @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>    
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a href="/login" class="btn btn-light"><button class="btn nav-link">Login</button></a>
            </li>
            @endauth
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
