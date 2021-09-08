@extends('dummy')

@section('content')
    <h1>INFORMATION HERE</h1>

    @auth
        @if (Auth::user()->essay)
            <button>CEK STATUS</button>
        @else
            <button>REGIST</button>
        @endif
    @else
        <button>REGIST</button>
    @endauth
@endsection
