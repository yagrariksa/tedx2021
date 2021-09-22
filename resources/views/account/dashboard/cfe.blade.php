
    {{-- CFE --}}
    @if (Auth::user()->essay)
    <div class="main-card">
        <div class="name">
            <img src="{{ asset('assets/img/revamp/ic-cfe.svg') }}" alt="">
            <h2>Call for Essay</h2>
        </div>
        <!-- Unpaid -->
        <div class="status">
            @if (sizeof(Auth::user()->essay->payment) > 0)
                @switch(Auth::user()->essay->payment[sizeof(Auth::user()->essay->payment) - 1]->status)

                {{-- PENDING --}}
                @case(" 2")
                <div class="desc">
                    <div>
                        <h2 class="text-red">Pending</h2>
                        <p class="text-sand-beach">wai <span class="text-green">·</span> ting</p>
                    </div>
                    <hr>
                    <p>Kindly wait for our administrator to finish <span class="text-red"
                        style="font-weight: 600;">processing</span> your payment.
                    </p>
                </div>
                    @break

                {{-- PAYMENT APPROVED --}}
                @case(" 6")
                <div class="desc">
                        <div>
                            <h2 class="text-green">Selection</h2>
                            <p class="text-sand-beach">pro <span class="text-green">·</span> ces <span
                                    class="text-red">·</span> sing </p>
                        </div>
                        <hr>
                        <p>Your registration is <span class="text-red" style="font-weight: 600;">completed</span>.
                            <span class="text-red" style="font-weight: 600;">Please wait</span> for the announcement
                            of your <span class="text-red" style="font-weight: 600;">essay result</span>.
                        </p>
                </div>
                    @break

                {{-- DECLINE --}}
                @case(" 5")
                <div class="desc">
                    <div>
                        <h2 class="text-red">Decline</h2>
                        <p class="text-sand-beach">oop <span class="text-green">·</span> sie</p>
                    </div>
                    <hr>
                    <p>Your payment has been <span class="text-red" style="font-weight: 600;">decline</span> due
                        to <span class="text-red" style="font-weight: 600;">blablablablabla</span> <br> Please
                        <span class="text-red" style="font-weight: 600;">pay</span> and <span class="text-red"
                            style="font-weight: 600;">upload</span> the transfer slip <span class="text-red"
                            style="font-weight: 600;">before dd/mm/yyyy</span>
                    </p>
                </div>
                <button class="btn-green">Pay</button>
                @break

                @default
                <div class="desc">
                    <div>
                        <h2 class="text-red">Something Wrong</h2>
                        <p class="text-sand-beach">oop <span class="text-green">·</span> sie</p>
                    </div>
                    <hr>
                    <p>Please try again later
                    </p>
                </div>
                @endswitch

            {{-- BELUM BAYAR --}}
            @else
            <div class="desc">
                <div>
                    <h2 class="text-red">Unpaid</h2>
                    <p>re <span class="text-green">·</span> mem <span class="text-red">·</span> ber</p>
                </div>
                <hr>
                <p>Please <span class="text-red" style="font-weight: 600;">pay</span> and <span
                        class="text-red" style="font-weight: 600;">upload</span> the transfer slip <span
                        class="text-red" style="font-weight: 600;">before dd/mm/yyyy</span>
                </p>
            </div>
            @endif
        </div>
    </div>


    @endif
        {{-- <h3>Essay : {{ Auth::user()->essay->title }}</h3>
        <h5>Link : <a href="{{ Auth::user()->essay->essaylink }}">{{ Auth::user()->essay->essaylink }}</a></h5>
        @if (sizeof(Auth::user()->essay->payment) > 0)
            @switch(Auth::user()->essay->payment[sizeof(Auth::user()->essay->payment) - 1]->status)
                @case(" 2")
                    <h5>Payment Status : menunggu dikonfirmasi</h5>
                @break
                @case(" 6")
                    <h5>Payment Status : pembayaran diterima, <br> harap tunggu hingga pengumuman perlombaan</h5>
                @break
                @case(" 5")
                    <h5>Payment Status : pembayaran ditolak</h5>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <h4>Bayar sekarang</h4>
                    <form class="card" action="{{ route('account.essay.payment') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="payment">
                            <input type="radio" value="dana" name="method" id="dana">
                            <label for="dana"><img src="{{ asset('assets/img/dana.svg') }}" alt=""></label>
                        </div>
                        <div class="payment">
                            <input type="radio" value="mandiri" name="method" id="mandiri">
                            <label for="mandiri"><img src="{{ asset('assets/img/mandiri.svg') }}" alt=""></label>
                        </div>
                        <input type="file" name="bukti" id="inputFile" accept="image/*" style="">
                        <button type="submit">BAYAR</button>
                    </form>
                @break
                @default
                    "Payment Status : something wrong"
            @endswitch
        @else
            <h5>Payment Status : Belum bayar</h5>
            <hr>
            <hr>
            <hr>
            <hr>
            <h4>Bayar sekarang</h4>
            <form class="card" action="{{ route('account.essay.payment') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="payment">
                    <input type="radio" value="dana" name="method" id="dana">
                    <label for="dana"><img src="{{ asset('assets/img/dana.svg') }}" alt=""></label>
                </div>
                <div class="payment">
                    <input type="radio" value="mandiri" name="method" id="mandiri">
                    <label for="mandiri"><img src="{{ asset('assets/img/mandiri.svg') }}" alt=""></label>
                </div>
                <input type="file" name="bukti" id="inputFile" accept="image/*" style="">
                <button type="submit">BAYAR</button>
            </form>
        @endif
    @else
        <h3>Anda belum terdaftar pada acara ini</h3>
        <a href="{{ route('essay.branding') }}">DAFTAR SEKARANG</a>
    @endif --}}

