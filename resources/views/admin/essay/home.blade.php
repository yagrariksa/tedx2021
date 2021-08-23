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
                <h4>Call For Essay Statistic</h4>
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

            <div class="card-body">
                <p>Coming Soon</p>
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
