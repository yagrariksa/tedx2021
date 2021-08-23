// BUAT BORDER IJO TETEP STAY PAS UDAH ADA ISINYA
let inputs = document.querySelectorAll('input');
inputs.forEach(input => {
    input.addEventListener('keypress', () => {
        input.classList.add('normal-input')
    })
})

// TOMBOL CLOSE DI WARNING
window.addEventListener('click', e => {
    if (e.target.className == 'close') {
        e.target.parentElement.classList.add('hidden')
    }
})

// WARNING-NYA
const fillAll =
    `<div class="warning">
        <div class="close">&times;</div>
        <p>Please fill all form</p>
    </div>`;

// SUBMIT REGISTRATION
const mandatory = document.querySelectorAll('.mandatory');
const regis = document.querySelector('#btn-regis');
const warnContainer = document.querySelector('.warn-container');
regis.addEventListener('click', e => {
    mandatory.forEach(x => {
        if (x.value == '') {
            e.preventDefault();
            warnContainer.innerHTML = fillAll;
        }
    })
})

// ILANGIN AFTERFORM PAS KLIK PAY LATER
window.addEventListener('click', e => {
    console.log(e.target);
    if (e.target.className == 'later') {
        e.target.parentElement.parentElement.parentElement.classList.add('hidden')
    }
})