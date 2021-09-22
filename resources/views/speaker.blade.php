@extends('dummy')

@section('content')
    <h1>INFORMATION HERE</h1>
    @auth
        @if (Auth::user()->speaker)
            <button disabled="disabled">You Already Registered</button>
        @else
            <button class="modal-trigger" id="btn-regist" data-target="#modal-regist">daftar sekarang</button>
        @endif
    @else
        <a href="#">regist account</a>
    @endauth

    <div class="modal hide" id="modal-regist">
        <form action="{{ route('account.speaker.register') }}" method="POST">
            @csrf
            <input type="text" placeholder="domisili" name="domisili">
            <input type="text" placeholder="instagram" name="instagram">
            <input type="text" placeholder="link gdrive" name="drive">
            <button type="submit">Submit</button>
            <button type="button" class="btn-cancel">Cancel</button>
        </form>
    </div>

@endsection


@section('js')
    <script>
        const btnRegist = document.querySelector('#btn-regist');
        btnRegist.addEventListener('click', () => {
            let modal = document.querySelector(btnRegist.dataset.target);
            modal.classList.remove('hide');
            console.log(modal);
            modal.querySelector('button.btn-cancel').addEventListener('click', () => {
                modal.classList.add('hide');
            })
        })
    </script>
@endsection
