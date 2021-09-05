@extends('dummy')

@section('content')
    @if (Session::has('error'))
        <div class="alert fail" id="alert-message">{{ Session::get('error') }}</div>
    @else
        <div class="alert hide" id="alert-message"></div>
    @endif
    <form action="#" id="email" class="@if (Session::has('form'))
        hide
    @endif">
        <input type="email" placeholder="email">
        <button type="button" onclick="checkEmail()">next</button>
        <button type="button" id="goto-regist">register</button>
    </form>

    <form action="{{ route('account.login') }}" method="post"
        class="@if (Session::has('form'))
            @if (Session::get('form') != 'login')
                hide
            @endif
        @else
            hide
        @endif"
        id="login">
        @csrf
        <input type="hidden" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">login</button>
    </form>

    <form action="{{ route('account.login.setup') }}" method="post" class="hide" id="setup">
        @csrf
        <input type="hidden" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <button type="submit">setup pass</button>
    </form>

    <form action="{{ route('account.login.regist') }}" method="post"
        class="@if (Session::has('form'))
        @if (Session::get('form') != 'regist')
            hide
        @endif
    @else
        hide
    @endif"
        id="regist">
        @csrf
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="text" name="fullname" placeholder="fullname" value="{{ old('fullname') }}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <input type="text" name="age" placeholder="age" value="{{ old('age') }}">
        <input type="text" name="phone" placeholder="phone" value="{{ old('phone') }}">
        <input type="text" name="address" placeholder="address" value="{{ old('address') }}">
        <input type="text" name="institute" placeholder="institute" value="{{ old('institute') }}">
        <button type="submit">regist</button>
        <button type="button" id="goto-login">login</button>
    </form>
@endsection

@section('js')
    <script>
        document.querySelectorAll('form').forEach(form => {
            // disabling all enter <keyboard-press> submit form
            form.onkeypress = e => {
                var code = e.keyCode || e.which;
                if (code == 13) {
                    e.preventDefault();
                    return false;
                }
            }
        });
        const formemail = document.querySelector('form#email');
        const formsetup = document.querySelector('form#setup');
        const formlogin = document.querySelector('form#login');
        const formregist = document.querySelector('form#regist');

        const btntoregist = document.querySelector('button#goto-regist')
        const btntologin = document.querySelector('button#goto-login')

        const alertbox = document.querySelector('div#alert-message');

        // show form regist
        btntoregist.addEventListener('click', () => {
            formemail.classList.add('hide');
            formregist.classList.remove('hide');
        })

        // show form login (email)
        btntologin.addEventListener('click', () => {
            formemail.classList.remove('hide');
            formregist.classList.add('hide');
        })

        const data = {};

        const ownurl = "{{ route('api.account.check') }}";

        // function to fetch data email
        const checkEmail = () => {
            data.email = formemail.querySelector('input').value;
            if (data.email != '') {
                // set alertbox to default
                alertbox.classList.remove('success');
                alertbox.classList.remove('fail');
                alertbox.classList.add('hide');
                fetch(ownurl + "?email=" + data.email)
                    .then(response => {
                        if (response.status == 200) {
                            return response.json()
                        } else {
                            // if response code is not 200 (OK)
                            alertbox.classList.add('fail');
                            alertbox.innerHTML = "something wrong";
                            alertbox.classList.remove('hide');
                        }
                    })
                    .then(body => {
                        switch (body.code) {
                            case 1:
                                // if email is not registered
                                alertbox.classList.remove('success');
                                alertbox.classList.add('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                break;

                            case 2:
                                // if email is registered but doesnt
                                // setup the password yet
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                formemail.classList.add('hide');
                                formsetup.querySelector('input[name="email"]').value = data.email
                                formsetup.classList.remove('hide');
                                break;

                            case 3:
                                // if email is registered and
                                // has been setup password before
                                // so its general login
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                formemail.classList.add('hide');
                                formlogin.querySelector('input[name="email"]').value = data.email
                                formlogin.classList.remove('hide');
                                break;

                            default:
                                // if something wrong
                                alertbox.classList.remove('success');
                                alertbox.classList.add('fail');
                                alertbox.innerHTML = "Something wrong"
                                alertbox.classList.remove('hide');
                                break;
                        }
                    })
                    .catch(error => {
                        // if fetch data is error
                        console.error(error);
                        alertbox.classList.remove('success');
                        alertbox.classList.add('fail');
                        alertbox.innerHTML = "Something wrong"
                        alertbox.classList.remove('hide');
                    })
                console.log(data);
            } else {
                // if email is not filled
                alertbox.classList.remove('success');
                alertbox.classList.add('error');
                alertbox.innerHTML = "Email are required dude"
                alertbox.classList.remove('hide');
            }
        }

        // form regist submit listener
        formregist.addEventListener('submit', (e) => {
            e.preventDefault();
            let bleh = true;
            formregist.querySelectorAll('input').forEach(input => {
                if (input.value == '') {
                    // input empty
                    bleh = false;
                } else {
                    // input not empty
                }
            })

            if (formregist.querySelector('input[name="password"]').value != formregist.querySelector(
                    'input[name="repass"]').value) {
                // checker pass and retype-pass have same value
                // and here if they dont have same value (not-match)
                bleh = false;
                alertbox.classList.remove('hide');
                alertbox.classList.add('fail');
                alertbox.innerHTML = 'password doesn\'t match';
            } else if (bleh) {
                // form goes to submit
                formregist.submit();
            } else {
                // alert if some input field is not filled yet
                alertbox.classList.remove('hide');
                alertbox.classList.add('fail');
                alertbox.innerHTML = 'all column must be fill';
            }
        })

        // form setup password submit listener
        formsetup.addEventListener('submit', (e) => {
            e.preventDefault();
            let bleh = true;
            formsetup.querySelectorAll('input').forEach(input => {
                if (input.value == '') {
                    bleh = false;
                }
            });

            if (formsetup.querySelector('input[name="password"]').value != formsetup.querySelector(
                    'input[name="repass"]').value) {
                // checker pass and retype-pass have same value
                // and here if they dont have same value (not-match)
                bleh = false;
                alertbox.classList.remove('hide');
                alertbox.classList.add('fail');
                alertbox.innerHTML = 'password doesn\'t match';
            } else if (bleh) {
                // form goes to submit
                formsetup.submit();
            } else {
                // alert if some input field is not filled yet
                alertbox.classList.remove('hide');
                alertbox.classList.add('fail');
                alertbox.innerHTML = 'all column must be fill';
            }
        })
    </script>
@endsection
