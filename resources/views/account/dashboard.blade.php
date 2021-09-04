@extends('dummy')

@section('content')
    <h1>welcome back {{ Auth::user()->name }}</h1>
    <a href="{{ route('account.logout') }}">Logout</a>
@endsection
