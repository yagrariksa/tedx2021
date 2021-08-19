@extends('layouts.app')

@section('title')
    THANKS
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/confirmation-cfe.css') }}">
@endsection

@section('content')
    <div class="card">
        <h2>Confirmation</h2>
        <p>Your email has been registered as <br> <span class="text-green">{{ $email }}</span></p>
        <div class="line"></div>
        <h4>Do you want to <span class="text-green">pay now?</span></h4>
        <form class="footer">
            <button class="later" type="submit" href="#">Pay later</button>
            <button class="btn-green" href="{{ route('essay.payment', ['email' => $email]) }}">Pay now</button>
        </form>
    </div>

    <!-- Image -->
    <img class="bg green" src="{{ asset('assets/img/registration-green.svg') }}" alt="">
    <img class="bg red" src="{{ asset('assets/img/registration-red.svg') }}" alt="">
@endsection
