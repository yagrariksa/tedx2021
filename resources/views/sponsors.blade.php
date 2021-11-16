@extends('layouts.clientNew')

@section('title', 'TEDx UNAIR - Our Team')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/sponsors.css') }}">
@endsection

@section('content')

<div class="content">
    <h1>Sponsors</h1>
    <div class="sponsors">
        <div class="two-inarow">
            <div class="logo left"><img src="{{ asset('assets/img/revamp/cube.png') }}" alt=""></div>
            <div class="logo right"><img src="{{ asset('assets/img/revamp/merch1.png') }}" alt=""></div>
            <div class="logo right"><img src="{{ asset('assets/img/revamp/ripple-desc.jpg') }}" alt=""></div>
            <div class="logo right"><img src="{{ asset('assets/img/revamp/ted-talk-pool.png') }}" alt=""></div>
        </div>
        <div class="logo left"><img src="{{ asset('assets/img/revamp/white-logo.png') }}" alt=""></div>
    </div>
</div>
@endsection
