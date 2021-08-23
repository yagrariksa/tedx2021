@extends('layouts.admin')

@section('title')
    ADMIN
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
@endsection

@section('header')
Call For Essay
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4>Participant Finalist</h4>
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
            <div class="form-group pl-4">
                <div class="selectgroup selectgroup-pills" style="display: inline-flex; flex-wrap:nowrap; gap: .5rem; align-items:center">
                    <select class="form-control" style="border-radius: 1rem">
                        <option>15</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                        <span class="selectgroup-button">Lose</span>
                    </label>
                    <label class="selectgroup-item m-0">
                        <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                        <span class="selectgroup-button">Winner</span>
                    </label>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->user->name }}</td>
                                <td>
                                    @if ($d->last != null)
                                        @switch($d->last->status)
                                            @case(2)
                                            <span class="badge badge-info">
                                                Menunggu Konfirmasi
                                            </span>
                                            @break
                                            @case(3)
                                            <span class="badge badge-primary">
                                                Menang
                                            </span>
                                            @break
                                            @case(4)
                                            <span class="badge badge-dark">
                                                Kalah
                                            </span>
                                            @break
                                            @case(5)
                                            <span class="badge badge-danger">
                                                Pembayaran Ditolak
                                            </span>
                                            @break
                                            @case(6)
                                            <span class="badge badge-success">
                                                Pembayaran Diterima
                                            </span>
                                            @break
                                            @default
                                            <span class="badge badge-light">
                                                Belum Bayar
                                            </span>
                                        @endswitch
                                    @else
                                    <span class="badge badge-light">
                                        Belum Bayar
                                    </span>
                                    @endif

                                </td>
                                <td>
                                    @if ($d->last != null)
                                        <button class="btn btn-primary form-trigger" data-toggle="modal" data-target="#exampleModal" data-email="{{ $d->user->email }}" data-name="{{ $d->user->name }}"
                                            data-src="{{ $d->last->img }}" data-id="@if ($d->last != null) {{ $d->last->id }} @endif">Show/Change Status</button>
                                    @else
                                        <button class="btn disabled btn-secondary" disabled>Show/Change Status</button>
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
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
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

@endsection

@section('modals')
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
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
                <img src="#" onclick="window.open(document.getElementById('img-payment').getAttribute('src'),'Image')"  alt="click show" id="img-payment" class="img-fluid" style="border-radius: 4px">
                <label for="">Klik foto untuk memperbesar</label>
                <form action="#" method="post" style="display: none" id="form-ubah">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="hidden" name="id" value="" id="input-id" class="form-control">
                        <input type="text" name="fullname" disabled value="" placeholder="" id="input-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" disabled value="" placeholder="" id="input-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ubah status menjadi</label>
                        <select class="form-control" name="status" id="form-input-status">
                            <option value="2" selected>Menunggu Konfirmasi</option>
                            <option value="5">Tolak Pembayaran</option>
                            <option value="6">Pembayaran Diterima</option>
                            <option value="3">Menang Kompetisi</option>
                            <option value="4">Kalah Kompetisi</option>
                        </select>
                      </div>
                    <input type="text" name="reason" placeholder="alasan (wajib diisi)" id="input-reason" class="form-control" style="display: none">
                </form>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="document.getElementById('form-ubah').submit()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/page/components-table.js') }}"></script>


    <script>
        const s = document.querySelector('select#form-input-status');
        const img = document.querySelector('img#img-payment');
        const form = document.querySelector('form#form-ubah');
        // const btnCancelForm = document.querySelector('button#cancel-form');
        const btnTrigger = document.querySelectorAll('button.form-trigger');

        s.addEventListener('input', () => {
            let inputreason = document.querySelector('input#input-reason');
            if (s.value == "5") {
                inputreason.style.display = 'inline';
            } else {
                inputreason.style.display = 'none';
            }
        })

        btnTrigger.forEach(btn => {
            btn.addEventListener('click', () => {
                form.style.display = 'block';
                img.setAttribute('src', btn.dataset.src);
                form.querySelector('input#input-id').value = btn.dataset.id;
                form.querySelector('input#input-name').value = btn.dataset.name;
                form.querySelector('input#input-email').value = btn.dataset.email;
            });
        });


    </script>
@endsection
