@extends('layouts.clientNew')

@section('title', 'Call For Student Speaker')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/revamp/event-cfs.css') }}">
    <style>
        .tl-card.now {
            background-color: rgba(12, 83, 84, 0.55)
        }

    </style>
@endsection

@section('content')
    <div class="header" id="join-now">
        <div class="description">
            <h2>Call for Student Speaker</h2>
            <h3>Call For Student is one of the subevent held by TEDxUniversitasAirlangga which
                provides a place for students of Universitas Airlangga to become the speaker in
                TEDxUniversitasAirlangga 2021. In this occasion, TEDxUniversitasAirlangga is
                calling students to be the speakers to perform on TEDxUniversitasAirlangga's IGTV and the following main
                event.</h3>
            <div class="footer">
                <a href="https://drive.google.com/file/d/17b1ZN6GQGA8hI0mGjycFIYTtjL1Zm3O0/view?usp=sharing"
                    target="__blank" class="button secondary">Booklet</a>
                @if (Auth::user())
                    @if (Auth::user()->speaker)
                        <button type="button" class="button" style="cursor:auto">Already Registered</button>
                    @else
                        <button type="button" class="button submit" data-bs-toggle="modal" data-bs-target="#join-cfs">Join
                            Event</button>
                    @endif
                @else
                    <button disabled class="button" style="cursor: auto">Event Has Ended</button>

                @endif
                <div class="modal fade" id="join-cfs" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="joinCfsLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <form class="modal-content" action="{{ route('account.speaker.register') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h2 class="modal-title" id="joinCfsLabel">Event Form</h2>
                            </div>
                            <div class="modal-body">
                                <div class="input-form">
                                    <label>Please read the requirements on the bottom page carefully</label>
                                </div>
                                <div class="input-form">
                                    <label for="domisili">Domicile <span class="text-red">*</span></label>
                                    <input type="text" name="domisili" id="domicile" placeholder="Kota Surabaya">
                                </div>
                                <div class="input-form">
                                    <label for="instagram">Instagram Account <span class="text-red">*</span></label>
                                    <input type="text" name="instagram" id="instagram" placeholder="@evacipta">
                                </div>
                                <div class="input-form">
                                    <label for="drive">Google Drive Link <span class="text-red">*</span></label>
                                    <input type="text" name="drive" id="gdrive" placeholder="https://drive.google.com/">
                                </div>
                                <div id="alert-regis">
                                    <!-- isi alert -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="submit-form" class="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="announcement">
        <h2 class="smaller">Timeline</h2>
        <div class="timeline">
            <div class="tl-lg">
                <input type="radio" name="timeline" id="oprec">
                <label for="oprec" class="button secondary tl-card">
                    <h4>Open Recruitment</h4>
                    <div class="date-container">
                        <div class="date-month">
                            <h3 class="date">07</h3>
                            <h5>Oct</h5>
                        </div>
                        <h3 class="date">-</h3>
                        <div class="date-month">
                            <h3 class="date">21</h3>
                            <h5>Oct</h5>
                        </div>
                    </div>
                </label>
                <input type="radio" name="timeline" id="announceI">
                <label for="announceI" class="button secondary tl-card">
                    <h4>Announcement I</h4>
                    <div class="date-month">
                        <h3 class="date">22</h3>
                        <h5>Oct</h5>
                    </div>
                </label>
                <input type="radio" name="timeline" id="interview">
                <label for="interview" class="button secondary tl-card">
                    <h4>Interview</h4>
                    <div class="date-container">
                        <div class="date-month">
                            <h3 class="date">23</h3>
                            <h5>Oct</h5>
                        </div>
                        <h3 class="date">-</h3>
                        <div class="date-month">
                            <h3 class="date">24</h3>
                            <h5>Oct</h5>
                        </div>
                    </div>
                </label>
                <input type="radio" name="timeline" id="final">
                <label for="final" class="button secondary tl-card">
                    <h4>Final Announcement</h4>
                    <div class="date-month">
                        <h3 class="date">28</h3>
                        <h5>Oct</h5>
                    </div>
                </label>
            </div>
            <div class="tl-sm">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <div class="slides fade-slide">
                    <input type="radio" name="timeline" id="oprec">
                    <label for="oprec" class="button secondary tl-card">
                        <h4>Open Recruitment</h4>
                        <div class="date-container">
                            <div class="date-month">
                                <h3 class="date">07</h3>
                                <h5>Oct</h5>
                            </div>
                            <h3 class="date">-</h3>
                            <div class="date-month">
                                <h3 class="date">17</h3>
                                <h5>Oct</h5>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="slides fade-slide">
                    <input type="radio" name="timeline" id="announceI">
                    <label for="announceI" class="button secondary tl-card">
                        <h4>Announcement I</h4>
                        <div class="date-month">
                            <h3 class="date">22</h3>
                            <h5>Oct</h5>
                        </div>
                    </label>
                </div>

                <div class="slides fade-slide">
                    <input type="radio" name="timeline" id="interview">
                    <label for="interview" class="button secondary tl-card">
                        <h4>Interview</h4>
                        <div class="date-container">
                            <div class="date-month">
                                <h3 class="date">23</h3>
                                <h5>Oct</h5>
                            </div>
                            <h3 class="date">-</h3>
                            <div class="date-month">
                                <h3 class="date">24</h3>
                                <h5>Oct</h5>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="slides fade-slide">
                    <input type="radio" name="timeline" id="final">
                    <label for="final" class="button secondary tl-card">
                        <h4>Final Announcement</h4>
                        <div class="date-month">
                            <h3 class="date">28</h3>
                            <h5>Oct</h5>
                        </div>
                    </label>
                </div>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <fieldset class="announce-content">
                <div class="announce-body">
                    <!-- here -->
                    {{-- <h1 class="bigest">Announcement</h1> --}}
                    <h2 class="smaller">Final Announcement</h2>
    <h3>The following names have been <span class="text-green">chosen</span> to be the <span
            class="text-green">student speakers on TEDxUniversitasAirlangga 2021</span>. We are
        looking forward to collaborating with you and contributing to the success of
        TEDxUniversitasAirlangga 2021.
        <br><br>
        Thank you to all participant! Keep your spirit. <br>
        Your ideas worth to spread
    </h3>
    <div class="the-winner">
        <div class="winner">
            <img src= "{{ asset('assets/img/revamp/speaker-winner/Harits.png') }}" alt="">
            <div class="member-card" style="width: 275px">
                <h4>Harits Aufaa Abyan Fawwas</h4>
                <p>FTMM '20</p>
                <div class="footer" style="flex-direction: column">
                    <hr class="red" style="width: 100%">
                    <p>Net Worth King, as a Student Speakers at the Main Event</p>
                </div>
            </div>
        </div>
        <div class="winner">
            <img src= "{{ asset('assets/img/revamp/speaker-winner/Frida.png') }}" alt="">
            <div class="member-card" style="width: 275px">
                <h4>Frida Febrianti Kirana</h4>
                <p>FKM '19</p>
                <div class="footer" style="flex-direction: column">
                    <hr class="red" style="width: 100%">
                    <p>Networking, as a Student Speakers on IGTV Talks That Matters</p>
                </div>
            </div>
        </div>
    </div>
                </div>
                <div class="announce-footer">
                    <h6>For any questions and pieces of information, kindly contact Hani through Line (id:
                        hanimutiaa)</h6>
                </div>
            </fieldset>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const final =
            `<h2 class="smaller">Final Announcement</h2>
    <h3>The following names have been <span class="text-green">chosen</span> to be the <span
            class="text-green">student speakers on TEDxUniversitasAirlangga 2021</span>. We are
        looking forward to collaborating with you and contributing to the success of
        TEDxUniversitasAirlangga 2021.
        <br><br>
        Thank you to all participant! Keep your spirit. <br>
        Your ideas worth to spread
    </h3>
    <div class="the-winner">
        <!-- ISIAN WINNERNYA BLM TAU APAAN -->
        <div class="winner">
            <img src="` + "{{ asset('assets/img/revamp/speaker-winner/Harits.png') }}" + `" alt="">
            <div class="member-card" style="width: 275px">
                <h4>Harits Aufaa Abyan Fawwas</h4>
                <p>FTMM '20</p>
                <div class="footer" style="flex-direction: column">
                    <hr class="red" style="width: 100%">
                    <p>Net Worth King, as a Student Speakers at the Main Event</p>
                </div>
            </div>
        </div>
        <div class="winner">
            <img src="` + "{{ asset('assets/img/revamp/speaker-winner/Frida.png') }}" + `" alt="">
            <div class="member-card" style="width: 275px">
                <h4>Frida Febrianti Kirana</h4>
                <p>FKM '19</p>
                <div class="footer" style="flex-direction: column">
                    <hr class="red" style="width: 100%">
                    <p>Networking, as a Student Speakers on IGTV Talks That Matters</p>
                </div>
            </div>
        </div>
    </div>`;

        const interview =
            `<h2 class="smaller">Interview</h2>
    <h3>To all applicants who have reached the interview stage, the interview will be conducted
        on <span class="text-green">23-24 October 2021</span>. Make sure you have prepared the
        <span class="text-green">presentation</span> that you will be showing during the
        interview. <br>
        We wish you tons of luck on the interview stage!
    </h3>` +
            `<a href="{{ route('account.dashboard') }}" class="button submit">Dashboard</a>`;


        const announceI =
            `<h2 class="smaller">Next Stage Announcement</h2>
    <h3>Thank you to all applicants who have participated in Call For Student Speakers. For
        further information regarding applicants who passed the qualification can be seen below.
        We wish you best of luck!</h3>
    <a href="#" onclick="window.open('{{ url('assets/pdf/SHORTLISTED CANDIDATES TO THE INTERVIEW PHASE STUDENT SPEAKERS TEDxUniversitasAirlangga 2021.pdf') }}')" class="button submit">List Applicant</a>`;

        const waitDate =
            `<h2 class="smaller">Hello, you look excited 👋 </h2>
    <h3>Unfortunately, you have to wait until the appointed date 😆</h3>`;
    </script>
    <script src="{{ asset('assets/js/revamp/event-cfs.js') }}"></script>
    <script>
        // TGL HARI INI
        function convertTZ(date, tzString) {
            return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {
                timeZone: tzString
            }));
        }

        var time = new Date();
        var now = convertTZ(time, "Asia/Jakarta");
        var date = now.getTime();
        // var dateMonth = (now.getMonth()+1);
        // var dateYear = now.getFullYear();

        if (date >= new Date("2021-10-28").getTime()) {
            $('#final').prop('checked', true)
        } else if (date >= new Date("2021-10-23").getTime()) {
            $('#interview').prop('checked', true)
        } else if (date >= new Date("2021-10-22").getTime()) {
            $('#announceI').prop('checked', true)
            $('.announce-body')[0].innerHTML = announceI;
        } else {
            $('#oprec').prop('checked', true)
            $('.announce-body')[0].innerHTML = oprec;
        }


        // GENERATOR ANNOUNCEMENT
        $("input[type=radio]").change(e => {
            $('.announce-content')[0].style.opacity = 0;

            setTimeout(() => {
                if ($('#oprec')[0].checked) {
                    $('.announce-body')[0].innerHTML = oprec;
                } else if ($('#announceI')[0].checked) {
                    if (date <= new Date("2021-10-22").getTime()) {
                        $('.announce-body')[0].innerHTML = waitDate;
                    } else {
                        $('.announce-body')[0].innerHTML = announceI;
                    }
                } else if ($('#interview')[0].checked) {
                    if (date <= new Date("2021-10-23").getTime()) {
                        $('.announce-body')[0].innerHTML = waitDate;
                    } else {
                        $('.announce-body')[0].innerHTML = interview;
                    }
                } else if ($('#final')[0].checked) {
                    if (date <= new Date("2021-10-28").getTime()) {
                        $('.announce-body')[0].innerHTML = waitDate;
                    } else {
                        $('.announce-body')[0].innerHTML = final;
                    }
                } else {
                    $('.announce-body')[0].innerHTML = soon;
                }
            }, 1000);

            setTimeout(() => {
                $('.announce-content')[0].style.opacity = 1;
            }, 1000);
        })
    </script>
@endsection

{{-- @section('content')
    <h1>INFORMATION HERE</h1>
    @auth
        @if (Auth::user()->speaker)
            <button disabled="disabled">You Already Registered</button>
        @else
            <button class="modal-trigger" id="btn-regist" data-target="#modal-regist">daftar sekarang</button>
        @endif
    @else
        <a href="{{ route('account.regist') }}?page=speaker">regist account</a>
    @endauth

    <div class="modal hide" id="modal-regist">
        <form action="{{ route('account.speaker.register') }}" method="POST">
            @csrf
            <input type="text" placeholder="domisili" name="domisili">
            <input type="text" placeholder="instagram" name="instagram">
            <input type="text" placeholder="link gdrive" name="drive">
            <button type="submit">Submit</button>
            <button type="button" class="btn-cancel">Cancel</button>
        </form>
    </div>

@endsection


@section('js')
    <script>
        const btnRegist = document.querySelector('#btn-regist');
        btnRegist.addEventListener('click', () => {
            let modal = document.querySelector(btnRegist.dataset.target);
            modal.classList.remove('hide');
            console.log(modal);
            modal.querySelector('button.btn-cancel').addEventListener('click', () => {
                modal.classList.add('hide');
            })
        })
    </script>
@endsection --}}
