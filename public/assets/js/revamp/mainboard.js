// MOVING LINE
let nextHeight;
; (function ($) {
    "use strict";

    function verificationForm() {
        let current_fs, next_fs, previous_fs; //fieldsets
        let left, opacity, scale; //fieldset properties which we will animate
        let animating; //flag to prevent quick multi-click glitches

        $(".next").click(function (e) {
            e.preventDefault();

            if (animating) return false;
            animating = true;

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute',
                        'align-self': 'center',
                        'width': '100%'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity,
                        'display': 'flex'
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;

                    if (current_fs[0].classList[1] == 'before-fcs') {
                        nextHeight = next_fs.parent()[0].offsetHeight;
                    }
                    $('.content').css({
                        'height': nextHeight
                    })
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".back").click(function (e) {
            e.preventDefault();
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent().parent();
            previous_fs = $(this).parent().parent().prev();

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity,
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;

                    if (current_fs[0].classList[1] == 'before-fcs') {
                        nextHeight = previous_fs[0].offsetHeight;
                    }
                    $('.content').css({
                        'height': nextHeight
                    })
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });
    };

    //* Add Phone no select
    function phoneNoselect() {
        if ($('#msform').length) {
            $("#phone").intlTelInput();
            $("#phone").intlTelInput("setNumber", "+880");
        };
    };
    //* Select js
    function nice_Select() {
        if ($('.product_select').length) {
            $('select').niceSelect();
        };
    };
    /*Function Calls*/
    verificationForm();
    phoneNoselect();
    nice_Select();
})(jQuery);

// MOVING DIVISION
const lna =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>LOM NGISI</h4>
                    <p>Manager | FST 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/ubin.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/ubin.png" alt="">
                <div class="member-card">
                    <h4>LOM NGISI</h4>
                    <p>Co-Manager | FST 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
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
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Varel</h4>
                <p>Volunteer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/dionisiusvarell" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Hanif</h4>
                <p>Volunteer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/haniffirza19" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/jamezzrodri" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Sabrina</h4>
                <p>Volunteer | FV 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/sabrinafitrip" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Bbicina</h4>
                <p>Volunteer | FK 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/drick.s" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Davita</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/davitaf" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/dapitut" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Othman</h4>
                <p>Volunteer | FTMM 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/othmanlutfii" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/othmanlutfii" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Rio</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/rhaimyo" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/rioohosana" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const eventDiv =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Rehan</h4>
                    <p>Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/rehanmahdii" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/remaja20taon" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
                                alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/rehan.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/sekar.png" alt="">
                <div class="member-card">
                    <h4>Sekar</h4>
                    <p>Co-Manager | FISIP 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/adskr" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/addindasekarr" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
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
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Icha</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/ichariesaa_" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Hani</h4>
                <p>Volunteer | FKM 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/hani_mutia" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Audrey</h4>
                <p>Volunteer | FK 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/florencia.theno" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Ames</h4>
                <p>Volunteer | FEB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/amaliamalindaa " target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/amaliamalinda" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Gaby</h4>
                <p>Volunteer | FKM 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/gabrielleugene" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/gabrielleugene" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Ulfa</h4>
                <p>Volunteer | FK 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/zulfazakya" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Cigi</h4>
                <p>Volunteer | FKM 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/cigicig" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Jams</h4>
                <p>Volunteer | FKM 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/jamsazzara" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/jamsazzara" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const curation =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Ervitha</h4>
                    <p>Manager | FISIP 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/rvth.hssntr" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/ervitha.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/ubin.png" alt="">
                <div class="member-card">
                    <h4>LOM NGISI</h4>
                    <p>Co-Manager | FST 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Tita</h4>
                <p>Volunteer | FKM 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/@tsabitahsty" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Nina</h4>
                <p>Volunteer | FEB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/ninaaadr" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/aaddriani" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const sponsor =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Tito</h4>
                    <p>Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/titosiahaan_" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/tito.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/ajeng.png" alt="">
                <div class="member-card">
                    <h4>Ajeng</h4>
                    <p>Co-Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/Ajengnindia" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/Ajengnindiaa" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
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
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Diffasa</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/diffashaa" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/diffashaa" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Dhena</h4>
                <p>Volunteer | FPK 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/dhenacellia" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Aurel</h4>
                <p>Volunteer | FH 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/arel_mahardika" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Naja</h4>
                <p>Volunteer | FKM 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/najandhf" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/nadhifnaja" target="_blank" rel="noopener noreferrer"
                        style="opacity: .2;"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Nuzula</h4>
                <p>Volunteer | FIB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/nuzulashaa" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Gaby</h4>
                <p>Volunteer | FKM 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/gabrielaandhien" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/gabrielaandhien" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Tesya</h4>
                <p>Volunteer | FKH 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/tesyasrgh" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const marketing =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Charisma</h4>
                    <p>Manager | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/charismasnr" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/_chaendelier_" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
                                alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/charisma.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/alyssa.png" alt="">
                <div class="member-card">
                    <h4>Alyssa</h4>
                    <p>Co-Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/alyssacht" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Oni</h4>
                <p>Volunteer | FK 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/onihadi" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Yasmin</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/_yasminelysia" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/@moonjellyu" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Anya</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/mariaanyaa" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Dymas</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/566dymas" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Yudi</h4>
                <p>Volunteer | FK 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/yudiartanaputra" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/@yudiartanaputra" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Lusi</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/lusiamalus" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a arget="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Irfan</h4>
                <p>Volunteer | FV 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/irfanshr" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <aarget="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Hayfa</h4>
                <p>Volunteer | FIB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/hayfanajma" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/playhayfyy" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Zahra</h4>
                <p>Volunteer | FPsi 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/nazzahraay" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const merchandise =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Happy</h4>
                    <p>Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/happymrnd" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/happy.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/silvi.png" alt="">
                <div class="member-card">
                    <h4>Silvi</h4>
                    <p>Co-Manager | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/silvinfr" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Anja</h4>
                <p>Volunteer | FV 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/anjaa_febrino" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/marbenjvl" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Lia</h4>
                <p>Volunteer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/ardheliaindira" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img 
                        src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Hista</h4>
                <p>Volunteer | FIB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/sahistaaf" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/sahistaaf" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Melody</h4>
                <p>Design Staff | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/grc.melody" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Lia</h4>
                <p>Volunteer | FEB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/ardheliaindira" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Firda</h4>
                    <p>Volunteer | FEB 20</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/firdajumantara" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="green">
                    </div>
            </div>
            <div class="member-card">
                <h4>Antya</h4>
                <p>Volunteer | FF 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/antyaptr" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/antyaptr" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Rais</h4>
                <p>Volunteer | FEB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/mraisadam_" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Ary</h4>
                <p>Volunteer | FTMM 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/idabgsary_" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Basith</h4>
                <p>Volunteer | FEB 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/basith_fauzian" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/hacobsableng" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Jai</h4>
                <p>Volunteer | FPsi 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/zaidanm_" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <atarget="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const design =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Naura</h4>
                    <p>Manager | FISIP 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/arnrbl" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/arnrbl" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
                                alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/naura.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/nadia.png" alt="">
                <div class="member-card">
                    <h4>Nadia</h4>
                    <p>Co-Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/nadiaaarg" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
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
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/shalatshubuh" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Andr</h4>
                <p>Volunteer | FKM 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/deandranaya" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/deandranaya_" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Anya</h4>
                <p>Volunteer | FIB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/anyamaulidyna" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <atarget="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Arimbi</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/arimbisp" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const video =
    ` <fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Aji</h4>
                    <p>Manager | FISIP 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/ananta.ajip" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a href="https://twitter.com/ananta.ajip" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg"
                                alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/aji.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/dana.png" alt="">
                <div class="member-card">
                    <h4>Dana</h4>
                    <p>Co-Manager | FEB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/danafarmansyah" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Albin</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/alvin.rafli" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Diky</h4>
                <p>Volunteer | FISIP 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/dikyreskianto" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Faishal</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/Faishalf1.4" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/Faishalf14" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Yoshia</h4>
                <p>Volunteer | FISIp 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/yosia_dimas" target="_blank"
                        rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const sosmed =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Genada</h4>
                    <p>Manager | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/nadaikaa" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/genada.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/raiza.png" alt="">
                <div class="member-card">
                    <h4>Raiza</h4>
                    <p>Co-Manager | FIB 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/raiza.kirana" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Damar</h4>
                <p>Volunteer | FIB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/raihan.damar" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Bonita</h4>
                <p>Volunteer | FIB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/bonitalrs" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/aruniquea" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Ayu</h4>
                <p>Volunteer | FK 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/ayunoviac" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/anjeliese" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Saski</h4>
                <p>Volunteer | FK 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/almirasaskia" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Nino</h4>
                <p>Volunteer | FIB 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/nino_9f2" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Kheyla</h4>
                <p>Volunteer | FST 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/kheylahakim" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/kheylv" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Rista</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/@ristadlbr" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Asa</h4>
                <p>Volunteer | FISIP 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/asaaisaraa" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

const webdev =
    `<fieldset class="member">
        <div class="member2-inarow">
            <div class="member2">
                <div class="member-card">
                    <h4>Ubin</h4>
                    <p>Manager | FST 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/ubeann" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <img src="assets/img/ubin.png" alt="">
                <div class="back-green"></div>
            </div>
            <div class="member2">
                <img src="assets/img/yer.png" alt="">
                <div class="member-card">
                    <h4>Yer</h4>
                    <p>Co-Manager | FST 19</p>
                    <div class="footer">
                        <a href="https://www.instagram.com/yagrariksa" target="_blank"
                            rel="noopener noreferrer"><img src="assets/img/ic-insta-black.svg"
                                alt=""></a>
                        <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                                src="assets/img/ic-twitter-black.svg" alt=""></a>
                        <div></div>
                        <hr class="red">
                    </div>
                </div>
                <div class="back-green"></div>
            </div>
        </div>
        <div class="member3">
            <div class="member-card">
                <h4>Andi</h4>
                <p>Coding Volunteer | FST 19</p>
                <div class="footer">
                    <a href="https://www.instagram.com/adiharka" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Oxy</h4>
                <p>Coding Volunteer | FST 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/aetyoome_" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a target="_blank" rel="noopener noreferrer" style="opacity: .2;"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Puput</h4>
                <p>Design Volunteer | FST 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/put_0411" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/violet_c" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
            <div class="member-card">
                <h4>Arya</h4>
                <p>Design Volunteer | FST 20</p>
                <div class="footer">
                    <a href="https://www.instagram.com/aryadwijasutha" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-insta-black.svg" alt=""></a>
                    <a href="https://twitter.com/aryadwijasutha" target="_blank" rel="noopener noreferrer"><img
                            src="assets/img/ic-twitter-black.svg" alt=""></a>
                    <div></div>
                    <hr class="green">
                </div>
            </div>
        </div>
    </fieldset>`;

$('.division').click(e => {
    let part = e.target.id;

    $('.member-container')[0].style.opacity = 0;
    $('.member-container')[1].style.opacity = 0;
    $('.member-container')[2].style.opacity = 0;

    setTimeout(() => {
        if (part == 'lna') {
            $('.member-container')[0].innerHTML = lna;
        }
        else if (part == 'event-div') {
            $('.member-container')[0].innerHTML = eventDiv;
        }
        else if (part == 'curation') {
            $('.member-container')[0].innerHTML = curation;
        }
        else if (part == 'sponsor') {
            $('.member-container')[1].innerHTML = sponsor;
        }
        else if (part == 'marketing') {
            $('.member-container')[1].innerHTML = marketing;
        }
        else if (part == 'merchandise') {
            $('.member-container')[1].innerHTML = merchandise;
        }
        else if (part == 'design') {
            $('.member-container')[2].innerHTML = design;
        }
        else if (part == 'video') {
            $('.member-container')[2].innerHTML = video;
        }
        else if (part == 'sosmed') {
            $('.member-container')[2].innerHTML = sosmed;
        }
        else if (part == 'webdev') {
            $('.member-container')[2].innerHTML = webdev;
        }
    }, 1000);

    setTimeout(() => {
        $('.member-container')[0].style.opacity = 1;
        $('.member-container')[1].style.opacity = 1;
        $('.member-container')[2].style.opacity = 1;
    }, 1000);
})