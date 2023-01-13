<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="/"><img src="/assets/images/medicare.png" alt="" style="max-width: 65px;"></a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav" style="font-weight: 600;">
                        <li class="nav-item me-5">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/obat">Obat</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/konsultasi">Konsultasi</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href=
                            @auth 
                            "/riwayat/{{auth()->user()->id}}" 
                            @else" "
                            @endauth
                            >Riwayat Penyakit</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/aboutus">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                @auth
                <form class="me-2" action="/logout" method="post" style="margin:0;">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
                @else
                <a class="me-3 link" href="/loin">Login</a>
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="mt-5">
            <div class="footer-container p-4">
                <div class="logo-footer me-5">
                    MediCare
                    <img class="img-footer" src="/assets/images/medicare.png" alt="" style="max-width: 95px;">
                </div>
                <div class="footer-detail">
                    <div class="footer-wrapper">

                        <div class="left-footer me-5">
                            <ul>
                                <li class="mb-3"><b>Site Map</b></li>
                            <li>FAQ</li>
                            <li>Blog</li>
                            <li>Syarat & Ketentuan</li>
                            <li>Kebijakan Privasi</li>
                            <li>Promo</li>
                            <li>Karir</li>
                            <li>Security</li>
                            <li>Media</li>
                        </ul>
                    </div>
                    <div class="right-footer">
                        <ul>
                            <li class="mb-3"><b>Hubungi Kami</b></li>
                            <li>Gedung Halodoc, Jl. HR Rasuna Said Kav. B32-33, Jakarta Selatan 12940</li>
                            <li>Phone:
                                +62 21-5095-9900
                                
                                Email:
                                help@halodoc.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="download-footer">
                        Download App di
                        <div class="download-image" style="max-width: 200px">
                            <img src="/assets/images/download.png" alt="" style="object-fit: cover; max-width:150px">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
