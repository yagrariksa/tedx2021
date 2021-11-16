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
                        {{-- <form> --}}
                        <div class="input-group">
                            <input type="text" class="form-control" id="table-search" onkeyup="search()"
                                placeholder="Search name">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                            <button onclick="window.open('{{route('admin.main.excel')}}')" class="btn btn-dark">Excel</button>
                        </div>
                        {{-- </form> --}}
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
                        <table id="membertable" class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>
                                            <button class="btn btn-warning" id="detail-item" data-toggle="modal"
                                                data-target="#infoModal" data-name='' data-domisili="" data-drive=""
                                                data-ig="">Participant Detail</button>
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

@endsection

@section('modals')
    <div class="modal fade" tabindex="-1" role="dialog" id="infoModal">
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
                        <div class="form-group">
                            <label>Name</label>
                            <p id="info-name" class="">name</p>
                        </div>
                        <div class="form-group">
                            <label>Domisili</label>
                            <p id="info-domisili" class="">domilisi</p>
                        </div>
                        <div class="form-group">
                            <label>Gdrive Link</label>
                            <p><a id="info-drive" class="">link gdrive</a></p>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <p id="info-ig" class="">instagram</p>
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
            // $('#info-ig').attr('href', $(this).data("ig"));
            $('#info-drive').attr('href', $(this).data("drive"));

            $('#info-name').text($(this).data("name"));
            $('#info-ig').text($(this).data("ig"));
            $('#info-domisili').text($(this).data("domisili"));
            $('#info-drive').text($(this).data("drive"));

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
