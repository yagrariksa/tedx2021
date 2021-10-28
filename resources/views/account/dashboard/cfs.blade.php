@if (Auth::user()->speaker)
    <div class="main-card">
        <div class="name">
            <img style="width: 51px" src="{{ asset('assets/img/revamp/ic-cfs.png') }}" alt="">
            <h2>Call for Student Speaker</h2>
        </div>
        <!-- Unpaid -->
        <div class="status">
            @if (Auth::user()->speaker->lolos)
                <div class="desc">
                    <div>
                        <h2 class="text-green">Congratulations</h2>
                        <p class="text-sand-beach">qua <span class="text-green">·</span> li <span
                                class="text-red">·</span> fied </p>
                    </div>
                    <hr>
                    <p>You have been <span class="text-green" style="font-weight: 600;"> choosen </span> to go to
                        <span class="text-green" style="font-weight: 600;"> next phase. Horay! </span>
                    </p>
                </div>
                <button class="btn-green" onclick="window.open('https://bit.ly/InterviewScheduleCFSS')" >Interview Schedule</button>
            @else
                <div class="desc">
                    <div>
                        <h2 class="text-red">Sorry</h2>
                        <p class="text-sand-beach">un <span class="text-green">·</span> qua <span
                                class="text-red">·</span> li <span class="text-green">·</span> fied</p>
                    </div>
                    <hr>
                    <p>Thank you for participating.<span class="text-red" style="font-weight: 600;"> Dont give up.
                            Try Again next time </span></p>
                </div>
            @endif

        </div>
    </div>
@endif
