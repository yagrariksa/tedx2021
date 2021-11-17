@extends('layouts.admin')

@section('title')
    ADMIN
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
@endsection

@section('header')
    Main Event
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Participant</h4>
                    <div class="card-header-form">
                        <div class="input-group">
                            <button onclick="window.open('{{route('admin.main.excel')}}')" class="btn btn-success mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/>
                                  </svg>
                                Download Excel</button>
                            <input type="text" class="form-control" id="table-search" onkeyup="search()"
                                placeholder="Search name">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="membertable" class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Registrasi</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->created_at }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>
                                            <button class="btn btn-warning" id="detail-item"
                                                data-toggle ="modal"
                                                data-target ="#infoModal"
                                                data-name ='{{ $d->name }}'
                                                data-email ='{{ $d->email }}'
                                                data-age ='{{ $d->age }}'
                                                data-phone ='{{ $d->phone }}'
                                                data-institute ='{{ $d->institute }}'
                                                data-address ="{{ $d->address }}">Lihat Detail</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer text-right">
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
                </div> --}}
            </div>
        </div>
    </div>

@endsection

@section('modals')
    <div class="modal fade" tabindex="-1" role="dialog" id="infoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <label>Nama</label>
                            <p id="info-name" class="">name</p>
                        </div>
                        <div class="form-group">
                            <label>Institusi</label>
                            <p id="info-institute" class="">Institusi</p>
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <p id="info-email" class="">email</p>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <p id="info-phone" class="">phone</p>
                        </div>
                        <div class="form-group">
                            <label>Usia</label>
                            <p id="info-age" class="">age</p>
                        </div>
                        <div class="form-group">
                            <label>Domisili</label>
                            <p id="info-address" class="">address</p>
                        </div>
                    </div>
                </div>
                <div class="
                        modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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

        $(".btn.btn-warning#detail-item").on('click', function() {
            $('#info-name').text($(this).data("name"));
            $('#info-email').text($(this).data("email"));
            $('#info-age').text($(this).data("age"));
            $('#info-phone').text($(this).data("phone"));
            $('#info-institute').text($(this).data("institute"));
            $('#info-address').text($(this).data("address"));
        });


        function search() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("table-search");
            filter = input.value.toUpperCase();
            table = document.getElementById("membertable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
