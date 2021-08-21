@extends('layouts.client')

@section('title')
    ESSAY
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/explain-cfe.css') }}" />
@endsection

@section('content')
        <!-- Konten -->
        <img src="{{ asset('assets/img/cfe/white-logo.png') }}" class="tedx" />
        <div class="grid">
            <!-- Description CFE -->
            <div class="card-left">
                <div>
                    <div class="header mb-2">
                        <h2 class="text-green">Call for Essay</h2>
                        <h4 class="text-red">Registration Fee : 50K</h4>
                    </div>
                    <img class="img-sm" src="{{ asset('assets/img/cfe/icon-cfe.svg') }}" />
                    <p>
                        Call for essay adalah sebuah event yang diselenggarakan untuk mencari gagasan/ide kreatif yang
                        dituangkan dalam bentuk tulisan. Pada tahun ini, Call for Essay TEDx Universitas Airlangga mengangkat
                        tema yakni <span class="text-green">Ripple</span> <span class="text-red">Effect</span>.
                    </p>
                    <div class="mid">
                        <img class="img-lg" src="{{ asset('assets/img/cfe/icon-cfe.svg') }}" />
                        <div class="left">
                            <div class="list">
                                <p>Syarat dan ketentuan:</p>
                                <ol>
                                    <li>
                                        Peserta dibuka untuk masyarakat umum berusia 17 - 25 tahun.
                                    </li>
                                    <li>Lomba bersifat individu</li>
                                    <li>
                                        Karya essay dapat dibuat menggunakan Bahasa Inggris atau
                                        Bahasa Indonesia.
                                    </li>
                                    <li>Tidak ada ketentuan khusus untuk penulisan essay.</li>
                                    <li>1 peserta hanya dapat mengirimkan 1 essay</li>
                                </ol>
                            </div>
                            <p>
                                Untuk informasi lebih lanjut, dapat diakses melewati booklet
                                yang sudah disediakan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cfe-btn">
                    <button id="booklet">Booklet</button>
                    <a class="button btn-green" href="{{ route('essay.form') }}" id="regist">Register</a>
                </div>
            </div>

            <!-- How to Register & Timeline -->
            <div class="card-right">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <h2 class="text-green mb-2">How to Register</h2>
                        <div class="dash mb-2"></div>
                        <p>Click</p>
                        <img src="{{ asset('assets/img/cfe/button.svg') }}" alt="" />
                        <img src="{{ asset('assets/img/cfe/bottom-arrow.svg') }}" class="arrow" />
                        <p>Fill all the form and submit your document link</p>
                        <img src="{{ asset('assets/img/cfe/bottom-arrow.svg') }}" class="arrow" />
                        <p>Complete payment and upload the transfer slip</p>
                        <img src="{{ asset('assets/img/cfe/bottom-arrow.svg') }}" class="arrow" />
                        <p>
                            Wait for the payment validation<br />
                            (you can check your status on Check Status page)
                        </p>
                        <img src="{{ asset('assets/img/cfe/bottom-arrow.svg') }}" class="arrow" />
                        <p>Wait for the announcement of your essay</p>
                    </div>
                    <div class="mySlides fade">
                        <h2 class="text-green mb-2">Timeline</h2>
                        <div class="dash"></div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="agenda right">
                                <div class="circle"></div>
                                <div class="txt">
                                    <p class="title">Open Registration</p>
                                    <p>23 August - 11 September</p>
                                </div>
                            </div>
                            <div class="agenda left now">
                                <div class="circle"></div>
                                <div class="txt">
                                    <p class="title">Close Registration</p>
                                    <p>16 September</p>
                                </div>
                            </div>
                            <div class="agenda right present">
                                <div class="circle"></div>
                                <div class="txt">
                                    <p class="title">Winner Announcement</p>
                                    <p>23 September</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider mt-2">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>

            <!-- Writing Format -->
            <div class="writing">
                <h2 class="text-green">Writing Format</h2>
                <div class="content-writing">
                    <div class="box">
                        <img src="{{ asset('assets/img/cfe/paper-size.svg') }}" />
                        <h4 class="text-green">Paper Size</h4>
                        <p>
                            A4/Justify<br>
                            Top, left = 4 cm<br>
                            Bot, right = 3 cm
                        </p>
                    </div>
                    <div class="box bigger">
                        <img src="{{ asset('assets/img/cfe/word-rules.svg') }}" />
                        <h4 class="text-green">Word Rules</h4>
                        <p>
                            Times New Roman (12pt)<br>
                            500-1000 words<br>
                            English and bahasa are accepted<br>
                            APA (American Pshycological Association)
                        </p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/cfe/file-format.svg') }}" />
                        <h4 class="text-green">File Format</h4>
                        <p>
                            Name_Institute_Title<br>
                            PDF and Docx (2 files)
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <!-- Image -->
    <img src="{{ asset('assets/img/cfe/cfe-green.svg') }}" class="bg green" />
    <img src="{{ asset('assets/img/cfe/cfe-red.svg') }}" class="bg red" />
    <img src="{{ asset('assets/img/cfe/cfe-red1-sm.svg') }}" class="bg-sm red1">
    <img src="{{ asset('assets/img/cfe/cfe-red2-sm.svg') }}" class="bg-sm red2" />
    <img src="{{ asset('assets/img/cfe/cfe-green1-sm.svg') }}" class="bg-sm green1" />
    <img src="{{ asset('assets/img/cfe/cfe-green2-sm.svg') }}" class="bg-sm green2" />
@endsection

@section('js')
<script src="{{ asset('assets/js/explain-cfe.js') }}"></script>
@endsection
