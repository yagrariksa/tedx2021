@extends('dummy')

@section('title')
    REGISTER ESSAY
@endsection

@section('content')
    <h1>REGISTER ESSAY</h1>
    @if (Session::has('error'))
        <span class="alert fail">{{ Session::get('error') }}</span>
    @endif
    <form action="{{ route('essay.form') }}" method="post">
        @csrf
        <input type="text" placeholder="fullname" name="fullname" value="{{ old('fullname') }}">
        @error('fullname')
            <span class="fail">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="age" name="age">
        <input type="text" placeholder="phone" name="phone">
        <input type="email" placeholder="email" name="email" value="{{ old('email') }}">
        @error('email')
            <span class="fail">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="addr" name="addr">
        <input type="text" placeholder="institute" name="institute">
        <input type="text" placeholder="essay" name="essay">
        <input type="text" placeholder="link" name="link">
        <button type="submit">REGISTER</button>
    </form>
@endsection
