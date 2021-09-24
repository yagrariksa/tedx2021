<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('assets/img/revamp/x.svg') }}" type="image/gif" sizes="16x16"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

    <!-- SEO -->
    <meta name="theme-color" content="#000">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TEDx Universitas Airlangga" />
    <meta property="og:url" content="https://www.tedxuniversitasairlangga.com" />
    <meta property="og:description" content="Small Matters, Big Impact. An impact still can be made regardless of how people perceive the changes they have created." />
    <meta name="image" property="og:image" content="{{ asset('assets/img/favicon/android-chrome-512x512.png') }}" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/env.css') }}">
    @yield('css')
    {{-- <link rel="stylesheet" href="assets/css/--.css"> --}}
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <!-- Desktop -->
        <nav class="nav-lg">
            <div class="container">
                {{-- <a href="{{ route('landing') }}"> --}}
                <img class="brand" src="{{ asset('assets/img/revamp/white-logo.png') }}" alt="navbar-brand">
                {{-- </a> --}}
                <ul class="menuItems">
                    <li><a href='{{ route('landing') }}#home' data-item='Home'>Home</a></li>
                    <li><a href='{{ route('landing') }}#event' data-item='Event'>Event</a></li>
                    <li><a href='{{ route('landing') }}' data-item='Merchandise'>Merchandise</a></li>
                    <li><a href='{{ route('landing') }}#' data-item='Sponsorship'>Sponsorship</a></li>
                    <li><a href='{{ route('mainboard') }}#' data-item='About'>About</a></li>
                </ul>
                <!-- Kalo belom login -->
                <!-- <a href="login.html" id="login" class="button secondary">Login</a> -->
                <!-- Kalo udah login -->
                @auth
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="account" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/img/revamp/user.svg') }}" alt="profile">
                            <p>{{ Auth::user()->name }}</p>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="account">
                            <li><a class="dropdown-item" href="{{ route('account.dashboard') }}">Dashboard</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @else
                <div class="dropdown"><a href="{{ route('account.login') }}" class="button">Login</a></div>
                @endauth
            </div>
        </nav>

        <!-- Mobile -->
        <div class="nav-toggle">
            <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
            <label for="main-navigation-toggle">
                <span></span>
            </label>

            <!-- Navbar Mobile -->
            <nav id="main-navigation" class="nav-sm">
                <ul class="menu">
                    @auth

                    <!-- KALO UDA LOGIN -->
                    {{-- <li class="menu__item" style="margin-bottom: 1rem; display: flex; justify-content: center;">
                        <button class="dropdown-toggle" type="button" id="account" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/img/user.svg" alt="profile">
                            <p>Nama user</p>
                        </button>
                        <ul class="submenu">
                            <li class="menu__item">
                                <a class="menu__link" href="#0">Dashboard</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#0">Profile</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#0">lalala</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('account.dashboard') }}#0">Dashboard</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('account.logout') }}">Logout</a>
                    </li>
                    <hr>
                    @endauth

                    <!-- GENERAL -->
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('landing') }}#home">Home</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('landing') }}#event">Event</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('landing') }}#0">Merchandise</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('landing') }}#0">Contact Us</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="{{ route('mainboard') }}#0">About</a>
                    </li>

                    <!-- BELOM LOGIN -->
                    @auth
                    @else
                    <hr>
                    <li class="menu__item"
                        style="margin-top: 1rem; display: flex; align-items: center; justify-content: center;">
                        <a class="menu__link button secondary" href="{{ route('account.login') }}">Login</a>
                    </li>
                    @endauth
                </ul>
            </nav>
            <!-- Navbar Mobile End -->
        </div>
        <!-- Navbar End -->

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- Content End -->

        <!-- Footer -->
        <footer>
            <img class="logo" src="{{ asset('assets/img/revamp/white-logo.png') }}" alt="">
            <div class="content-footer">
                <div class="links">
                    <div class="follow">
                        <h3>Follow Us</h3>
                        <!-- link ke sosmed -->
                        <div class="apps">
                            <a href="" target="_blank" rel="noopener noreferrer" class="insta btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-insta.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class="youtube btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-youtube.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class="linkedin btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-linkedin.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class="line btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-line.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class="tiktok btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-tiktok.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <hr>
                    <div class="address">
                        <h3>Address</h3>
                        <p>Jl. Airlangga No.4, Kec. Gubeng, Kota SBY, Jawa Timur 60286</p>
                    </div>
                </div>
                <div class="copyright">
                    <h5>&#169; Copyright 2021</h5>
                    <h5>This independent TEDx event is operated under license from TED</h5>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    <!-- Bubbles -->
    <div class="bubbles">
        <ul class="bubble-red">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul class="bubble-green">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <a id="landing-url" href="{{ route('landing') }}" style="display: content"></a>



    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="{{ asset('assets/js/revamp/nav-footer.js') }}"></script>
    @yield('script')
    {{-- <script src="assets/js/--.js"></script> --}}
    <script>
        $('.brand').click(() => {
            window.location.href = $('#landing-url').attr('href');
        })
    </script>
</body>

</html>
