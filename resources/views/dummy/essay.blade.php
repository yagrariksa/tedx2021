@extends('dummy')

@section('content')
    <h1>INFORMATION HERE</h1>

    @auth
        @if (Auth::user()->essay)
            <button id="to-dashboard">CEK STATUS</button>
        @else
            <button id="show-modals">SHOW DIALOG MODALS REGIST</button>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="modal hide" id="modal-regist">
                <form action="" method="post">
                    @csrf
                    <input type="text" required placeholder="essay title" name="title">
                    <input type="text" required placeholder="link gdrive" name="essaylink">
                    <button type="submit">REGIST NOW</button>
                </form>
            </div>
        @endif
    @else
        <a href="{{ route('account.regist') }}" id="to-login">REGIST</a>


    @endauth
@endsection

@section('js')
    @auth
        @if (Auth::user()->essay)
        @else
            <script>
                const btn = document.querySelector('#show-modals');
                const modals = document.querySelector('#modal-regist');

                btn.addEventListener('click', () => {
                    modals.classList.remove('hide');
                })
            </script>
        @endif
    @endauth
@endsection
