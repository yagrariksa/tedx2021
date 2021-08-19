@extends('layouts.app')

@section('title')
    ESSAY
@endsection

@section('content')
    <h1>ESSAY</h1>
    <a href="{{route('essay.form')}}">REGISTER</a>
    <a href="{{route('essay.status')}}">CEK STATUS</a>
@endsection
