@extends('layouts.admin')

@section('title')
    ADMIN
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
    <style>
        th,
        td {
            border: 1px solid black;
            padding: 3px 5px;
        }

    </style>
@endsection

@section('header')
    Call For Student Speaker
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Domisili</th>
                <th>gdrive</th>
                <th>IG</th>
                <th>LOLOS</th>
                <th>other</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->user->name }}</td>
                    <td>{{ $d->domisili }}</td>
                    <td><a href="{{ $d->drive }}">{{ $d->drive }}</a></td>
                    <td>{{ $d->instagram }}</td>
                    <td>
                        @if ($d->lolos)
                            <span class="btn btn-success">V</span>
                        @else
                            <span class="btn btn-danger">X</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-success">show modal nantinya</button>
                        @if (!$d->lolos)
                            <button class="btn btn-primary btn-loloskan"
                                data-email="{{ $d->user->email }}">loloskan</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('modals')
    <form action="{{ route('admin.speaker.participant') }}" id="form-loloskan" style="display: none" method="POST">
        @csrf
        <input type="text" name="email" id="input-email">
    </form>
@endsection

@section('js')
    <script>
        const formLoloskan = document.querySelector('#form-loloskan')
        const btnLoloskan = document.querySelectorAll('.btn-loloskan');
        btnLoloskan.forEach(btn => {
            btn.addEventListener('click', () => {
                formLoloskan.querySelector('#input-email').value = btn.dataset.email
                formLoloskan.submit();
            })
        });
    </script>
@endsection
