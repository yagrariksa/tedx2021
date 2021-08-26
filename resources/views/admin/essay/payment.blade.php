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
                    <h4>Payment of All Participant</h4>
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
                    <div class="selectgroup selectgroup-pills"
                        style="display: inline-flex; flex-wrap:nowrap; gap: .5rem; align-items:center">
                        <select id="input-item-per-page" class="form-control" style="border-radius: 1rem">
                            <option>15</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                        <label class="selectgroup-item m-0">
                            <input type="checkbox" name="value" id="input-filter0" value="Unpaid" class="selectgroup-input" checked>
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
                            <tbody id="tbody">
                               
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
                        <img src="#"
                            onclick="window.open(document.getElementById('img-payment').getAttribute('src'),'Image')"
                            alt="click show" id="img-payment" class="img-fluid" style="border-radius: 4px">
                        <label for="">Klik foto untuk memperbesar</label>
                        <form action="#" method="post" style="display: none" id="form-ubah">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
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
                                    <option value="2" selected>Menunggu Konfirmasi</option>
                                    <option value="5">Tolak Pembayaran</option>
                                    <option value="6">Pembayaran Diterima</option>
                                    <option value="3">Menang Kompetisi</option>
                                    <option value="4">Kalah Kompetisi</option>
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


        const ipaginate = document.querySelector('#input-item-per-page');
        const filter0 = document.querySelector('#input-filter0');
        const filter2 = document.querySelector('#input-filter2');
        const filter5 = document.querySelector('#input-filter5');
        const filter6 = document.querySelector('#input-filter6');

        const tableBody = document.querySelector('tbody#tbody');
        const ulPagination = document.querySelector('ul#ul-pagination');

        const changedata = (page = false) => {
            let filter = [];
            if (filter2.checked) {
                filter.push(2);
            }
            if (filter5.checked) {
                filter.push(6);
            }
            if (filter6.checked) {
                filter.push(5);
            }
            let paginate = ipaginate.value
            let unpaid = filter0.checked

            let url = "{{ route('api.essay.payment') }}" + `?nulldata=${unpaid}&paginate=${paginate}`;
            if (page) {
                url = url + `&page=${page}`
            }
            if (filter != null) {
                url = url + `&filter=${filter}`
            }
            console.log(url);

            try {
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.body);
                        if (typeof(data.body.data == "object")) {
                            let arr = Object.values(data.body.data);
                            populateData(arr);
                        } else {
                            populateData(data.body.data);
                        }
                        populatePagination(data.body.links);
                    });
            } catch (error) {
                console.error('FETCH API ERROR');
            }

            // console.log(filter);
            // console.log(paginate);
            // console.log(unpaid);
        }

        const populateData = (data) => {
            tableBody.innerHTML = "";
            let counter = 1;
            data.forEach(record => {
                const tr = document.createElement('tr');

                const tdno = document.createElement('td');
                tdno.innerHTML = counter;
                counter++;

                const tdname = document.createElement('td');
                tdname.innerHTML = record.user.name

                const tdstatus = document.createElement('td');
                const span = document.createElement('span');
                span.classList.add('badge');

                const tdbutton = document.createElement('td');
                const button = document.createElement('button');
                button.classList.add('btn');
                button.innerHTML = 'Show/Change Status';

                if (record.payment != null) {
                    button.classList.add('form-trigger');
                    button.classList.add('btn-primary');
                    button.dataset.toggle = "modal";
                    button.dataset.target = "#exampleModal"
                    button.dataset.email = record.user.email
                    button.dataset.name = record.user.name
                    button.dataset.src = record.payment.img
                    button.dataset.id = record.payment.id
                    switch (record.payment.status) {
                        case "2":
                            span.classList.add('badge-info');
                            span.innerHTML = "Menunggu Konfirmas";
                            break;

                        case "5":
                            span.classList.add('badge-danger');
                            span.innerHTML = "Pembayaran Ditolak";
                            break;
                        case "6":
                            span.classList.add('badge-success');
                            span.innerHTML = "Pembayaran diterima";
                            break;
                        default:
                            span.classList.add('badge-light');
                            span.innerHTML = "DEFAULT";
                            button.setAttribute('disabled', true);
                            break;
                    }
                } else {
                    span.classList.add('badge-light');
                    span.innerHTML = "Belum Bayar";
                }
                button.addEventListener('click', () => {
                    form.style.display = 'block';
                    img.setAttribute('src', button.dataset.src);
                    form.querySelector('input#input-id').value = button.dataset.id;
                    form.querySelector('input#input-name').value = button.dataset.name;
                    form.querySelector('input#input-email').value = button.dataset.email;
                });
                tdstatus.appendChild(span);
                tdbutton.appendChild(button);

                tr.appendChild(tdno);
                tr.appendChild(tdname);
                tr.appendChild(tdstatus);
                tr.appendChild(tdbutton);

                tableBody.appendChild(tr);
            });
        }

        const populatePagination = (link) => {
            ulPagination.innerHTML = '';
            link.forEach(page => {
                const li = document.createElement('li');
                li.classList.add('page-item');
                page.active ? li.classList.add('active') : null;
                // li.classList.add(page.active ? 'active' : '');
                page.url ? null : li.classList.add('disabled');
                let tagA = document.createElement('a');
                // tagA.classList.add('page-link');
                tagA.classList.add('page-link')
                tagA.innerHTML = page.label
                // tagA.setAttribute('href', page.url ? page.url : '#');
                tagA.addEventListener('click', () => {
                    changedata(page.url[page.url.length - 1]);
                })
                li.appendChild(tagA);
                ulPagination.appendChild(li);
                // tagA.setAttribute('href', page.url ? page.url : '#');

            });
        }


        ipaginate.addEventListener("change", changedata);
        filter0.addEventListener("change", changedata);
        filter2.addEventListener("change", changedata);
        filter5.addEventListener("change", changedata);
        filter6.addEventListener("change", changedata);

        changedata();
    </script>
@endsection
