<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDx Universitas Airlangga</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

    <!-- SEO -->
    <meta name="theme-color" content="#000">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TEDx Universitas Airlangga" />
    <meta property="og:url" content="https://www.tedxuniversitasairlangga.com" />
    <meta property="og:description"
        content="Small Matters, Big Impact. An impact still can be made regardless of how people perceive the changes they have created." />
    <meta name="image" property="og:image" content="{{ asset('assets/img/favicon/android-chrome-512x512.png') }}" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/env.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/3dbox.css') }}">

    <style>
        .btn-green {
            background-color: #24B9BA !important;
        }

    </style>
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
                        <li><a class="dropdown-item" href="{{ route('landing') }}#home">Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('account.logout') }}">Log out</a></li>
                    </ul>
                </div>
            </div>
            <div class="participated">
                <h2>Participated Event</h2>
                <div class="ted-talk" style="margin-top: 5rem">
                    @if (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '29/11/2021/00/00/00'))
                    <div class="headline" style="background: rgba(163, 189, 190, 0.3)">
                        <div id="scene">
                            <div class="boxBase">
                              <div class="top" style="background-image: url({{ asset('assets/img/revamp/cube/top.png') }})"></div>
                              <div class="bottom" style="background-image: url({{ asset('assets/img/revamp/cube/bottom.png') }})"></div>
                              <div class="front" style="background-image: url({{ asset('assets/img/revamp/cube/front.png') }})"></div>
                              <div class="back" style="background-image: url({{ asset('assets/img/revamp/cube/back.png') }})"></div>
                              <div class="left" style="background-image: url({{ asset('assets/img/revamp/cube/left.png') }})"></div>
                              <div class="right" style="background-image: url({{ asset('assets/img/revamp/cube/right.png') }})"></div>
                            </div>
                          </div>
                        {{-- <img src="{{ asset('assets/img/revamp/cube.png') }}" alt=""> --}}
                        <h2 class="text-red">Ended</h2>
                    </div>
                    <div class="status">
                        <div class="desc">
                            <p style="text-align: center;">Thank you for participating and listening to our Ted talk.
                                Don’t forget to join for our next speaker!</p>
                        </div>
                    </div>
                    @elseif (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '28/11/2021/13/00/00'))
                    <div class="headline" style="background: rgba(163, 189, 190, 0.3)">
                        <div id="scene">
                            <div class="boxBase">
                              <div class="top" style="background-image: url({{ asset('assets/img/revamp/cube/top.png') }})"></div>
                              <div class="bottom" style="background-image: url({{ asset('assets/img/revamp/cube/bottom.png') }})"></div>
                              <div class="front" style="background-image: url({{ asset('assets/img/revamp/cube/front.png') }})"></div>
                              <div class="back" style="background-image: url({{ asset('assets/img/revamp/cube/back.png') }})"></div>
                              <div class="left" style="background-image: url({{ asset('assets/img/revamp/cube/left.png') }})"></div>
                              <div class="right" style="background-image: url({{ asset('assets/img/revamp/cube/right.png') }})"></div>
                            </div>
                          </div>
                        {{-- <img src="{{ asset('assets/img/revamp/cube.png') }}" alt=""> --}}
                        <h2 class="text-green">Live now!</h2>
                    </div>
                    <div class="status">
                        <div class="desc">
                            <p style="text-align: center;">Our awaited event is starting! Join now and experience the
                                meaning behind out grand theme!</p>
                        </div>
                        <a class="button submit" href="{{ route('stream') }}">Join Stream</a>
                    </div>
                    @else
                    <div class="headline" style="background: rgba(163, 189, 190, 0.3)">
                        <div id="scene">
                            <div class="boxBase">
                              <div class="top" style="background-image: url({{ asset('assets/img/revamp/cube/top.png') }})"></div>
                              <div class="bottom" style="background-image: url({{ asset('assets/img/revamp/cube/bottom.png') }})"></div>
                              <div class="front" style="background-image: url({{ asset('assets/img/revamp/cube/front.png') }})"></div>
                              <div class="back" style="background-image: url({{ asset('assets/img/revamp/cube/back.png') }})"></div>
                              <div class="left" style="background-image: url({{ asset('assets/img/revamp/cube/left.png') }})"></div>
                              <div class="right" style="background-image: url({{ asset('assets/img/revamp/cube/right.png') }})"></div>
                            </div>
                          </div>
                        {{-- <img src="{{ asset('assets/img/revamp/cube.png') }}" alt=""> --}}
                        <h3>Streaming starts in</h3>
                        <h2 id="timer">00:00:00</h2>
                    </div>
                    <div class="status">
                        <div class="desc">
                            <div>
                                <h2 class="text-green">Coming Soon</h2>
                                <p>pa <span class="text-red">·</span> tience</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                {{-- <div class="main-card" style="min-height: 200px;">
                    <div class="status">
                        <div class="desc">
                            <div style="align-items: center">
                                <h2 class="text-green">Horray</h2>
                                <p class="text-sand-beach">well <span class="text-green">·</span> co <span
                                        class="text-red">·</span> me </p>
                            </div>
                            <hr>
                            <p>Your registration is <span class="text-green"
                                    style="font-weight: 600;">completed</span>.
                                <span class="text-red" style="font-weight: 600;">Please wait</span> for the day
                                <span class="text-green" style="font-weight: 600;"> Main Event</span> will be Held.
                                See You !
                            </p>
                        </div>
                        <button class="btn-green" onclick="window.open('{{ route('stream') }}')">Watch
                            Stream</button>
                    </div>
                </div> --}}
                @if (Auth::user()->speaker || Auth::user()->essay)
                    @if (Auth::user()->essay)
                        @include('account.dashboard.cfe')
                    @endif
                    @if (Auth::user()->speaker)
                        @include('account.dashboard.cfs')
                    @endif

                    {{-- GAIKUT APA2 --}}
                @endif
            </div>
            <div class="others">
                <h2>Other Events <a href="{{ route('landing') }}#event">&#8599</a></h2>
                <div class="event-container">
                    {{-- @if (!Auth::user()->essay) --}}
                    <div class="event">
                        <h3>Call for Essay</h3>
                        <a href="{{ route('essay.branding') }}" class="ic-read-more">
                            <img src="{{ asset('assets/img/revamp/ic-cfe.png') }}" alt="">
                            <span></span>
                            <p>Read More</p>
                        </a>
                    </div>
                    {{-- @endif --}}
                    {{-- @if (!Auth::user()->speaker) --}}
                    <div class="event">
                        <h3>Call for Student Speaker</h3>
                        <a href="{{ route('speaker.branding') }}" class="ic-read-more">
                            <img src="{{ asset('assets/img/revamp/ic-cfs.png') }}" alt="">
                            <span></span>
                            <p>Read More</p>
                        </a>
                    </div>
                    {{-- @endif --}}
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



    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="{{ asset('assets/js/revamp/nav-footer.js') }}"></script>
    <script src="{{ asset('assets/js/revamp/stream.js') }}"></script>
    <!-- <script src="assets/js/dashboard.js"></script> -->
</body>

</html>
