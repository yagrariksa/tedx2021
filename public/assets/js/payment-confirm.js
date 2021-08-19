// MODAL STATIC RELOAD
// gbsa ngedit krn gakeliatan:(
// const beforeUnload =
//     `<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
//         <div class="modal-dialog">
//             <div class="modal-content">
//                 <div class="modal-header">
//                 <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
//                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//                     <span aria-hidden="true">&times;</span>
//                 </button>
//                 </div>
//                 <div class="modal-body">
//                 ...
//                 </div>
//                 <div class="modal-footer">
//                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
//                 <button type="button" class="btn btn-primary">Understood</button>
//                 </div>
//             </div>
//         </div>
//     </div>`;

// ALERT LEAVE PAGE
// window.addEventListener('beforeunload', e => {
//     e.returnValue = "";
//     console.log('beloom ada:(');
//     // alert('lom ad anjir')
// })

// PAYMENT DESCRIPTION
const danaId =
    `<ol>
        <li>Buka aplikasi DANA lalu pilih menu kirim</li>
        <li>Masukkan nomer 081331719462 (Amalia Malinda) dalam kolom penerima</li>
        <li>Masukkan nominal pembayaran</li>
        <li>Cek kembali apakah nomer penerima serta nominal pembayaran sudah sesuai</li>
        <li>Klik kirim dana jika sudah sesuai</li>
        <li>Lakukan konfirmasi dengan memasukkan 6 angka pin DANA</li>
    </ol>
    <p>Anda dapat menggunakan cara lain selama nomor tujuan dan nominal pembayaran sesuai.</p>`;

const danaEng =
    `<ol>
        <li>Open your DANA application and pick the send menu</li>
        <li>Input the receiver number to 081331719462 (Amalia Malinda)</li>
        <li>Input the correct amount of payment</li>
        <li>Check once more to make sure the reciever number and payment amount are correct</li>
        <li>Click send</li>
        <li>Make a confirmation by input your 6 DANA pin</li>
    </ol>
    <p>You can choose other method as long as the receiver number and the amount of payment is
        correct.
    </p>`;

const mandiriId =
    `<ol>
        <li>Login di aplikasi Mandiri Online</li>
        <li>Pilih "Transfer"</li>
        <li>Pilih "Ke Rekening Mandiri"</li>
        <li>Tentukan "Rekening Sumber"</li>
        <li>Isi "Rekening Tujuan" menjadi 1330015963192 (Jasmine Azzahra) dan "Jumlah" Transfer</li>
        <li>Lakukan konfirmasi dengan memasukkan MPIN anda</li>
    </ol>
    <p>Anda dapat menggunakan cara lain selama nomor tujuan dan nominal pembayaran sesuai.</p>`;

const mandiriEng =
    `<ol>
        <li>Login to Mandiri Online application</li>
        <li>Click Transfer</li>
        <li>Click to Mandiri Account</li>
        <li>Choose your account source</li>
        <li>Fill your destination account to 1330015963192 (Jasmine Azzahra) and the correct amount
            of
        </li>
        <li>payment</li>
        <li>Make a confirmation and input your MPIN</li>
    </ol>
    <p>You can choose other method as long as the receiver number and the amount of payment is
    correct.
    </p>`;

// PAYMENT INSTRUCTION MOBILE -> DANA
const danaElm = document.querySelector('#helpDana .instruction');
const danaOpt = document.querySelectorAll('#helpDana .language button');
danaOpt[0].classList.add('btn-active');
danaElm.innerHTML = danaId;

danaOpt.forEach(btn => {
    btn.addEventListener('click', e => {
        danaOpt.forEach(x => {
            x.classList.remove('btn-active');
        });
        btn.classList.add('btn-active');

        if (e.target.id == 'id') {
            danaElm.innerHTML = danaId;
        }
        else if (e.target.id == 'eng') {
            danaElm.innerHTML = danaEng;
        }
    })
})

// PAYMENT INSTRUCTION MOBILE -> MANDIRI
const mandiriElm = document.querySelector('#helpMandiri .instruction');
const mandiriOpt = document.querySelectorAll('#helpMandiri .language button');
mandiriOpt[0].classList.add('btn-active');
mandiriElm.innerHTML = mandiriId;

mandiriOpt.forEach(btn => {
    btn.addEventListener('click', e => {
        mandiriOpt.forEach(x => {
            x.classList.remove('btn-active');
        });
        btn.classList.add('btn-active');

        if (e.target.id == 'id') {
            mandiriElm.innerHTML = mandiriId;
        }
        else if (e.target.id == 'eng') {
            mandiriElm.innerHTML = mandiriEng;
        }
    })
})

// PAYMENT FILE ATTACHMENT
$('#inputFile')[0].addEventListener('change', () => {
    $('label[for="inputFile"] span')[0].innerHTML = $('input#inputFile')[0].files[0].name;
}, true)
