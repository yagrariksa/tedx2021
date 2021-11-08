@extends('layouts.clientNew')

@section('title')
    LOGIN
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/login.css') }}">
<style>
    .hide{
        display: none;
    }
</style>
@endsection

@section('content')
    {{-- @if (Session::has('error'))
        <div class="alert fail" id="alert-message">{{ Session::get('error') }}</div>
    @else
        <div class="alert hide" id="alert-message"></div>
    @endif --}}
    {{-- <form action="#" id="email" class="@if (Session::has('form'))
        hide
    @endif">
        <input type="email" placeholder="email">
        <button type="button" onclick="checkEmail()">next</button>
        <a href="{{route('account.regist')}}" id="goto-regist">register</a>
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
    </form> --}}

    <div class="left">
        <h1>Welcome Back!</h1>
        <h3>Nice to see you again! Check out our newest update while you were gone!</h3>
    </div>
    <div class="right">
        <fieldset>
            <h2>Login</h2>
            <div class="alert" id="alert-email">
                @if (Session::has('erri'))
                    <div class="danger">
                        <img id="alert-img" src="{{ asset('assets/img/revamp/danger.svg') }}" alt="">
                        <div class="desc">
                            <h4 id="alert-message">{{ Session::get('erri') }}</h4>
                            <h5 id="alert-hint">{{ Session::get('hint') }}</h5>
                        </div>
                    </div>
                @else
                <div class="danger hide">
                    <img id="alert-img" src="{{ asset('assets/img/revamp/danger.svg') }}" alt="">
                    <div class="desc">
                        <h4 id="alert-message"></h4>
                        <h5 id="alert-hint"></h5>
                    </div>
                </div>
                @endif
                <!-- Isian alert -->
            </div>
            <form action="" class="card-form" id="email-form">
                <div class="input-form">
                    <label for="email">Email <span class="text-red">*</span></label>
                    <input type="text" name="email" id="email" placeholder="your@email.com" value="{{ old('email') }}">
                </div>
                <div class="footer">
                    <div>
                        <h5>Don't have an account?</h5>
                        <a href="{{ route('account.regist') }}" class="text-green">Create an Account</a>
                    </div>
                    <button class="next submit" type="button" onclick="checkEmail()">Next <span id="ic-next"><img id="next-src" src="{{ asset('assets/img/revamp/next.svg') }}"
                                alt=""></span></button>
                </div>
            </form>
        </fieldset>

        <!-- LOGIN BIASA -->
        <fieldset id="next-login login" class="">
            <button class="previous" id="previous1"><img src="{{ asset('assets/img/revamp/previous.svg') }}" alt=""></button>
            <h2>Login</h2>
            <div class="account">
                <img src="{{ asset('assets/img/revamp/user.svg') }}" alt="profile">
                <p id="user-name">Nama user</p>
            </div>
            <div class="alert" id="alert-password">
            </div>
            <form action="{{ route('account.login') }}" class="card-form" id="login" method="post">
                @csrf
                <div class="input-form">
                    <input type="hidden" name="email" placeholder="email" value="{{ old('email') }}">
                    <label for="password">Password <span class="text-red">*</span></label>
                    <input required type="password" name="password" id="password" placeholder="Min. 8 character">

                </div>
                <div class="footer">
                    <div>
                        <h5>Don't have an account?</h5>
                        <a href="{{ route('account.regist') }}" class="text-green">Create an Account</a>
                    </div>
                    <button class="login-next submit" type="submit">Login</button>
                </div>
            </form>
        </fieldset>

        <!-- LOGIN PERTAMA KALI -->
        <fieldset class="first-login" id="setup">
            <button class="previous" id="previous2"><img src="{{ asset('assets/img/revamp/previous.svg') }}" alt=""></button>
            <h2>Login</h2>
            <div class="account">
                <img src="{{ asset('assets/img/revamp/user.svg') }}" alt="profile">
                <p id="user-name-2">Nama user</p>
            </div>
            <div class="alert" id="alert-first-login" style="display: block;">
                <!-- Isian alert -->
                <div class="success">
                    <img id="alert-img-2" src="{{ asset('assets/img/revamp/success.svg') }}" alt="">
                    <div class="desc">
                        <h4 id="alert-message-2">Success login to your account</h4>
                        <h5 id="alert-hint-2">Let's get setup password for your account.</h5>
                    </div>
                </div>
            </div>
            <form class="card-form" action="{{ route('account.login.setup') }}" method="post" id="setup">
                @csrf
                <input type="hidden" name="email" placeholder="email" value="{{ old('email') }}">
                <div class="input-form">
                    <label for="new-password">New Password <span class="text-red">*</span></label>
                    <input required type="password" name="password" id="new-password" placeholder="Min. 8 character">
                    <h5>Make sure it's at least 8 characters</h5>
                </div>
                <div class="input-form">
                    <label for="confirm-password">Confirm New Password <span class="text-red">*</span></label>
                    <input required type="password" name="repass" id="confirm-password"
                        placeholder="Min. 8 character">
                    <h5>Both password must match</h5>
                </div>
                <div class="footer">
                    <div>
                        <h5>Don't have an account?</h5>
                        <a href="{{ route('account.regist') }}" class="text-green">Create an Account</a>
                    </div>
                    <button class="login-first submit" type="submit">Submit</button>
                </div>
            </form>
        </fieldset>
        </form>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js/revamp/login.js') }}"></script>
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
            const formemail = document.querySelector('form#email-form');
            const formsetup = document.querySelector('form#setup');
            const formlogin = document.querySelector('form#login');
            const alertbox = document.querySelector('h4#alert-message');
            const alerthint = document.querySelector('h5#alert-hint');
            const alertboxParent = $('#alert-message').parent().parent();

            const data = {};

            const ownurl = "{{ route('api.account.check') }}";

            // function to fetch data email
            const checkEmail = () => {
                data.email = formemail.querySelector('input').value;
                // console.log(data.email)
                if (data.email != '') {
                    // set alertbox to default
                    alertbox.classList.remove('success');
                    alertbox.classList.remove('fail');
                    alertboxParent.addClass('hide');
                    fetch(ownurl + "?email=" + data.email)
                    .then(response => {
                        if (response.status == 200) {
                            return response.json()
                        } else {
                            // if response code is not 200 (OK)
                            alertbox.classList.add('fail');
                            alertbox.innerHTML = "Something wrong";
                            alerthint.innerHTML = "Please try again";
                            alertboxParent.removeClass('hide');
                        }
                    })
                    .then(body => {
                        switch (body.code) {
                            case 1:
                                // if email is not registered
                                $('#ic-next')[0].innerHTML = loader;
                                setTimeout(
                                function()
                                {
                                    $('#ic-next')[0].innerHTML = arrow;
                                    alertbox.classList.remove('success');
                                    alertbox.classList.add('fail');
                                    alertbox.innerHTML = "Email not found"
                                    alerthint.innerHTML = "The email you entered isn’t connected to an account. "
                                    alertboxParent.removeClass('hide');
                                }, 800);

                                break;

                            case 2:
                                // if email is registered but doesnt
                                // setup the password yet
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                // alertbox.innerHTML = body.message;
                                $('#user-name-2').text(body.message)
                                // alertboxParent.removeClass('hide');
                                // formemail.classList.add('hide');
                                formsetup.querySelector('input[name="email"]').value = data.email
                                formsetup.classList.remove('hide');

                                (function ($) {
                                    "use strict";
                                    function verificationForm() {
                                        let current_fs, next_fs, previous_fs; //fieldsets
                                        let left, opacity, scale; //fieldset properties which we will animate
                                        let animating; //flag to prevent quick multi-click glitches
                                        // LOADER
                                        $('#ic-next')[0].innerHTML = loader;
                                        setTimeout(() => {
                                            $('#ic-next')[0].innerHTML = arrow;
                                            if ($('#email')[0].value == "") {
                                                $('#alert-email').css({ 'display': 'block' });
                                                $('#alert-email')[0].innerHTML = notFilled;
                                            }
                                            else if ($('#email')[0].value == "not found") {
                                                $('#alert-email').css({ 'display': 'block' })
                                                $('#alert-email')[0].innerHTML = notFound;
                                            }
                                            else {
                                        if (animating) return false;
                                        animating = true;

                                        current_fs = $("#ic-next").parent().parent().parent().parent();
                                        console.log(current_fs)
                                        next_fs = $("#ic-next").parent().parent().parent().parent().next().next();
                                        console.log(next_fs)

                                        //hide the current fieldset with style
                                        current_fs.animate({
                                            opacity: 0
                                        }, {
                                            step: function (now) {
                                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                                //1. scale current_fs down to 80%
                                                scale = 1 - (1 - now) * 0.2;
                                                //2. bring next_fs from the right(50%)
                                                left = (now * 50) + "%";
                                                //3. increase opacity of next_fs to 1 as it moves in
                                                opacity = 1 - now;
                                                current_fs.css({
                                                    'transform': 'scale(' + scale + ')',
                                                    'position': 'absolute',
                                                    'align-self': 'center',
                                                    'width': '100%'
                                                });
                                                next_fs.css({
                                                    'left': left,
                                                    'opacity': opacity,
                                                    'display': 'flex'
                                                });
                                            },
                                            duration: 800,
                                            complete: function () {
                                                current_fs.hide();
                                                animating = false;
                                            },
                                            //this comes from the custom easing plugin
                                            easing: 'easeInOutBack'
                                        });
                                    }
                                }, 800);

                                $("#previous2").click(function (e) {
                                    // let animating;
                                    e.preventDefault();
                                    if (animating) return false;
                                    animating = true;

                                    current_fs = $("#previous2").parent();
                                    previous_fs = $("#previous2").parent().prev().prev();

                                    //show the previous fieldset
                                    previous_fs.show();
                                    //hide the current fieldset with style
                                    current_fs.animate({
                                        opacity: 0
                                    }, {
                                        step: function (now) {
                                            //as the opacity of current_fs reduces to 0 - stored in "now"
                                            //1. scale previous_fs from 80% to 100%
                                            scale = 0.8 + (1 - now) * 0.2;
                                            //2. take current_fs to the right(50%) - from 0%
                                            left = ((1 - now) * 50) + "%";
                                            //3. increase opacity of previous_fs to 1 as it moves in
                                            opacity = 1 - now;
                                            current_fs.css({
                                                'left': left
                                            });
                                            previous_fs.css({
                                                'transform': 'scale(' + scale + ')',
                                                'opacity': opacity
                                            });
                                        },
                                        duration: 800,
                                        complete: function () {
                                            current_fs.hide();
                                            animating = false;
                                        },
                                        //this comes from the custom easing plugin
                                        easing: 'easeInOutBack'
                                    });
                                });

                                };

                                verificationForm();

                                })(jQuery);

                                break;

                            case 3:
                                // if email is registered and
                                // has been setup password before
                                // so its general login
                                alertbox.classList.add('success');
                                alertbox.classList.remove('fail');
                                // alertbox.innerHTML = body.message;
                                $('#user-name').text(body.message)
                                // alertboxParent.removeClass('hide');
                                // formemail.classList.add('hide');
                                formlogin.querySelector('input[name="email"]').value = data.email
                                formlogin.classList.remove('hide');

                                (function ($) {
                                    "use strict";
                                    function verificationForm() {
                                        let current_fs, next_fs, previous_fs; //fieldsets
                                        let left, opacity, scale; //fieldset properties which we will animate
                                        let animating; //flag to prevent quick multi-click glitches
                                        // LOADER
                                        $('#ic-next')[0].innerHTML = loader;
                                        setTimeout(() => {
                                            $('#ic-next')[0].innerHTML = arrow;
                                            if ($('#email')[0].value == "") {
                                                $('#alert-email').css({ 'display': 'block' });
                                                $('#alert-email')[0].innerHTML = notFilled;
                                            }
                                            else if ($('#email')[0].value == "not found") {
                                                $('#alert-email').css({ 'display': 'block' })
                                                $('#alert-email')[0].innerHTML = notFound;
                                            }
                                            else {
                                        if (animating) return false;
                                        animating = true;

                                        current_fs = $("#ic-next").parent().parent().parent().parent();
                                        console.log(current_fs)
                                        next_fs = $("#ic-next").parent().parent().parent().parent().next();
                                        console.log(next_fs)

                                        //activate next step on progressbar using the index of next_fs
                                        // $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                                        //hide the current fieldset with style
                                        current_fs.animate({
                                            opacity: 0
                                        }, {
                                            step: function (now) {
                                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                                //1. scale current_fs down to 80%
                                                scale = 1 - (1 - now) * 0.2;
                                                //2. bring next_fs from the right(50%)
                                                left = (now * 50) + "%";
                                                //3. increase opacity of next_fs to 1 as it moves in
                                                opacity = 1 - now;
                                                current_fs.css({
                                                    'transform': 'scale(' + scale + ')',
                                                    'position': 'absolute',
                                                    'align-self': 'center',
                                                    'width': '100%'
                                                });
                                                next_fs.css({
                                                    'left': left,
                                                    'opacity': opacity,
                                                    'display': 'flex'
                                                });
                                            },
                                            duration: 800,
                                            complete: function () {
                                                current_fs.hide();
                                                animating = false;
                                            },
                                            //this comes from the custom easing plugin
                                            easing: 'easeInOutBack'
                                        });
                                    }
                                }, 800);

                                $("#previous1").click(function (e) {
                                    // let animating;
                                    e.preventDefault();
                                    if (animating) return false;
                                    animating = true;

                                    current_fs = $("#previous1").parent();
                                    previous_fs = $("#previous1").parent().prev();

                                    //show the previous fieldset
                                    previous_fs.show();
                                    //hide the current fieldset with style
                                    current_fs.animate({
                                        opacity: 0
                                    }, {
                                        step: function (now) {
                                            //as the opacity of current_fs reduces to 0 - stored in "now"
                                            //1. scale previous_fs from 80% to 100%
                                            scale = 0.8 + (1 - now) * 0.2;
                                            //2. take current_fs to the right(50%) - from 0%
                                            left = ((1 - now) * 50) + "%";
                                            //3. increase opacity of previous_fs to 1 as it moves in
                                            opacity = 1 - now;
                                            current_fs.css({
                                                'left': left
                                            });
                                            previous_fs.css({
                                                'transform': 'scale(' + scale + ')',
                                                'opacity': opacity
                                            });
                                        },
                                        duration: 800,
                                        complete: function () {
                                            current_fs.hide();
                                            animating = false;
                                        },
                                        //this comes from the custom easing plugin
                                        easing: 'easeInOutBack'
                                    });
                                });

                                };

                                verificationForm();

                                })(jQuery);
                            break;

                            default:
                                $('#ic-next')[0].innerHTML = loader;
                                    setTimeout(
                                    function()
                                    {
                                    $('#ic-next')[0].innerHTML = arrow;
                                    // if something wrong
                                    alertbox.classList.remove('success');
                                    alertbox.classList.add('fail');
                                    alertbox.innerHTML = "Something wrong"
                                    alerthint.innerHTML = "Please try again"
                                    alertboxParent.removeClass('hide');
                                }, 800);
                                    break;
                            }
                            })
                            .catch(error => {
                                // if fetch data is error
                                console.error(error);
                                alertbox.classList.remove('success');
                                alertbox.classList.add('fail');
                                alertbox.innerHTML = "Something wrong"
                                alerthint.innerHTML = "Please try again"
                                alertboxParent.removeClass('hide');
                            })
                            console.log(data);
                        } else {
                            // if email is not filled
                            $('#ic-next')[0].innerHTML = loader;
                            setTimeout(
                            function()
                            {
                                $('#ic-next')[0].innerHTML = arrow;
                                alertbox.classList.remove('success');
                                alertbox.classList.add('error');
                                alertbox.innerHTML = "Email are required"
                                alerthint.innerHTML = "Please fill in the email field"
                                alertboxParent.removeClass('hide');
                            }, 800);

                        };

            };

        // form regist submit listener
        // formregist.addEventListener('submit', (e) => {
        //     e.preventDefault();
        //     let bleh = true;
        //     formregist.querySelectorAll('input').forEach(input => {
        //         if (input.value == '') {
        //             // input empty
        //             bleh = false;
        //         } else {
        //             // input not empty
        //         }
        //     })

        //     if (formregist.querySelector('input[name="password"]').value != formregist.querySelector(
        //             'input[name="repass"]').value) {
        //         // checker pass and retype-pass have same value
        //         // and here if they dont have same value (not-match)
        //         bleh = false;
        //         alertbox.classList.remove('hide');
        //         alertbox.classList.add('fail');
        //         alertbox.innerHTML = 'password doesn\'t match';
        //     } else if (bleh) {
        //         // form goes to submit
        //         formregist.submit();
        //     } else {
        //         // alert if some input field is not filled yet
        //         alertbox.classList.remove('hide');
        //         alertbox.classList.add('fail');
        //         alertbox.innerHTML = 'all column must be fill';
        //     }
        // })

        // form setup password submit listener
        const alertbox2 = document.querySelector('h4#alert-message-2');
        const alerthint2 = document.querySelector('h5#alert-hint-2');
        const alertboxParent2 = $('#alert-message-2').parent().parent();
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
                alertboxParent2.attr('class', 'danger');
                alertbox2.classList.add('fail');
                alertbox2.innerHTML = 'Password doesn\'t match';
                alerthint2.innerHTML = 'Please enter your password again.';
                $('#alert-img-2').attr('src', $('#alert-img').attr('src'));
;
            } else if (bleh) {
                // form goes to submit
                formsetup.submit();
            } else {
                // alert if some input field is not filled yet
                alertboxParent2.attr('class', 'danger');
                alertbox2.classList.add('fail');
                alertbox2.innerHTML = 'All column must be fill';
                $('#alert-img-2').attr('src', $('#alert-img').attr('src'));
            }
        })
    </script>
@endsection
