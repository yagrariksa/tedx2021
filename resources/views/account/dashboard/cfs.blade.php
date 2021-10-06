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
                    <h2 class="text-red">You're the winner</h2>
                    <p class="text-sand-beach">wow <span class="text-green">..·</span> nice</p>
                </div>
            </div>
        @else
            <div class="desc">
                <div>
                    <h2 class="text-red">You're registered</h2>
                    <p class="text-sand-beach">yay <span class="text-green">·</span> yay</p>
                </div>
            </div>
        @endif

    </div>
</div>
@endif
