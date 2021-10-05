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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>All Participant</h4>
                <div class="card-header-form">
                    {{-- <form>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </form> --}}
                </div>
            </div>
            {{-- <div class="form-group pl-4">
                <div class="selectgroup selectgroup-pills"
                    style="display: inline-flex; flex-wrap:nowrap; gap: .5rem; align-items:center">
                    <select id="input-item-per-page" class="form-control" style="border-radius: 1rem">
                        <option>15</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" id="input-filter0" value="Unpaid" class="selectgroup-input"
                            checked>
                        <span class="selectgroup-button">Unpaid</span>
                    </label>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" id="input-filter2" value="Unconfirmed"
                            class="selectgroup-input" checked>
                        <span class="selectgroup-button">Unconfirmed</span>
                    </label>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" id="input-filter6" value="Declined"
                            class="selectgroup-input">
                        <span class="selectgroup-button">Declined</span>
                    </label>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" id="input-filter5" value="Accepted"
                            class="selectgroup-input">
                        <span class="selectgroup-button">Accepted</span>
                    </label>
                </div>
            </div> --}}
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
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
                                        @else
                                        <button class="btn btn-danger btn-gagalkan"
                                                data-email="{{ $d->user->email }}">gagalkan</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0" id="ul-pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

    {{-- <table>
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
    </table> --}}

@endsection

@section('modals')
{{-- <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <form action="{{ route('admin.speaker.participant') }}" id="form-loloskan" method="post" style="display: none">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="hidden" name="id" value="" id="input-id" class="form-control">
                            <input type="text" name="fullname" disabled value="" placeholder="" id="input-name"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" disabled value="" placeholder="" id="input-email"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ubah status menjadi</label>
                            <select class="form-control" name="status" id="form-input-status">
                                <option value="6" selected>Pembayaran Diterima</option>
                                <option value="5">Tolak Pembayaran</option>
                            </select>
                        </div>
                        <input type="text" name="reason" placeholder="alasan (wajib diisi)" id="input-reason"
                            class="form-control" style="display: none">
                    </form>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('form-ubah').submit()">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}
    <form action="{{ route('admin.speaker.participant') }}" id="form-loloskan" style="display: none" method="POST">
        @csrf
        <input type="text" name="email" id="input-email">
    </form>
    <form action="{{ route('admin.speaker.participant') }}" id="form-gagalkan" style="display: none" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="email" id="input-email">
    </form>
@endsection

@section('js')
    <script>
        const formLoloskan = document.querySelector('#form-loloskan');
        const formGagalkan = document.querySelector('#form-gagalkan');
        const btnLoloskan = document.querySelectorAll('.btn-loloskan');
        const btnGagalkan = document.querySelectorAll('.btn-gagalkan');
        btnLoloskan.forEach(btn => {
            btn.addEventListener('click', () => {
                formLoloskan.querySelector('#input-email').value = btn.dataset.email
                formLoloskan.submit();
            })
        });
        btnGagalkan.forEach(btn => {
            btn.addEventListener('click', () => {
                formGagalkan.querySelector('#input-email').value = btn.dataset.email
                formGagalkan.submit();
            })
        });
    </script>
@endsection
