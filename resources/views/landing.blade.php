@extends('layouts.clientNew')

@section('title', "TEDX UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css//revamp/landing-page.css') }}">
@endsection

@section('content')
<div class="heading">
    <div class="heading-body">
        <div class="x-container">
            <img class="x" src="{{ asset('assets/img/revamp/x.svg') }}" alt="">
            <div class="slide"></div>
        </div>
        <div class="headline">
            <h1>TEDx Universitas Airlangga</h1>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquam quo architecto.
                Animi doloribus provident velit!</h3>
            <a href="{{ route('account.regist') }}" class="button submit">Join Now</a>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/revamp/landing-page.js') }}"></script>
@endsection
