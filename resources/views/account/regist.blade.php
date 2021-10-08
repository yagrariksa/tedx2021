@extends('layouts.clientNew')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/registration.css') }}">
@endsection

@section('content')
    {{-- @if (Session::has('error'))
        <div class="alert fail" id="alert-message">{{ Session::get('error') }}</div>
    @endif --}}
    {{-- <form action="{{ route('account.regist') }}" method="post" id="regist">
        @csrf
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="text" name="fullname" placeholder="fullname" value="{{ old('fullname') }}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <input type="number" name="age" placeholder="age" value="{{ old('age') }}">
        <input type="text" name="phone" placeholder="phone" value="{{ old('phone') }}">
        <input type="text" name="address" placeholder="address" value="{{ old('address') }}">
        <input type="text" name="institute" placeholder="institute" value="{{ old('institute') }}">
        <button type="submit">regist</button>
        <a href="{{ route('account.login') }}" id="goto-login">login</a>
    </form> --}}
    <div class="left">
        <h1>Sign up so you don't miss it!</h1>
        <h3>Let's set up your account and join our event!</h3>
    </div>
    <form class="right" action="{{ route('account.regist') }}" method="post" id="regist">
        @csrf
        <fieldset>
            <h2>Register</h2>
            <img src="{{ asset('assets/img/revamp/danger.svg') }}" alt="" id="img-src" style="display: contents">
            <div class="alert" id="alert-regis">
                @if (Session::has('error'))
                    <div class="danger">
                        <img src="{{ asset('assets/img/revamp/danger.svg') }}" alt="">
                        <div class="desc">
                            <h4 id="alert-message">{{ Session::get('error') }}</h4>
                            <h5 id="alert-hint"></h5>
                        </div>
                    </div>
                @endif
                <!-- Isian alert -->
            </div>
            <div class="card-form">
                <div class="input-form">
                    <label for="fullname">Fullname <span class="text-red">*</span></label>
                    <input type="text" name="fullname" id="fullname" placeholder="Hi, what's your name?" value="{{ old('fullname') }}">
                </div>
                <div class="input-form">
                    <label for="email">Email <span class="text-red">*</span></label>
                    <input type="text" name="email" id="email" placeholder="your@email.com" value="{{ old('email') }}">
                </div>
                <div class="input-form">
                    <label for="password">Password <span class="text-red">*</span></label>
                    <input type="password" name="password" id="password">
                    <h5>Make sure it's at least 8 characters</h5>
                </div>
                <div class="input-form">
                    <label for="confirm-pass">Confirm Password <span class="text-red">*</span></label>
                    <input type="password" name="repass" id="confirm-password">
                    <h5>Both password must match</h5>
                </div>
                <div class="footer">
                    <div>
                        <h5>Already have an account?</h5>
                        <a href="{{ route('account.login') }}" class="text-green">Login here</a>
                    </div>
                    <button class="next submit">Next <span id="ic-next"><img id="next-src" src="{{ asset('assets/img/revamp/next.svg') }}"
                                alt=""></span></button>
                </div>
            </div>
        </fieldset>
        <fieldset id="next-regis">
            <button class="previous"><img src="{{ asset('assets/img/revamp/previous.svg') }}" alt=""></button>
            <h2>Register</h2>
            <div class="alert" id="alert-next-regis">
                <!-- Isian alert -->
            </div>
            <div class="card-form" action="">
                <div class="age-phone">
                    <div class="input-form">
                        <label for="age">Age <span class="text-red">*</span></label>
                        <input required type="number" name="age" id="age" placeholder="19" value="{{ old('age') }}">
                    </div>
                    <div class="input-form">
                        <label for="phone">Phone Number <span class="text-red">*</span></label>
                        <input required type="text" name="phone" id="phone" placeholder="081234567890" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="input-form">
                    <label for="institute">Institute <span class="text-red">*</span></label>
                    <input required type="text" name="institute" id="institute" placeholder="Universitas Airlangga" value="{{ old('institute') }}">
                </div>
                <div class="input-form">
                    <label for="address">Address <span class="text-red">*</span></label>
                    <textarea required type="text" name="address" id="address"
                        placeholder="Jalan Dr. Ir. H. Soekarno, Mulyorejo, Surabaya, Jawa Timur 60115"
                        rows="4">{{ old('address') }}</textarea>
                </div>
                <div class="footer">
                    <div>
                        <h5>Already have an account?</h5>
                        <a href="{{ route('account.login') }}" class="text-green">Login here</a>
                    </div>
                    <button class="regis submit" type="submit">Register</button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('assets/js/revamp/registration.js') }}"></script>
@endsection
