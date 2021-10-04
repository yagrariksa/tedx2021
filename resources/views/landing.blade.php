@extends('layouts.clientNew')

@section('title', "TEDx UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/landing-page.css') }}">
@endsection

@section('content')
<div class="heading" id="home">
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

<!-- Tulisan gerak -->
<div class="moving-text">
    <div class='visible'>
        <ul>
            <li>
                <h1>Get Ready</h1>
            </li>
            <li>
                <h1>Inspirational</h1>
            </li>
            <li>
                <h1>Impactful</h1>
            </li>
            <li>
                <h1>Your Ideas</h1>
            </li>
            <li>
                <h1>Worth Spreading</h1>
            </li>
        </ul>
    </div>
</div>

<!-- bagian pool -->

<div class="pool" style="background-image: url({{ asset('assets/img/revamp/ted-talk-pool.png') }});">
</div>

<!-- Eventsssss -->
<div class="events" id="event">
    <h1>Events</h1>
    <div class="event-list">
        <div class="event">
            <h2>Call for Essay</h2>
            <a href="{{ route('essay.branding') }}" class="ic-read-more">
                <img src="{{ asset('assets/img/revamp/ic-cfe.png') }}" alt="">
                <span></span>
                <p>Read More</p>
            </a>
        </div>
        <div class="event">
            <h2>Call for Student Speaker</h2>
            <a href="#" class="ic-read-more">
                <img src="{{ asset('assets/img/revamp/ic-cfs.png') }}" alt="">
                <span></span>
                <p>Read More</p>
            </a>
        </div>
    </div>
</div>

<!-- About Ripple Effect; masi revisi katanya -->
<div class="about">
    <div class="about-content">
        <div class="about-desc">
            <h1>Ripple Effect</h1>
            <hr>
            <h3>An impact still can be made regardless of how people perceive the changes they have created.
                Each impact of the deeds will eventually spread and...</h3>
            <a href="{{route('mainboard')}}" class="button submit">Read more</a>
        </div>
        <div class="circle" style="background-image: url({{ asset('assets/img/revamp/ripple-desc.jpg') }});"></div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"
integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/revamp/landing-page.js') }}"></script>
@endsection
