@extends('dummy')

@section('content')
    <div class="alert hide" id="alert-message"></div>
    <form action="#" id="email">
        <input type="email" placeholder="email">
        <button type="button" onclick="checkEmail()">next</button>
        <button type="button" id="goto-regist">register</button>
    </form>

    <form action="{{route('account.login')}}" method="post" class="hide" id="login">
        @csrf
        <input type="hidden" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
    </form>

    <form action="{{route('account.login.setup')}}" method="post" class="hide" id="setup">
        @csrf
        <input type="hidden" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <button type="submit">setup pass</button>
    </form>

    <form action="{{route('account.login.regist')}}" method="post" class="hide" id="regist">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="text" name="fullname" placeholder="fullname">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="repass" placeholder="repeat password">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="phone" placeholder="phone">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="institute" placeholder="institute">
        <button type="submit">regist</button>
        <button type="button" id="goto-login">login</button>
    </form>
@endsection

@section('js')
    <script>
        document.querySelectorAll('form').forEach(form => {
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

        btntoregist.addEventListener('click', () => {
            formemail.classList.add('hide');
            formregist.classList.remove('hide');
        })

        btntologin.addEventListener('click', () => {
            formemail.classList.remove('hide');
            formregist.classList.add('hide');
        })

        const data = {};

        const ownurl = "{{ route('api.account.check') }}";

        const checkEmail = () => {
            data.email = formemail.querySelector('input').value;
            if (data.email != '') {
                alertbox.classList.add('hide');
                fetch(ownurl + "?email=" + data.email)
                    .then(response => {
                        if (response.status == 200) {
                            return response.json()
                        } else {
                            alertbox.classList.add('fail');
                            alertbox.innerHTML = "something wrong";
                            alertbox.classList.remove('hide');
                        }
                    })
                    .then(body => {
                        switch (body.code) {
                            case 1:
                                alertbox.classList.remove('success');
                                alertbox.classList.add('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                break;

                            case 2:
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                formemail.classList.add('hide');
                                formsetup.querySelector('input[name="email"]').value = data.email
                                formsetup.classList.remove('hide');
                                break;

                            case 3:
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                alertbox.innerHTML = body.message
                                alertbox.classList.remove('hide');
                                formemail.classList.add('hide');
                                formlogin.querySelector('input[name="email"]').value = data.email
                                formlogin.classList.remove('hide');
                                break;

                            default:
                                break;
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    })
                console.log(data);
            } else {
                alertbox.classList.remove('success');
                alertbox.classList.add('error');
                alertbox.innerHTML = "Email are required dude"
                alertbox.classList.remove('hide');
            }
        }
    </script>
@endsection
