<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDx Universitas Airlangga</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/revamp/x.svg') }}" type="image/gif" sizes="16x16">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/env.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/dashboard.css') }}">
</head>

<body>
    <div class="container">
        <!-- Content -->
        <div class="content">
            <div class="header">
                <h2 class="wb">Hi {{ Auth::user()->name }}, welcome back!</h2>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="account" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('assets/img/revamp/user.svg') }}" alt="profile">
                        <p>{{ Auth::user()->name }}</p>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="account">
                        <li><a class="dropdown-item" href="{{ route('landing') }}">Landing Page</a></li>
                        <li><a class="dropdown-item" href="{{ route('account.logout') }}">Log out</a></li>
                    </ul>
                </div>
            </div>
            <div class="participated">
                <h2>Participated Event</h2>
                @if (Auth::user()->speaker || Auth::user()->essay)
                @include('account.dashboard.cfe')
                @include('account.dashboard.cfs')

                {{-- GAIKUT APA2 --}}
                @else
                <div class="main-card" style="min-height: 200px;">
                    <div class="status">
                        <div class="desc">
                            <div>
                                <h2 class="text-red">Oops!</h2>
                                <p>un <span class="text-green">·</span> re <span class="text-red">·</span> gis <span
                                        class="text-green">·</span> tered</p>
                            </div>
                            <hr>
                            <p>Your account <span class="text-red" style="font-weight: 600;">hasn't been signed</span>
                                to an event. Be sure to <span class="text-green" style="font-weight: 600;">check</span>
                                dan <span class="text-green" style="font-weight: 600;">participate</span>.
                            </p>
                        </div>
                        {{-- <a href="{{ route('essay.branding') }}" class="submit">Register</a> --}}
                    </div>
                </div>
                @endif
            </div>
            <div class="others">
                <h2>Other Events <a href="">&#8599</a></h2>
                <div class="event-container">
                    @if (!Auth::user()->essay)
                    <div class="event">
                        <h3>Call for Essay</h3>
                        <a href="{{ route('essay.branding') }}" class="ic-read-more">
                            <img src="{{ asset('assets/img/revamp/ic-cfe.png') }}" alt="">
                            <span></span>
                            <p>Read More</p>
                        </a>
                    </div>
                    @endif
                    @if (!Auth::user()->speaker)
                    <div class="event">
                        <h3>Call for Speaker Student</h3>
                        <a href="" class="ic-read-more">
                            <img src="{{ asset('assets/img/revamp/ic-cfe.png') }}" alt="">
                            <span></span>
                            <p>Read More</p>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
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
                            <a href="" target="_blank" rel="noopener noreferrer" class=" btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-insta.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class=" btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-youtube.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class=" btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-linkedin.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class=" btn-app"><img
                                    src="{{ asset('assets/img/revamp/ic-line.svg') }}" alt=""></a>
                            <a href="" target="_blank" rel="noopener noreferrer" class=" btn-app"><img
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



    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="{{ asset('assets/js/revamp/nav-footer.js') }}"></script>
    <!-- <script src="assets/js/dashboard.js"></script> -->
</body>

</html>
