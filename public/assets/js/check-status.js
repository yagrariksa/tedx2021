const notFound =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-red">Not Found</h2>
            <p class="text-sand-beach">er <span class="text-green">·</span> ror</p>
        </div>
        <hr>
        <p>Your account is <span class="text-red" style="font-weight: 600;">not found</span>. Input your
            <span class="text-red" style="font-weight: 600;">email correctly</span>.
        </p>
    </div>
    <button class="btn-green">Register</button>`;

const unpaid =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-red">Unpaid</h2>
            <p class="text-sand-beach">re <span class="text-green">·</span> mem <span
                    class="text-red">·</span> ber</p>
        </div>
        <hr>
        <p>Please <span class="text-red" style="font-weight: 600;">pay</span> and <span class="text-red"
                style="font-weight: 600;">upload</span> the transfer slip <span class="text-red"
                style="font-weight: 600;">before dd/mm/yyyy</span>
        </p>
    </div>
    <button class="btn-green">Pay</button>`;

const pending =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-red">Pending</h2>
            <p class="text-sand-beach">wai <span class="text-green">·</span> ting</p>
        </div>
        <hr>
        <p>Kindly wait for our administrator to finish <span class="text-red"
                style="font-weight: 600;">processing</span> your payment.
        </p>
    </div>`;

const decline =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-red">Decline</h2>
            <p class="text-sand-beach">oop <span class="text-green">·</span> sie</p>
        </div>
        <hr>
        <p>Your payment has been <span class="text-red" style="font-weight: 600;">decline</span> due to
            <span class="text-red" style="font-weight: 600;">blablablablabla</span> <br>
            Please <span class="text-red" style="font-weight: 600;">pay</span> and <span class="text-red"
                style="font-weight: 600;">upload</span> the transfer slip <span class="text-red"
                style="font-weight: 600;">before dd/mm/yyyy</span>
        </p>
    </div>
    <button class="btn-green">Pay</button>`;

const selection =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-green">Selection</h2>
            <p class="text-sand-beach">pro <span class="text-green">·</span> ces <span
                    class="text-red">·</span> sing </p>
        </div>
        <hr>
        <p>Your registration is <span class="text-red" style="font-weight: 600;">completed</span>. <span
                class="text-red" style="font-weight: 600;">Please wait</span> for the announcement of your
            <span class="text-red" style="font-weight: 600;">essay result</span>.
        </p>
    </div>`;

const failed =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-red">We're Sorry</h2>
            <p class="text-sand-beach">un <span class="text-green">·</span> qua <span
                    class="text-red">·</span> li <span class="text-green">·</span> fied</p>
        </div>
        <hr>
        <p>Thank you for participating. <span class="text-red" style="font-weight: 600;">Don't give up. Try
                again next time.</span>
        </p>
    </div>`;

const choosen =
    `<div class="line"></div>
    <div class="desc">
        <div>
            <h2 class="text-green">Congratulations</h2>
            <p class="text-sand-beach">qua <span class="text-green">·</span> li <span
                    class="text-red">·</span> fied</p>
        </div>
        <hr>
        <p>Your registration has been <span class="text-green" style="font-weight: 600;">choosen</span> to
            go to <span class="text-green" style="font-weight: 600;">next phase. Horray!</span>
        </p>
    </div>`;

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