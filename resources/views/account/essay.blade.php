@extends('dummy')

@section('content')
    @if (Auth::user()->essay)
        <h3>Essay : {{ Auth::user()->essay->title }}</h3>
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
    @endif
@endsection
