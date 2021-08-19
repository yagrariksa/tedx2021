@extends('dummy')

@section('title')
Payment Confirmation
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/payment-confirm.css') }}">
@endsection

@section('content')
<h2>Payment Confirmation</h2>

<!-- Card -->
<form class="card" action="{{ route('essay.payment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="email" value="{{ $email }}">
    <div class="grid">
        <div class="left">
            <p>Full Name</p>
            <h3>Annisa Rahma NAMANA</h3>
            <br>
            <p>Category</p>
            <h3>Essay Event</h3>
            <br>
            <p>Total</p>
            <h3 class="text-red">Rp50.000,00</h3>
        </div>
        <div class="right">
            <div>
                <h4>Payment Method</h4>
                <div class="method">
                    <div class="payment">
                        <input type="radio" value="dana" name="method" id="dana">
                        <label for="dana"><img src="{{ asset('assets/img/dana.svg') }}" alt=""></label>
                        <img class="help" src="{{ asset('assets/img/help.svg') }}" data-toggle="modal" data-target="#helpDana">
                    </div>
                    <div class="payment">
                        <input type="radio" value="mandiri" name="method" id="mandiri">
                        <label for="mandiri"><img src="{{ asset('assets/img/mandiri.svg') }}" alt=""></label>
                        <img class="help" src="{{ asset('assets/img/help.svg') }}" data-toggle="modal" data-target="#helpMandiri">
                    </div>
                    @error('method')
                        <span class="fail">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <h4>Transfer Slip</h4>
                <label for="inputFile">
                    <span>Attach your transfer slip here</span>
                    <img src="{{ asset('assets/img/attachment.svg') }}" alt=""></label>
                <input type="file" name="bukti" id="inputFile" accept="image/*" style="display: none;">
                @error('bukti')
                    <span class="fail">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button class="btn-green" type="submit">Submit</button>
</form>

<!-- Payment Dana -->
<div class="modal fade" id="helpDana" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="lg">
                    <h2>Payment Instruction with <img src="{{ asset('assets/img/dana.svg') }}" alt=""></h2>
                    <h4 class="text-green">ID</h4>
                    <ol>
                        <li>Buka aplikasi DANA lalu pilih menu kirim</li>
                        <li>Masukkan nomer 081331719462 (Amalia Malinda) dalam kolom penerima</li>
                        <li>Masukkan nominal pembayaran</li>
                        <li>Cek kembali apakah nomer penerima serta nominal pembayaran sudah sesuai</li>
                        <li>Klik kirim dana jika sudah sesuai</li>
                        <li>Lakukan konfirmasi dengan memasukkan 6 angka pin DANA</li>
                    </ol>
                    <p>Anda dapat menggunakan cara lain selama nomor tujuan dan nominal pembayaran sesuai.</p>
                    <h4 class="text-green">ENG</h4>
                    <ol>
                        <li>Open your DANA application and pick the send menu</li>
                        <li>Input the receiver number to 081331719462 (Amalia Malinda)</li>
                        <li>Input the correct amount of payment</li>
                        <li>Check once more to make sure the reciever number and payment amount are correct</li>
                        <li>Click send</li>
                        <li>Make a confirmation by input your 6 DANA pin</li>
                    </ol>
                    <p>You can choose other method as long as the receiver number and the amount of payment is
                        correct.
                    </p>
                </div>
                <div class="sm">
                    <h2>Payment Instruction with <img src="{{ asset('assets/img/dana.svg') }}" alt=""></h2>
                    <div class="language">
                        <button id="id">ID</button>
                        <button id="eng">ENG</button>
                    </div>
                    <div class="instruction"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Payment Mandiri -->
<div class="modal fade" id="helpMandiri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="lg">
                    <h2>Payment Instruction with <img src="{{ asset('assets/img/mandiri.svg') }}" alt=""
                            style="padding-bottom: 10px;"></h2>
                    <h4 class="text-green">ID</h4>
                    <ol>
                        <li>Login di aplikasi Mandiri Online</li>
                        <li>Pilih "Transfer"</li>
                        <li>Pilih "Ke Rekening Mandiri"</li>
                        <li>Tentukan "Rekening Sumber"</li>
                        <li>Isi "Rekening Tujuan" menjadi 1330015963192 (Jasmine Azzahra) dan "Jumlah" Transfer</li>
                        <li>Lakukan konfirmasi dengan memasukkan MPIN anda</li>
                    </ol>
                    <p>Anda dapat menggunakan cara lain selama nomor tujuan dan nominal pembayaran sesuai.</p>
                    <h4 class="text-green">ENG</h4>
                    <ol>
                        <li>Login to Mandiri Online application</li>
                        <li>Click Transfer</li>
                        <li>Click to Mandiri Account</li>
                        <li>Choose your account source</li>
                        <li>Fill your destination account to 1330015963192 (Jasmine Azzahra) and the correct amount
                            of
                        </li>
                        <li>payment</li>
                        <li>Make a confirmation and input your MPIN</li>
                    </ol>
                    <p>You can choose other method as long as the receiver number and the amount of payment is
                        correct.
                    </p>
                </div>
                <div class="sm">
                    <h2>Payment Instruction with <img src="{{ asset('assets/img/mandiri.svg') }}" alt=""
                            style="padding-bottom: 10px;"></h2>
                    <div class="language">
                        <button id="id">ID</button>
                        <button id="eng">ENG</button>
                    </div>
                    <div class="instruction"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thanks -->
<div class="modal fade" id="thanks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="text-green">Thank you</h2>
                <p>Your payment will be proceed immediately</p>
            </div>
        </div>
    </div>
</div>

<!-- Image -->
<img class="bg green" src="{{ asset('assets/img/payment-green.svg') }}" alt="">
<img class="bg red" src="{{ asset('assets/img/payment-red.svg') }}" alt="">
<img class="bg-sm green" src="{{ asset('assets/img/payment-green-sm.svg') }}" alt="">
<img class="bg-sm red" src="{{ asset('assets/img/payment-red-sm.svg') }}" alt="">


@endsection

@section('js')
<script src="{{ asset('assets/js/payment-confirm.js') }}"></script>
@endsection
