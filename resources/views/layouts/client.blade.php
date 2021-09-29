<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/env.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    {{-- <link rel="stylesheet" href="{{url('assets/css/dummy.css')}}"> --}}

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <!-- SEO -->
    <meta name="theme-color" content="#000">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TEDx Universitas Airlangga" />
    <meta property="og:url" content="https://www.tedxuniversitasairlangga.com" />
    <meta property="og:description" content="Small Matters, Big Impact. An impact still can be made regardless of how people perceive the changes they have created." />
    <meta name="image" property="og:image" content="{{ asset('assets/img/favicon/android-chrome-512x512.png') }}" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md">
        <a href="{{ route('landing') }}" class="navbar-brand">
            <img src="{{ asset('assets/img/white-logo.png') }}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <p>Menu</p>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Competition
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('essay.branding') }}">Call for Essay</a></li>
                        <li><a class="dropdown-item disabled" href="#" style="pointer-events: none">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('essay.status') }}">Check Status</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="kontainer">
    @yield('content')
    </div>

     <!-- Footer -->
     <footer>
        <div class="top">
            <img class="logo" src="{{ asset('assets/img/white-logo.png') }}" alt="">
            <div class="parts">
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div>
                        <button onclick="window.open('https://instagram.com/tedxuniversitasairlangga?utm_medium=copy_link','_blank');"><img src="{{ asset('assets/img/insta.svg') }}" alt=""></button>
                        <button onclick="window.open('https://youtube.com/channel/UCOvVrpgK-xYZErQVgtjlu-Q','_blank')"><img src="{{ asset('assets/img/youtube.svg') }}" alt=""></button>
                        <button onclick="window.open('https://www.linkedin.com/company/tedxuniversitasairlangga','_blank')"><img src="{{ asset('assets/img/linkedin.svg') }}" alt=""></button>
                        <button onclick="window.open('https://timeline.line.me/user/_daiinodcILa_O8mgtkvD5-Szv0vOn8D4U24ITa0','_blank')"><img src="{{ asset('assets/img/line.svg') }}" alt=""></button>
                        <button onclick="window.open('https://vt.tiktok.com/ZGJUhywYy/', '_blank')"><img src="{{ asset('assets/img/tiktok.svg') }}" alt=""></button>
                    </div>
                </div>
                <hr>
                <!-- CONTACT-NYA ILANG BUAT PAGE UMUM; NANTI ADA DI TIAP PAGE LOMBANYA -->
                {{-- <div class="contact">
                    <h4>Contact Us</h4>
                    <p><img src="{{ asset('assets/img/whatsapp.svg') }}" alt=""> 08281291829 (Name)</p>
                    <p><img src="{{ asset('assets/img/whatsapp.svg') }}" alt=""> 08281291829 (Name)</p>
                </div>
                <hr> --}}
                <div class="address">
                    <h4>Address</h4>
                    <p>Jl. Airlangga No.4, Kec. Gubeng, Kota SBY, Jawa Timur 60286</p>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p><img src="{{ asset('assets/img/copyright.svg') }}" alt=""> Copyright 2021</p>
            <p>This independent TEDx event is operated under license from TED</p>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>
