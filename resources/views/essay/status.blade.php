@extends('layouts.app')

@section('title')
Check Status
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/check-status.css') }}">
@endsection

@section('content')
    <!-- Navbar -->
    <nav>
        <img src="{{ asset('assets/img/white-logo.png') }}" alt="" class="logo">
        <div class="menus navbar">
            <div class="nav-item dropdown">
                <a href="#" class="menu nav-link dropdown-toggle" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">Competition</a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('essay.branding') }}">Call for Essay</a></li>
                    <li><a class="dropdown-item disabled" href="#" aria-disabled="true">Coming Soon</a></li>
                </ul>
            </div>
            <a href="" class="menu active">Check Status</a>

        </div>
        <div></div>
        <a href="" class="menu sm">Menu</a>
    </nav>

    <!-- Content -->
    <div class="container">
        <h2 class="title">Check Status</h2>
        <div class="card">
            @if (Session::has('success'))
                <span class="alert success">{{ Session::get('success') }}</span>
            @endif
            <div class="input-email">
                <h4>Email</h4>
                <input type="text" name="email" id="email">
                <div class="option">
                    <!-- belum ada(?) -->
                    <input type="radio" name="option" id="cfe" checked>
                    <label for="cfe">Call for Essay</label>
                    <input type="radio" name="option" id="coming" disabled>
                    <label class="disabled" for="coming" style="cursor:default">Coming soon</label>
                </div>
                <button id="trigger" style="margin-top: 1rem; border: 1px solid #24B9BA">CEK</button>
            </div>
            <div class="status">
                <!-- diisi pake innerHTML -->
            </div>
            <a href='#' id="paid" class="button btn-green" style="display: none">PAID</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="top">
            <img class="logo" src="{{ asset('assets/img/white-logo.png') }}" alt="">
            <div class="parts">
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div>
                        <button><img src="{{ asset('assets/img/insta.svg') }}" alt=""></button>
                        <button><img src="{{ asset('assets/img/youtube.svg') }}" alt=""></button>
                        <button><img src="{{ asset('assets/img/linkedin.svg') }}" alt=""></button>
                        <button><img src="{{ asset('assets/img/line.svg') }}" alt=""></button>
                        <button><img src="{{ asset('assets/img/tiktok.svg') }}" alt=""></button>
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

    <!-- Loader -->
    <div class=" hidden loader loader--fullscreen">
        <div class="loader__balls">
            <div class="loader__balls__dot"></div>
            <div class="loader__balls__dot"></div>
        </div>
        <svg>
            <defs>
                <filter id="gooey">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" />
                    <feColorMatrix values="
                  1 0 0 0 0
                  0 1 0 0 0
                  0 0 1 0 0
                  0 0 0 20 -10" />
                </filter>
            </defs>
        </svg>
    </div>

    <!-- Image -->
    <img class="bg green" src="{{ asset('assets/img/status-green.svg') }}" alt="">
    <img class="bg red" src="{{ asset('assets/img/status-red.svg') }}" alt="">
    <img class="bg-sm green" src="{{ asset('assets/img/status-green-sm.svg') }}" alt="">
    <img class="bg-sm red1" src="{{ asset('assets/img/status-red1-sm.svg') }}" alt="">
    <img class="bg-sm red2" src="{{ asset('assets/img/status-red2-sm.svg') }}" alt="">

    <template>

    </template>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>

    const notFound =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-red">Not Found</h2>
                <p class="text-sand-beach">er <span class="text-green">·</span> ror</p>
            </div>
            <hr>
            <p>Your account is <span class="text-red" style="font-weight: 600;">not found</span>. Input your
                <span class="text-red" style="font-weight: 600;">email correctly</span>.
            </p>
        </div>
        <button class="btn-green">Register</button>`;

    const unpaid =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-red">Unpaid</h2>
                <p class="text-sand-beach">re <span class="text-green">·</span> mem <span
                        class="text-red">·</span> ber</p>
            </div>
            <hr>
            <p>Please <span class="text-red" style="font-weight: 600;">pay</span> and <span class="text-red"
                    style="font-weight: 600;">upload</span> the transfer slip <span class="text-red"
                    style="font-weight: 600;">before dd/mm/yyyy</span>
            </p>
        </div>
        `;

    const pending =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-red">Pending</h2>
                <p class="text-sand-beach">wai <span class="text-green">·</span> ting</p>
            </div>
            <hr>
            <p>Kindly wait for our administrator to finish <span class="text-red"
                    style="font-weight: 600;">processing</span> your payment.
            </p>
        </div>`;

    const decline =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-red">Decline</h2>
                <p class="text-sand-beach">oop <span class="text-green">·</span> sie</p>
            </div>
            <hr>
            <p>Your payment has been <span class="text-red" style="font-weight: 600;">decline</span> due to
                <span class="text-red" style="font-weight: 600;">`;

    const decline2 =`</span> <br>
                Please <span class="text-red" style="font-weight: 600;">pay</span> and <span class="text-red"
                    style="font-weight: 600;">upload</span> the transfer slip <span class="text-red"
                    style="font-weight: 600;">before deadline</span>
            </p>
        </div>`;

    const selection =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-green">Selection</h2>
                <p class="text-sand-beach">pro <span class="text-green">·</span> ces <span
                        class="text-red">·</span> sing </p>
            </div>
            <hr>
            <p>Your registration is <span class="text-red" style="font-weight: 600;">completed</span>. <span
                    class="text-red" style="font-weight: 600;">Please wait</span> for the announcement of your
                <span class="text-red" style="font-weight: 600;">essay result</span>.
            </p>
        </div>`;

    const failed =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-red">We're Sorry</h2>
                <p class="text-sand-beach">un <span class="text-green">·</span> qua <span
                        class="text-red">·</span> li <span class="text-green">·</span> fied</p>
            </div>
            <hr>
            <p>Thank you for participating. <span class="text-red" style="font-weight: 600;">Don't give up. Try
                    again next time.</span>
            </p>
        </div>`;

    const choosen =
        `<div class="line"></div>
        <div class="desc">
            <div>
                <h2 class="text-green">Congratulations</h2>
                <p class="text-sand-beach">qua <span class="text-green">·</span> li <span
                        class="text-red">·</span> fied</p>
            </div>
            <hr>
            <p>Your registration has been <span class="text-green" style="font-weight: 600;">choosen</span> to
                go to <span class="text-green" style="font-weight: 600;">next phase. Horray!</span>
            </p>
        </div>`;

    const validate = () => {
        let email = $('input#email')[0].value;
        let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        return (filter.test(email));
    }

    // LOADER
    const loading =
        `<div class="loader loader--fullscreen">
            <div class="loader__balls">
                <div class="loader__balls__dot"></div>
                <div class="loader__balls__dot"></div>
            </div>
            <svg>
                <defs>
                    <filter id="gooey">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" />
                    <feColorMatrix values="
                        1 0 0 0 0
                        0 1 0 0 0
                        0 0 1 0 0
                        0 0 0 20 -10" />
                    </filter>
                </defs>
            </svg>
        </div>`;


        const paymentlink = "{{ route('essay.payment') }}";
        const resstat = document.querySelector('.status');
        // listener input email
        const email = document.querySelector('input#email');
        const btn = document.querySelector('button#trigger');
        const paidbtn = document.querySelector('a#paid');
        email.addEventListener('input', () => {
            // VERIFIY EMAIL
        })

        btn.addEventListener('click', () => {
            fetch(`{{ route('api.essay.status.payment') }}?email=${email.value}`)
                .then(response => response.json())
                .then(data => displayRes(data));
        })

        // result listener

        // logic result
        const displayRes = (data) => {
            paidbtn.style.display = 'none';
            switch (data.code) {
                case ("0"):
                    resstat.innerHTML = notFound
                    break;
                case (1):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = unpaid
                    paidbtn.innerHTML = "Pay Now"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                case ("2"):
                    resstat.innerHTML = pending
                    break

                case ("3"):
                    resstat.innerHTML = choosen
                    break;
                case ("4"):
                    resstat.innerHTML = failed
                    break

                case ("5"):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = decline + data.reason + decline2;
                    paidbtn.innerHTML = "Pay Again"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                default:
                    resstat.innerHTML = "server busy"

            }
            console.log(data)
            // resstat.innerHTML = data.message
        }
    </script>
    <script src="{{ asset('assets/js/check-status.js') }}"></script>
@endsection
