@extends('layouts.clientNew')

@section('title', 'TEDx UNAIR - Our Team')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/mainboard.css') }}">
@endsection

@section('js')
<script src="{{ asset('assets/js/revamp/mainboard.js') }}"></script>
@endsection

@section('content')
<div class="about-us">
    <h1>About Us</h1>
    <div class="ripple-effect">
        <h2>Ripple Effect</h2>
        <p>An impact still can be made regardless of how people perceive the changes they have created. Each
            impact of the deeds will eventually spread and. An impact still can be made regardless of how
            people perceive the changes they have created. Each impact of the deeds will eventually spread
            and.
        </p>
    </div>
</div>



<!-- License team -->
<fieldset class="line">
    <div class="header">
        {{-- <img src="{{ asset('assets/img/revamp/arrow-left.svg') }}" alt="" class="arrow"> --}}
        <h2>License Team</h2>
        <img src="{{ asset('assets/img/revamp/arrow-right.svg') }}" alt="" class="arrow next">
    </div>
    <div class="member1">
        <img src="{{ asset('assets/img/revamp/mainboard/marsa.png') }}" alt="">
        <div class="member-card">
            <h4>Marsa</h4>
            <p>Licence | FEB 19</p>
            <div class="footer">
                <a href="https://www.instagram.com/marsaandt" target="_blank" rel="noopener noreferrer"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="red">
                <div class="back-green"></div>
            </div>
        </div>
    </div>
    <p>We stand for rules, processes, and necessary things to host this event. We provide, review, and
        compile every policy guidance as well as recommendations and participate in making strategies.</p>
    <div class="member2-inarow">
        <div class="member2">
            <div class="member-card">
                <h4>Vira</h4>
                <p>Steering Committee | FEB 18</p>
                <div class="footer">
                    <a href="https://www.instagram.com/savirasantoso" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <img src="{{ asset('assets/img/revamp/mainboard/vira.png') }}" alt="">
            <div class="back-green"></div>
        </div>
        <div class="member2">
            <img src="{{ asset('assets/img/revamp/mainboard/faiq.png') }}" alt="">
            <div class="member-card">
                <h4>Faiq</h4>
                <p>Steering Committee | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/mnurfaiq" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a href="https://twitter.com/mnurfaiq13" target="_blank" rel="noopener noreferrer"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <div class="back-green"></div>
        </div>
    </div>
    <div class="member2-inarow">
        <div class="member2">
            <div class="member-card">
                <h4>Sarah</h4>
                <p>Steering Committee | FEB 18</p>
                <div class="footer">
                    <a href="https://www.instagram.com/savirasantoso" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <img src="{{ asset('assets/img/revamp/mainboard/sarah.png') }}" alt="">
            <div class="back-green"></div>
        </div>
        <div class="member2">
            <img src="{{ asset('assets/img/revamp/mainboard/adhinda.png') }}" alt="">
            <div class="member-card">
                <h4>Adhinda</h4>
                <p>Steering Committee | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/mnurfaiq" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a href="https://twitter.com/mnurfaiq13" target="_blank" rel="noopener noreferrer"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <div class="back-green"></div>
        </div>
    </div>
    <div class="member3" style="visibility: hidden;">
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
        <div class="member-card">
            <h4>Name</h4>
            <p>Volunteer | F 19/20</p>
            <div class="footer">
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="green">
            </div>
        </div>
    </div>
</fieldset>

<!-- Core team -->
<fieldset class="line before-fcs">
    <div class="header">
        <img src="{{ asset('assets/img/revamp/arrow-left.svg') }}" alt="" class="arrow back">
        <h2>Core Team</h2>
        <img src="{{ asset('assets/img/revamp/arrow-right.svg') }}" alt="" class="arrow next">
    </div>
    <div class="member2-inarow">
        <div class="member1">
            <img src="{{ asset('assets/img/revamp/mainboard/eva.png') }}" alt="">
            <div class="member-card">
                <h4>Eva</h4>
                <p>Executive Producer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/evacipta" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                    <div class="back-green"></div>
                </div>
            </div>
        </div>
        <div class="member1">
            <img src="{{ asset('assets/img/revamp/mainboard/diko.png') }}" alt="">
            <div class="member-card">
                <h4>Diko</h4>
                <p>Co-Executive Producer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/andikakaya" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a href="https://twitter.com/andikakaya" target="_blank" rel="noopener noreferrer"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                    <div class="back-green"></div>
                </div>
            </div>
        </div>
    </div>
    <p>We stand for rules, processes, and necessary things to host this event. We provide, review, and
        compile every policy guidance as well as recommendations and participate in making strategies.</p>
    <div class="member2-inarow">
        <div class="member2">
            <div class="member-card">
                <h4>Pipil</h4>
                <p>Treasure | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/fildzasalsabil" target="_blank"
                        rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <img src="{{ asset('assets/img/revamp/mainboard/pipil.png') }}" alt="">
            <div class="back-green"></div>
        </div>
        <div class="member2">
            <img src="{{ asset('assets/img/revamp/mainboard/debby.png') }}" alt="">
            <div class="member-card">
                <h4>Debby</h4>
                <p>Secretary | FEB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                            src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img
                            src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                    <div></div>
                    <hr class="red">
                </div>
            </div>
            <div class="back-green"></div>
        </div>
    </div>
</fieldset>

<!-- Project Line 1 -->
<fieldset class="line fcs-height">
    <div class="header">
        <img src="{{ asset('assets/img/revamp/arrow-left.svg') }}" alt="" class="arrow back">
        <h2>Project-Line 1</h2>
        <img src="{{ asset('assets/img/revamp/arrow-right.svg') }}" alt="" class="arrow next">
    </div>
    <div class="member1">
        <img src="{{ asset('assets/img/revamp/mainboard/pingkan.png') }}" alt="">
        <div class="member-card">
            <h4>Pingkan</h4>
            <p>Project Line 1 | FEB 19</p>
            <div class="footer">
                <a href="https://www.instagram.com/raquelpingkan" target="_blank"
                    rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: 0.2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="red">
                <div class="back-green"></div>
            </div>
        </div>
    </div>
    <p>We’re tasked to organize and supervise several series of events. We have several divisions, managing
        different type of jobs, which are Event, Curation, and Logistics Division.</p>
    <div class="division-option">
        <input type="radio" class="division" name="line1" id="event-div" checked>
        <label for="event-div" class="button secondary">Event</label>
        <input type="radio" class="division" name="line1" id="lna">
        <label for="lna" class="button secondary">Logistic and Accomodation</label>
        <input type="radio" class="division" name="line1" id="curation">
        <label for="curation" class="button secondary">Curation</label>
    </div>

    <div class="member-container">
        <fieldset class="member">
            <div class="member2-inarow">
                <div class="member2">
                    <div class="member-card">
                        <h4>Rehan</h4>
                        <p>Manager | FEB 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/rehanmahdii" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a href="https://twitter.com/remaja20taon" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}"
                                    alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/revamp/mainboard/rehan.png') }}" alt="">
                    <div class="back-green"></div>
                </div>
                <div class="member2">
                    <img src="{{ asset('assets/img/revamp/mainboard/sekar.png') }}" alt="">
                    <div class="member-card">
                        <h4>Sekar</h4>
                        <p>Co-Manager | FISIP 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/adskr" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a href="https://twitter.com/addindasekarr" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}"
                                    alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <div class="back-green"></div>
                </div>
            </div>
            <div class="member3">
                <div class="member-card">
                    <h4>Alvin</h4>
                    <p>Volunteer | FKM 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/captain2maxx" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Icha</h4>
                    <p>Volunteer | FISIP 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/ichariesaa_" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Hani</h4>
                    <p>Volunteer | FKM 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/hani_mutia" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Audrey</h4>
                    <p>Volunteer | FK 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/florencia.theno" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Ames</h4>
                    <p>Volunteer | FEB 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/amaliamalindaa " target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/amaliamalinda" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Gaby</h4>
                    <p>Volunteer | FKM 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/gabrielleugene" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/gabrielleugene" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Ulfa</h4>
                    <p>Volunteer | FK 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/zulfazakya" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Cigi</h4>
                    <p>Volunteer | FKM 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/cigicig" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Jams</h4>
                    <p>Volunteer | FKM 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/jamsazzara" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/jamsazzara" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</fieldset>

<!-- Project Line 2 -->
<fieldset class="line">
    <div class="header">
        <img src="{{ asset('assets/img/revamp/arrow-left.svg') }}" alt="" class="arrow back">
        <h2>Project-Line 2</h2>
        <img src="{{ asset('assets/img/revamp/arrow-right.svg') }}" alt="" class="arrow next">
    </div>
    <div class="member1">
        <img src="{{ asset('assets/img/revamp/mainboard/dhani.png') }}" alt="">
        <div class="member-card">
            <h4>Dhani</h4>
            <p>Project Line 2 | FEB 19</p>
            <div class="footer">
                <a href="https://www.instagram.com/dhanibdynto" target="_blank"
                    rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="red">
                <div class="back-green"></div>
            </div>
        </div>
    </div>
    <p>We coordinate sponsorship funding, ticket sales, and merchandise sales. Moreover, our team is divided
        into Marketing & Ticketing, Merchandise, and Sponsorship & Funding.</p>
    <div class="division-option">
        <input type="radio" class="division" name="line2" id="sponsor" checked>
        <label for="sponsor" class="button secondary">Sponsorship and Fund</label>
        <input type="radio" class="division" name="line2" id="marketing">
        <label for="marketing" class="button secondary">Marketing and Ticketing</label>
        <input type="radio" class="division" name="line2" id="merchandise">
        <label for="merchandise" class="button secondary">Merchandise</label>
    </div>

    <div class="member-container">
        <fieldset class="member">
            <div class="member2-inarow">
                <div class="member2">
                    <div class="member-card">
                        <h4>Tito</h4>
                        <p>Manager | FEB 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/titosiahaan_" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                    src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/revamp/mainboard/tito.png') }}" alt="">
                    <div class="back-green"></div>
                </div>
                <div class="member2">
                    <img src="{{ asset('assets/img/revamp/mainboard/ajeng.png') }}" alt="">
                    <div class="member-card">
                        <h4>Ajeng</h4>
                        <p>Co-Manager | FEB 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/Ajengnindia" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a href="https://twitter.com/Ajengnindiaa" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}"
                                    alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <div class="back-green"></div>
                </div>
            </div>
            <div class="member3">
                <div class="member-card">
                    <h4>Kania</h4>
                    <p>Volunteer | FPsi 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/Kaniaizdi" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Diffasa</h4>
                    <p>Volunteer | FISIP 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/diffashaa" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/diffashaa" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Dhena</h4>
                    <p>Volunteer | FPK 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/dhenacellia" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Aurel</h4>
                    <p>Volunteer | FH 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/arel_mahardika" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Naja</h4>
                    <p>Volunteer | FKM 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/najandhf" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/nadhifnaja" target="_blank" rel="noopener noreferrer"
                            style="opacity: .2;"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Nuzula</h4>
                    <p>Volunteer | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/nuzulashaa" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Gaby</h4>
                    <p>Volunteer | FKM 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/gabrielaandhien" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/gabrielaandhien" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Tesya</h4>
                    <p>Volunteer | FKH 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/tesyasrgh" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</fieldset>

<!-- Project Line 3 -->
<fieldset class="line">
    <div class="header">
        <img src="{{ asset('assets/img/revamp/arrow-left.svg') }}" alt="" class="arrow back">
        <h2>Project-Line 3</h2>
        {{-- <img src="{{ asset('assets/img/revamp/arrow-right.svg') }}" alt="" class="arrow"> --}}
    </div>
    <div class="member1">
        <img src="{{ asset('assets/img/revamp/mainboard/ferin.png') }}" alt="">
        <div class="member-card">
            <h4>Ferin</h4>
            <p>Project Line 3 | FEB 19</p>
            <div class="footer">
                <a href="https://www.instagram.com/saferiiinh" target="_blank"
                    rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                        src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                <div></div>
                <hr class="red">
                <div class="back-green"></div>
            </div>
        </div>
    </div>
    <p>Our job is to facilitate the entire series of events, especially taking part in various content
        journeys and needs. We branch out into multiple divisions with various jobs which divided into
        Creative Design, Event Videography, Website Developer, and Social Media.</p>
    <div class="division-option">
        <input type="radio" class="division" name="line3" id="design" checked>
        <label for="design" class="button secondary">Creative Design</label>
        <input type="radio" class="division" name="line3" id="video">
        <label for="video" class="button secondary">Event Videography</label>
        <input type="radio" class="division" name="line3" id="sosmed">
        <label for="sosmed" class="button secondary">Social Media</label>
        <input type="radio" class="division" name="line3" id="webdev">
        <label for="webdev" class="button secondary">Web Developer</label>
    </div>

    <div class="member-container">
        <fieldset class="member">
            <div class="member2-inarow">
                <div class="member2">
                    <div class="member-card">
                        <h4>Naura</h4>
                        <p>Manager | FISIP 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/arnrbl" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a href="https://twitter.com/arnrbl" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}"
                                    alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/revamp/mainboard/naura.png') }}" alt="">
                    <div class="back-green"></div>
                </div>
                <div class="member2">
                    <img src="{{ asset('assets/img/revamp/mainboard/nadia.png') }}" alt="">
                    <div class="member-card">
                        <h4>Nadia</h4>
                        <p>Co-Manager | FEB 19</p>
                        <div class="footer">
                            <a href="https://www.instagram.com/nadiaaarg" target="_blank"
                                rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}"
                                    alt=""></a>
                            <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                    src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                            <div></div>
                            <hr class="red">
                        </div>
                    </div>
                    <div class="back-green"></div>
                </div>
            </div>
            <div class="member3">
                <div class="member-card">
                    <h4>Nor</h4>
                    <p>Volunteer | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/naurisrofaudin" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/shalatshubuh" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Andr</h4>
                    <p>Volunteer | FKM 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/deandranaya" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/deandranaya_" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Anya</h4>
                    <p>Volunteer | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/anyamaulidyna" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Umi</h4>
                    <p>Volunteer | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/belaxx__" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a href="https://twitter.com/nabilahbel_" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
                <div class="member-card">
                    <h4>Arimbi</h4>
                    <p>Volunteer | FISIP 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/arimbisp" target="_blank"
                            rel="noopener noreferrer"><img src="{{ asset('assets/img/revamp/ic-insta-black.svg') }}" alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="{{ asset('assets/img/revamp/ic-twitter-black.svg') }}" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</fieldset>
@endsection

@section('script')
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
@include('layouts.mainboardjs')
@endsection
