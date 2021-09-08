@extends('dummy')

@section('content')
    @if (Session::has('error'))
        <div class="alert fail" id="alert-message">{{ Session::get('error') }}</div>
    @endif
    <form action="{{ route('account.regist') }}" method="post" id="regist">
        @csrf
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="text" name="fullname" placeholder="fullname" value="{{ old('fullname') }}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <input type="number" name="age" placeholder="age" value="{{ old('age') }}">
        <input type="text" name="phone" placeholder="phone" value="{{ old('phone') }}">
        <input type="text" name="address" placeholder="address" value="{{ old('address') }}">
        <input type="text" name="institute" placeholder="institute" value="{{ old('institute') }}">
        <button type="submit">regist</button>
        <a href="{{ route('account.login') }}" id="goto-login">login</a>
    </form>
@endsection
