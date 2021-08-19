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
                    <li><a class="dropdown-item" href="#">Call for Essay</a></li>
                    <li><a class="dropdown-item disabled" href="#">Coming Soon</a></li>
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
            <div class="input-email">
                <h4>Email</h4>
                <input type="text" name="email" id="email">
                @if (Session::has('success'))
                    <span class="alert success">{{ Session::get('success') }}</span>
                @endif
                <div class="option">
                    <!-- belum ada(?) -->
                    <input type="radio" name="option" id="cfe" checked>
                    <label for="cfe">Call for Essay</label>
                    <input type="radio" name="option" id="coming">
                    <label class="disabled" for="coming">Coming soon</label>
                </div>
                <button id="trigger">CEK</button>
            </div>
            <div class="status">
                <!-- diisi pake innerHTML -->
            </div>
            <a href="#" id="paid" style="display: none">PAID</a>
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
                    resstat.innerHTML = data.message
                    break;
                case (1):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = "Anda belum melakukan pembayaran"
                    paidbtn.innerHTML = "Bayar sekarang"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                case ("2"):
                    resstat.innerHTML = "Menunggu konfirmasi"
                    break

                case ("3"):
                    resstat.innerHTML = "SUKSES"
                    break;
                case ("4"):
                    resstat.innerHTML = "Maaf Anda Kalah"
                    break

                case ("5"):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = "pembayaran ditolak, karena <strong>" + data.reason + "</strong>"
                    paidbtn.innerHTML = "Bayar Ulang"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                default:
                    resstat.innerHTML = "server busy"

            }
            console.log(data)
            // resstat.innerHTML = data.message
        }
    </script>

@endsection
