@if (Auth::user()->speaker)
        anda sudah terdafatar event CFSS
        @if (Auth::user()->speaker->lolos)
            <strong>
                ANDA lolos event CFSS
            </strong>
            {{-- harusnya disini nanti ada modals tentang
                masukin data interview mau kapan --}}
            {{-- kalo gapaham ttg interview apaan
                tanya ke ubin atau baca dokumen brief CFSS --}}
            {{-- knp belum dibikin ? karena masi mau
                koordinasi lgi sama anak Event nya ttg ini --}}
        {{-- @endif
@endif --}}
