@extends('layouts.clientNew')

@section('title', 'TEDx UNAIR - Call For Essay')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/event-cfe.css') }}">
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
                <form action="{{ route('account.essay.register') }}" method="post">
                    @csrf
                    <input type="text" required placeholder="essay title" name="title">
                    <input type="text" required placeholder="link gdrive" name="essaylink">
                    <button type="submit">REGIST NOW</button>
                </form>
        <div class="footer">
            <a href="" class="button secondary">Booklet</a>
            {{-- <a href="" class="button submit">Join Event</a> --}}
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
                    <h3 class="date">11</h3>
                    <h5>Sep</h5>
                </div>
            </div>
        </div>
        <div class="tl-card">
            <h4>Close Registration</h4>
            <div class="date-month">
                <h3 class="date">16</h3>
                <h5>Sep</h5>
            </div>
        </div>
        <div class="tl-card now">
            <h3>Winner Announcement</h3>
            <div class="date-month">
                <h3 class="date">23</h3>
                <h5>Sep</h5>
            </div>
        </div>
    </div>
</div>
<div class="prizes">
    <h2>Prize</h2>
    <div class="prize-container">
        <div class="prize-card kedua">
            <div class="card-front">
                <h2>2nd Place</h2>
            </div>
            <div class="card-back">
                <h3>750K Cash</h3>
                <h3>E-Certificate</h3>
                <h3>Bonus merchandise</h3>
                <div class="block">
                    <h3>Get Published at TEDxUniversitas Airlangga</h3>
                </div>
            </div>
        </div>
        <div class="prize-card pertama">
            <div class="card-front">
                <h2>1st Place</h2>
            </div>
            <div class="card-back">
                <h3>750K Cash</h3>
                <h3>E-Certificate</h3>
                <h3>Bonus merchandise</h3>
                <div class="block">
                    <h3>Get Published at TEDxUniversitas Airlangga</h3>
                </div>
            </div>
        </div>
        <div class="prize-card ketiga">
            <div class="card-front">
                <h2>3rd Place</h2>
            </div>
            <div class="card-back">
                <h3>750K Cash</h3>
                <h3>E-Certificate</h3>
                <h3>Bonus merchandise</h3>
                <div class="block">
                    <h3>Get Published at TEDxUniversitas Airlangga</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
