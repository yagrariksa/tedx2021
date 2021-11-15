@extends('layouts.clientNew')

@section('title', "TEDx UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/landing-page.css') }}">
@endsection

@section('content')
<div class="content">
    <!-- bagian atas -->
    <div class="heading" id="countdownContainer">
        <div class="heading-body">
            <h2 id="countdownText">Countdown</h2>
            <h1 id="timer">00:00:00</h1>
            <!-- <div class="moving-text">
                <div class='visible'>
                    <ul>
                        <li>
                            <h1>Get Ready</h1>
                        </li>
                        <li>
                            <h1>Inspirational</h1>
                        </li>
                        <li>
                            <h1>Impactful</h1>
                        </li>
                        <li>
                            <h1>Your Ideas</h1>
                        </li>
                        <li>
                            <h1>Worth Spreading</h1>
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="wrapper" id="button">
                <h2 class="smaller" id="click">Click to Start!</h2>
                <svg class="blob" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(300,300)">
                        <path
                            d="M120,-157.6C152.7,-141.5,174.3,-102.6,194.8,-58.8C215.3,-14.9,234.6,33.8,228.4,80.8C222.2,127.8,190.4,173.1,148.1,184C105.8,195,52.9,171.5,-2.4,174.8C-57.8,178.2,-115.6,208.4,-137.5,190.9C-159.3,173.3,-145.3,108,-153,56.3C-160.7,4.6,-190.2,-33.4,-178.3,-54.2C-166.4,-75.1,-113.2,-78.8,-76.6,-93.6C-40,-108.3,-20,-134.2,11.9,-150.5C43.7,-166.8,87.4,-173.6,120,-157.6Z"
                            fill="#24B9BA3B" />
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <!-- Ripple Effect -- Cube -->
    <div class="ripple-cube">
        <img src="{{ asset('assets/img/revamp/cube.png') }}" alt="" class="cube">
        <h2 class="smaller">Ripple Effect</h2>
        <p class="bigger">Explore more about our grand theme in this year Ted talk! Get yourself a ticket and
            look out for our greatest event yet!</p>
        <a href="registration.html" class="button submit">Join Now</a>
    </div>

    <!-- Description -- about TED, TEDx, TEDxUA -->
    <div class="about">
        <div class="theme">
            <h1>Ripple Effect</h1>
        </div>
        <div class="desc">
            <p class="bigger">An impact still can be made regardless of how people perceive the changes they
                have created and people do not have to achieve big things to be impactful. Each impact of the
                deeds will eventually spread and influence society to a certain extent that people have never
                imagined before. This inappreciable motion that generates a disparity is called the ripple
                effect.</p>
            <hr>
            <a href="{{ route('mainboard') }}" class="button secondary">About Us</a>
        </div>
    </div>

    <!-- FRAME TEASER -->
    <div class="teaser">
        <iframe src="https://www.youtube.com/embed/o_rIDOgnE3U?controls=0" height="100%" width="100%"></iframe>
    </div>

    <!-- Event Speaker -->
    <div class="speakers">
        <h1>Event Speakers</h1>
        <div class="packages">
            <button role="button" data-bs-toggle="modal" data-bs-target="#speaker1" class="box-email">
                <!-- <h2 class="link-email">The Initiator</h2> -->
                <div class="email-envelope">
                    <div></div>
                    <h3>The Initiator</h3>
                </div>
            </button>
            <div class="modal fade" id="speaker1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/revamp/speaker1.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>JUDUL</h2>
                                <h3 class="subtitle">Nama | Pekerjaan |
                                    <a href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer">@ig_nya</a>
                                </h3>
                                <h3>An impact still can be made regardless of how people perceive the changes
                                    they have created and people do not have to achieve big things to be
                                    impactful. Each impact of the deeds will eventually spread and influence
                                    society to a certain extent that people have never imagined before. This
                                    inappreciable motion that generates a disparity is called the ripple effect.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button role="button" data-bs-toggle="modal" data-bs-target="#speaker2" class="box-email">
                <!-- <h2 class="link-email">The Choosen One</h2> -->
                <div class="email-envelope">
                    <div></div>
                    <h3>The Choosen One</h3>
                </div>
            </button>
            <div class="modal fade" id="speaker2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/revamp/speaker1.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>JUDUL</h2>
                                <h3 class="subtitle">Nama | Pekerjaan |
                                    <a href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer">@ig_nya</a>
                                </h3>
                                <h3>An impact still can be made regardless of how people perceive the changes
                                    they have created and people do not have to achieve big things to be
                                    impactful. Each impact of the deeds will eventually spread and influence
                                    society to a certain extent that people have never imagined before. This
                                    inappreciable motion that generates a disparity is called the ripple effect.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button role="button" data-bs-toggle="modal" data-bs-target="#speaker3" class="box-email">
                <!-- <h2 class="link-email">The Minister</h2> -->
                <div class="email-envelope">
                    <div></div>
                    <h3>The Minister</h3>
                </div>
            </button>
            <div class="modal fade" id="speaker3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/revamp/speaker1.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>JUDUL</h2>
                                <h3 class="subtitle">Nama | Pekerjaan |
                                    <a href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer">@ig_nya</a>
                                </h3>
                                <h3>An impact still can be made regardless of how people perceive the changes
                                    they have created and people do not have to achieve big things to be
                                    impactful. Each impact of the deeds will eventually spread and influence
                                    society to a certain extent that people have never imagined before. This
                                    inappreciable motion that generates a disparity is called the ripple effect.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button role="button" data-bs-toggle="modal" data-bs-target="#speaker4" class="box-email">
                <!-- <h2 class="link-email">The Princess</h2> -->
                <div class="email-envelope">
                    <div></div>
                    <h3>The Princess</h3>
                </div>
            </button>
            <div class="modal fade" id="speaker4" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/revamp/speaker1.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>JUDUL</h2>
                                <h3 class="subtitle">Nama | Pekerjaan |
                                    <a href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer">@ig_nya</a>
                                </h3>
                                <h3>An impact still can be made regardless of how people perceive the changes
                                    they have created and people do not have to achieve big things to be
                                    impactful. Each impact of the deeds will eventually spread and influence
                                    society to a certain extent that people have never imagined before. This
                                    inappreciable motion that generates a disparity is called the ripple effect.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button role="button" data-bs-toggle="modal" data-bs-target="#speaker5" class="box-email">
                <!-- <h2 class="link-email">The Founder</h2> -->
                <div class="email-envelope">
                    <div></div>
                    <h3>The Founder</h3>
                </div>
            </button>
            <div class="modal fade" id="speaker5" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/revamp/speaker1.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>JUDUL</h2>
                                <h3 class="subtitle">Nama | Pekerjaan |
                                    <a href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer">@ig_nya</a>
                                </h3>
                                <h3>An impact still can be made regardless of how people perceive the changes
                                    they have created and people do not have to achieve big things to be
                                    impactful. Each impact of the deeds will eventually spread and influence
                                    society to a certain extent that people have never imagined before. This
                                    inappreciable motion that generates a disparity is called the ripple effect.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Merchandise -->
    <div class="merchandise">
        <h1>Merchandise</h1>
        <a href="https://shopee.co.id/tedxunair" class="main merch"><img src="{{ asset('assets/img/revamp/merch/merch1.png') }}" alt=""></a>
        <div class="two-merchs">
            <a href="https://shopee.co.id/tedxunair?originalCategoryId=101379&page=0" class="second merch"><img
                    src="{{ asset('assets/img/revamp/merch/merch2.png') }}" alt=""></a>
            <a href="https://shopee.co.id/tedxunair?originalCategoryId=101379&page=0" class="second merch"><img
                    src="{{ asset('assets/img/revamp/merch/merch3.png') }}" alt=""></a>
        </div>
    </div>

    <!-- Past Eventsssss -->
    <div class="events">
        <h1>Past Events</h1>
        <div class="event-list">
            <div class="event">
                <h2>Call for Essay</h2>
                <a href="event-cfe.html" class="ic-read-more">
                    <img src="{{ asset('assets/img/revamp/ic-cfe.png') }}" alt="">
                    <span></span>
                    <p>Read More</p>
                </a>
            </div>
            <div class="event">
                <h2>Call for Student Speakers</h2>
                <a href="event-cfs.html" class="ic-read-more">
                    <img src="{{ asset('assets/img/revamp/ic-cfs.png') }}" alt="">
                    <span></span>
                    <p>Read More</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Sponsor -->
    <div class="sponsor">
        <h1>Sponsored by</h1>
        <a href="{{ route('sponsors') }}" class="blocks">
            <h2 class="smaller">CHECK OUR SPONSOR</h2>
            <h1 style="text-decoration: underline;">HERE</h1>
        </a>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"
integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/revamp/landing-page.js') }}"></script>
@endsection
