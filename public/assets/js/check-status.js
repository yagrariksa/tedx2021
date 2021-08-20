const validate = () => {
    let email = $('input#email')[0].value;
    let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    return (filter.test(email));
}

// LOADER
const loading =
    `<div class="loader loader--fullscreen">
        <div class="loader__balls">
            <div class="loader__balls__dot"></div>
            <div class="loader__balls__dot"></div>
        </div>
        <svg>
            <defs>
                <filter id="gooey">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" />
                <feColorMatrix values="
                    1 0 0 0 0
                    0 1 0 0 0
                    0 0 1 0 0
                    0 0 0 20 -10" />
                </filter>
            </defs>
        </svg>
    </div>`;

$('input#email')[0].addEventListener('keypress', () => {
    if (validate()) {
        // LOADING
        $('body').append(loading)
        // $('.loader')[0].classList.remove('hidden')
        // MUNCUL PESAN
        setInterval(() => {
            $('.loader').remove()
            // $('.loader')[0].classList.add('hidden')
            $('.status')[0].innerHTML = choosen;
        }, 3000)
    }
})
