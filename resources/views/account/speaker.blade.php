@extends('dummy')

@section('content')
    @if (Auth::user()->speaker)
        anda sudah terdafatar
        @if (Auth::user()->speaker->lolos)
            <hr>
            ANDA lolos
        @endif
    @else
        anda belum terdaftar
    @endif
@endsection
