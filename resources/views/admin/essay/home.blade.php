@extends('dummy')

@section('title')
    ADMIN
@endsection

@section('content')
    @if (Session::has('success'))
        <span class="alert success">{{ Session::get('success') }}</span>
    @endif
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Status</th>
                <th>detil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->fullname }}</td>
                    <td>
                        @if ($d->last != null)
                            @switch($d->last->status)
                                @case(2)
                                    menunggu konfirmasi
                                @break
                                @case(3)
                                    menang
                                @break
                                @case(4)
                                    kalah
                                @break
                                @case(5)
                                    pembayaran ditolak
                                @break
                                @default
                                    Belum Bayar
                            @endswitch
                        @else
                            Belum Bayar
                        @endif

                    </td>
                    <td>
                        @if ($d->last != null)
                            <button class="form-trigger" data-email="{{ $d->email }}" data-name="{{ $d->fullname }}"
                                data-src="{{ $d->last->img }}" data-id="@if ($d->last != null) {{ $d->last->id }} @endif">show and change status</button>
                        @else
                            Belum Bayar Gabisa ubah status
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <hr>
    <div class="row">
        <img src="#" alt="click show" id="img-payment" style="max-width: 25vw">
        <form action="#" method="post" style="display: none" id="form-ubah">
            @csrf
            <label for="">Ubah untuk</label>
            <input type="hidden" name="id" value="" id="input-id">
            <input type="text" name="fullname" disabled value="" placeholder="" id="input-name">
            <input type="text" name="email" disabled value="" placeholder="" id="input-email">
            <label for="">Ubah status menjadi</label>
            <select name="status" id="">
                <option value="2" selected>menunggu konfirmasi</option>
                <option value="5">tolak pembayaran</option>
                <option value="6">pembayaran diterima</option>
                <option value="3">menang kompetisi</option>
                <option value="4">kalah kompetisi</option>
            </select>
            <input type="text" name="reason" placeholder="alasan" id="input-reason" style="display: none">
            <div class="row">
                <button type="button" id="cancel-form">Batalkan</button>
                <button type="submit">UBAH</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script>
        const s = document.querySelector('select');
        const img = document.querySelector('img#img-payment');
        const form = document.querySelector('form#form-ubah');
        const btnCancelForm = document.querySelector('button#cancel-form');
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
                form.style.display = 'flex';
                img.setAttribute('src', btn.dataset.src);
                form.querySelector('input#input-id').value = btn.dataset.id;
                form.querySelector('input#input-name').value = btn.dataset.name;
                form.querySelector('input#input-email').value = btn.dataset.email;
            });
        });

        btnCancelForm.addEventListener('click', () => {
            form.style.display = 'none'
            img.setAttribute('src', "#");
        })
    </script>
@endsection
