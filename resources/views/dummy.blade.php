<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DUMMY')</title>

    <link rel="stylesheet" href="{{ url('assets/css/dummy.css') }}">
    @yield('css')
</head>

<body>
    @auth
        <h3>AKUN NAVBAR</h3>
        <ul>
            <li style="display: inline">
                <a href="{{ route('account.dashboard') }}">DASHBOARD</a>
            </li>
            <li style="display: inline">
                <a href="{{ route('account.essay.dashboard') }}">ESSAY</a>
            </li>
            <li style="display: inline">
                <a href="{{ route('account.speaker.dashboard') }}">speaker</a>
            </li>
            <li style="display: inline">
                <a href="{{ route('account.logout') }}">LOGOUT</a>
            </li>
        </ul>
        <hr>
    @else
        <a href="{{ route('account.login') }}">LOGIN</a>
    @endauth

    @if (Session::has('success'))
        <div class="alert success">{{ Session::get('success') }}</div>
    @endif

    @yield('content')

    @yield('js')
</body>

</html>
