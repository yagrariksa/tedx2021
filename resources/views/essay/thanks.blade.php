@extends('dummy')

@section('title')
    THANKS
@endsection

@section('content')
    <h1>THANKS for REGISTER</h1>
    <h2>{{ $email }}</h2>
    <a href="{{ route('essay.payment', ['email' => $email]) }}">PAY NOW</a>
    <a href="#">PAY LATER</a>
@endsection
