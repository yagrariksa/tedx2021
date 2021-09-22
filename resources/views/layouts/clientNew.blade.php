<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/revamp/x.svg') }}" type="image/gif" sizes="16x16">

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
        <nav>
            <div class="container">
                {{-- <a href="{{ route('landing') }}"> --}}
                <img class="brand" src="{{ asset('assets/img/revamp/white-logo.png') }}" alt="navbar-brand">
                {{-- </a> --}}
                <ul class="menuItems">
                    <li><a href='{{ route('landing') }}' data-item='Home'>Home</a></li>
                    <li><a href='#' data-item='About'>About</a></li>
                    <li><a href='#' data-item='Event'>Event</a></li>
                    <li><a href='#' data-item='Merchandise'>Merchandise</a></li>
                    <li><a href='#' data-item='Sponsorship'>Sponsorship</a></li>
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
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>

        <!-- Mobile -->
        <div class="nav-sm">
            <!-- BELOM HEHE -->
        </div>
        <!-- Navbar End -->

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- Content End -->

        <!-- Footer -->
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
