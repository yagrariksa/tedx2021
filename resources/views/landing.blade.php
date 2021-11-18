@extends('layouts.clientNew')

@section('title', "TEDx UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/landing-page.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/revamp/3dbox.css') }}">
@endsection

@section('content')
<script>
    // document.getElementById("menuItems").children[0].children.style.cursor = "default";
    var nodes = document.getElementById('menuItems').getElementsByTagName("a");
    for(var i=0; i<nodes.length; i++) {
        nodes[i].style.pointerEvents = "none";
    }
    document.getElementById("menuItems").style.opacity = "0";
    var divsToHide = document.getElementsByClassName("mobile_items"); //divsToHide is an array
    for(var i = 0; i < divsToHide.length; i++){
        divsToHide[i].style.display = "none";
    }
</script>
<div class="content">
    <!-- bagian atas -->
    <div class="heading" id="home">
        <div class="heading-body">
            <h2 id="countdownText">Countdown</h2>
            <h1 id="timer">00:00:00</h1>
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
        <div id="scene">
            <div class="boxBase">
              <div class="top" style="background-image: url({{ asset('assets/img/revamp/cube/top.png') }})"></div>
              <div class="bottom" style="background-image: url({{ asset('assets/img/revamp/cube/bottom.png') }})"></div>
              <div class="front" style="background-image: url({{ asset('assets/img/revamp/cube/front.png') }})"></div>
              <div class="back" style="background-image: url({{ asset('assets/img/revamp/cube/back.png') }})"></div>
              <div class="left" style="background-image: url({{ asset('assets/img/revamp/cube/left.png') }})"></div>
              <div class="right" style="background-image: url({{ asset('assets/img/revamp/cube/right.png') }})"></div>
            </div>
          </div>
        {{-- <img src="{{ asset('assets/img/revamp/cube.png') }}" alt="" class="cube"> --}}
        <h2 class="smaller">Ripple Effect</h2>
        <p class="bigger">Explore more about our grand theme in this year Ted talk! Get yourself a ticket and
            look out for our greatest event yet!</p>
            @auth
                <a href="{{route('stream')}}" class="button submit">Watch Now</a>
            @else
                <a href="{{route('account.regist')}}" class="button submit">Register Now</a>
            @endauth
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
    {{-- <div class="teaser">
        <iframe src="https://www.youtube.com/embed/o_rIDOgnE3U?controls=0" height="100%" width="100%"></iframe>
    </div> --}}

    <!-- Event Speaker -->
    <div class="speakers" id="event" style="padding-top: 6rem; margin-top:0">
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
                            <img src="{{ asset('assets/img/revamp/event-speaker/shihab.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>A Bridge From Misery to Hope</h2>
                                <h3 class="subtitle">Najelaa Shihab | Initiator “Semua Murid Semua Guru” |
                                    <a href="https://www.instagram.com/najelaashihab" target="_blank"
                                        rel="noopener noreferrer">@najelaashihab</a>
                                </h3>
                                <h3>Najelaa Shihab, an experienced educator, speaks about the importance of
                                    reading for learning and transforming the whole learning process through
                                    various pieces of information and data that can be implemented in daily
                                    life.
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
                            <img src="{{ asset('assets/img/revamp/event-speaker/harits.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>The Choosen One</h2>
                                <h3 class="subtitle">Harits Aufaa | TEDxUniversitasAirlangga Student Speaker |
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
                            <img src="{{ asset('assets/img/revamp/event-speaker/sandiaga.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>Inclusivity for Those Who in Need</h2>
                                <h3 class="subtitle">Sandiaga Uno | Minister of Tourism and Creative Economy of
                                    The Republic of Indonesia |
                                    <a href="https://www.instagram.com/sandiuno" target="_blank"
                                        rel="noopener noreferrer">@sandiuno</a>
                                </h3>
                                <h3>This kind of case should be viewed with the opportunity to see that it is a
                                    very good time to expand an inclusive entrepreneurship that exhibits the
                                    potential that Indonesia has. From Mr. Sandi's experience on becoming an
                                    entrepreneur, there’s gotta be principles that lie inside every entrepreneur
                                    which are Work hard. Work smart, Work thoroughly, and Work sincerely.
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
                            <img src="{{ asset('assets/img/revamp/event-speaker/ayu.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>Balancing the Body, Mind, and Soul to Improve Mental Health and Lifestyle
                                </h2>
                                <h3 class="subtitle">Ayu Maulida | Puteri Indonesia 2020 |
                                    <a href="https://www.instagram.com/ayumaulida97" target="_blank"
                                        rel="noopener noreferrer">@ayumaulida97</a>
                                </h3>
                                <h3>In her talk, she will discuss the importance of having good mental health
                                    and lifestyle, how to practice healthy habits to improve our mental health
                                    and lifestyle, how to overcome certain obstacles, as well as the ripple
                                    effect in helping others.
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
                            <img src="{{ asset('assets/img/revamp/event-speaker/ifandi.png') }}" alt="">
                            <div class="speaker-desc">
                                <h2>Networking and success</h2>
                                <h3 class="subtitle">Ifandi Khainur Rahim | Founder of Satu Persen |
                                    <a href="https://www.instagram.com/ifandievan" target="_blank"
                                        rel="noopener noreferrer">@ifandievan</a>
                                </h3>
                                <h3>Evan has had difficult times in the past but he can still achieve many
                                    things, one of the factors is because of networking. After studying
                                    psychology, Evan's self-awareness increased and realized that he was
                                    experiencing a condition called avoidance attachment.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Merchandise -->
    <div class="merchandise" id="merch" style="padding-top: 8rem; margin-top:0">
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
    <div class="sponsor" id="sponsors">
        <h1>Sponsored by</h1>
        <div class="banner">
            <!-- <div class="two-inarow">
                <div class="logo left"><img src="assets/img/cube.png" alt=""></div>
                <div class="logo right"><img src="assets/img/merch1.png" alt=""></div>
                <div class="logo right"><img src="assets/img/ripple-desc.jpg" alt=""></div>
                <div class="logo right"><img src="assets/img/ted-talk-pool.png" alt=""></div>
            </div> -->
            <div class="logo left"><img src="{{ asset('assets/img/revamp/Invitech.png') }}" alt=""></div>
        </div>
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
