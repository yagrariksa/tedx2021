@extends('layouts.clientNew')

@section('title', 'TEDx UNAIR - Call For Essay')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/event-cfe.css') }}">
<style>
    .prizes .prize-card .card-front::before {
        background-image: url({{ asset('assets/img/revamp/ted-pattern.png') }});
    }
    .prizes .prize-card .card-back::before {
        background-image: url({{ asset('assets/img/revamp/ted-pattern.png') }});
    }
</style>
@endsection

@section('content')
<div class="header">
    <div class="description">
        <h2>Call for Essay</h2>
        <h3 class="text-red" style="font-weight: 700;">Register fee: 25K</h3>
        <h3>Call for essay adalah sebuah event yang diselenggarakan untuk mencari gagasan / ide kreatif yang
            dituangkan dalam bentuk tulisan. Pada tahun ini, Call for Essay TEDx Universitas Airlangga
            mengangkat tema yakni <span class="text-green">Ripple</span> <span
                class="text-red">Effect.</span></h3>
        <div class="footer">
            <a href="https://drive.google.com/file/d/1Duvy0HibSGy-R8gDuTmpoS7epuneCrcO/view" target="__blank" class="button secondary">Booklet</a>
            <button disabled class="button" style="cursor: auto">Registration Closed</button>
        </div>
    </div>
    <div class="timeline">
        <h2 style="font-size: 24px;">Timeline</h2>
        <div class="tl-card">
            <h4>Open Registration</h4>
            <div class="date-container">
                <div class="date-month">
                    <h3 class="date">23</h3>
                    <h5>Aug</h5>
                </div>
                <h3 class="date">-</h3>
                <div class="date-month">
                    <h3 class="date">19</h3>
                    <h5>Sep</h5>
                </div>
            </div>
        </div>
        <div class="tl-card">
            <h4>Close Registration</h4>
            <div class="date-month">
                <h3 class="date">19</h3>
                <h5>Sep</h5>
            </div>
        </div>
        <div class="tl-card now">
            <h3>Winner Announcement</h3>
            <div class="date-month">
                <h3 class="date">25</h3>
                <h5>Sep</h5>
            </div>
        </div>
    </div>
</div>
<div class="prizes">
    <h2>Winner Announcement</h2>
    <div class="prize-container">
        <div class="prize-card kedua">
            <div class="card-front">
                <h2>Runner Up</h2>
            </div>
            <div class="card-back winner">
                <div>
                    <h3>Junjungan N. R.</h3>
                    <h5>Airlangga University</h5>
                </div>
                <h5 class="essay-title">“Sudah vaksin”- How your Social Media Bio Can Eliminate Vaccine
                    Hesitancy</h5>
                <div class="block">
                    <img src="{{ asset('assets/img/revamp/junjungan.png') }}" alt="">
                </div>
                <h5 class="desc">There is a famous saying that goes, “All it takes for evil to triumph is
                    for people of good conscience to remain silent.” It is not that...</h5>
                <button onclick="window.open('https://drive.google.com/file/d/1VA2KhpTc1XJYJNPwZ-qXQK0Ab33PvRTJ/view?usp=sharing')" class="submit">Read Essay</button>
            </div>
        </div>
        <div class="prize-card pertama">
            <div class="card-front">
                <h2>1st Place</h2>
            </div>
            <div class="card-back winner">
                <div>
                    <h3>Marenthina</h3>
                    <h5>Sampoerna University</h5>
                </div>
                <h5 class="essay-title">“Will We?”</h5>
                <div class="block">
                    <img src="{{ asset('assets/img/revamp/marenthina.png') }}" alt="">
                </div>
                <h5 class="desc">“We are all a Catalyst of Change. We All Have The Ability to Change and
                    Improve The World Around Us”-Tonya Dalton. This quote always reminds me about...</h5>
                <button onclick="window.open('https://drive.google.com/file/d/1e3LL-4Y9LBvnKjW9E0Ww2J-PEMcVqmgP/view?usp=sharing')" class="submit">Read Essay</button>
            </div>
        </div>
        <div class="prize-card ketiga">
            <div class="card-front">
                <h2>3rd Place</h2>
            </div>
            <div class="card-back winner">
                <div>
                    <h3>Evelin Hudiono</h3>
                    <h5>Airlangga University</h5>
                </div>
                <h5 class="essay-title">“Small Things Matter the Most”</h5>
                <div class="block">
                    <img src="{{ asset('assets/img/revamp/evelin.png') }}" alt="">
                </div>
                <h5 class="desc">Apakah Anda pernah mendengar kutipan: <br>
                    “Never get tired of doing little things for others. Sometimes, those little things
                    occupy the biggest part of their hearts”? Kutipan tersebut...</h5>
                <button onclick="window.open('https://drive.google.com/file/d/19hQ1Ceh4mFPZA7FAUikhXHm5N0cW3Zac/view?usp=sharing')" class="submit">Read Essay</button>
            </div>
        </div>
    </div>
</div>
@endsection
