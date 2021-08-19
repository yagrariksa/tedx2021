@extends('dummy')

@section('title')
    CEK STATUS
@endsection

@section('content')
    <h1>CEK STATUS</h1>
    @if (Session::has('success'))
        <span class="alert success">{{ Session::get('success') }}</span>
    @endif
    <input type="email" placeholder="your email" id="email">
    <button id="trigger">CEK</button>
    <div class="status">

    </div>
    <a href="#" id="paid" style="display: none">PAID</a>

    <template>
    </template>
@endsection

@section('js')
    <script>
        const paymentlink = "{{ route('essay.payment') }}";
        const resstat = document.querySelector('.status');
        // listener input email
        const email = document.querySelector('input#email');
        const btn = document.querySelector('button#trigger');
        const paidbtn = document.querySelector('a#paid');
        email.addEventListener('input', () => {
            // VERIFIY EMAIL
        })

        btn.addEventListener('click', () => {
            fetch(`{{ route('api.essay.status.payment') }}?email=${email.value}`)
                .then(response => response.json())
                .then(data => displayRes(data));
        })

        // result listener

        // logic result
        const displayRes = (data) => {
            paidbtn.style.display = 'none';
            switch (data.code) {
                case ("0"):
                    resstat.innerHTML = data.message
                    break;
                case (1):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = "Anda belum melakukan pembayaran"
                    paidbtn.innerHTML = "Bayar sekarang"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                case ("2"):
                    resstat.innerHTML = "Menunggu konfirmasi"
                    break

                case ("3"):
                    resstat.innerHTML = "SUKSES"
                    break;
                case ("4"):
                    resstat.innerHTML = "Maaf Anda Kalah"
                    break

                case ("5"):
                    paidbtn.style.display = 'inline';
                    resstat.innerHTML = "pembayaran ditolak, karena <strong>" + data.reason + "</strong>"
                    paidbtn.innerHTML = "Bayar Ulang"
                    paidbtn.setAttribute('href', paymentlink + "?email=" + email.value)
                    break

                default:
                    resstat.innerHTML = "server busy"

            }
            console.log(data)
            // resstat.innerHTML = data.message
        }
    </script>

@endsection
