const img_src = $('#img-src').attr('src');
const next_src = $('#next-src').attr('src');

// ALERT EMAIL
const notFilled =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Field's not fill</h4>
            <h5>Fill the form to continue Login</h5>
        </div>
    </div>`;

const notFound =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Email not found</h4>
            <h5>The email you entered isn't connected to an account.</h5>
        </div>
    </div>`;

const loader =
    `<div class="loader">
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="25px" height="25px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <path fill="#fff" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
    <animateTransform attributeType="xml"
        attributeName="transform"
        type="rotate"
        from="0 25 25"
        to="1800 25 25"
        dur="2s"
        repeatCount="indefinite"/>
    </path>
    </svg>
    </div>`;

    // <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    // width="16px" height="16px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    // <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
    //     <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
    // </rect>
    // <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
    //     <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
    // </rect>
    // <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
    //     <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
    //     <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
    // </rect>
    // </svg>

const arrow = `<img src="` + next_src + `" alt="">`;

// ANIMASI
// ; (function ($) {
//     "use strict";

//     function verificationForm() {
//         let current_fs, next_fs, previous_fs; //fieldsets
//         let left, opacity, scale; //fieldset properties which we will animate
//         let animating; //flag to prevent quick multi-click glitches

//         // $(".next").click(function (e) {
//         //     e.preventDefault();

//         //     // LOADER
//         //     $('#ic-next')[0].innerHTML = loader;
//         //     setTimeout(() => {
//         //         $('#ic-next')[0].innerHTML = arrow;
//         //         if ($('#email')[0].value == "") {
//         //             $('#alert-email').css({ 'display': 'block' });
//         //             $('#alert-email')[0].innerHTML = notFilled;
//         //         }
//         //         else if ($('#email')[0].value == "not found") {
//         //             $('#alert-email').css({ 'display': 'block' })
//         //             $('#alert-email')[0].innerHTML = notFound;
//         //         }
//         //         else {
//         //             if (animating) return false;
//         //             animating = true;

//         //             current_fs = $(this).parent().parent().parent();
//         //             next_fs = $(this).parent().parent().parent().next();

//         //             //activate next step on progressbar using the index of next_fs
//         //             // $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//         //             //hide the current fieldset with style
//         //             current_fs.animate({
//         //                 opacity: 0
//         //             }, {
//         //                 step: function (now) {
//         //                     //as the opacity of current_fs reduces to 0 - stored in "now"
//         //                     //1. scale current_fs down to 80%
//         //                     scale = 1 - (1 - now) * 0.2;
//         //                     //2. bring next_fs from the right(50%)
//         //                     left = (now * 50) + "%";
//         //                     //3. increase opacity of next_fs to 1 as it moves in
//         //                     opacity = 1 - now;
//         //                     current_fs.css({
//         //                         'transform': 'scale(' + scale + ')',
//         //                         'position': 'absolute',
//         //                         'align-self': 'center',
//         //                         'width': '100%'
//         //                     });
//         //                     next_fs.css({
//         //                         'left': left,
//         //                         'opacity': opacity,
//         //                         'display': 'flex'
//         //                     });
//         //                 },
//         //                 duration: 800,
//         //                 complete: function () {
//         //                     current_fs.hide();
//         //                     animating = false;
//         //                 },
//         //                 //this comes from the custom easing plugin
//         //                 easing: 'easeInOutBack'
//         //             });
//         //         }
//         //     }, 2000);
//         // });

//         // $(".previous").click(function (e) {
//         //     e.preventDefault();
//         //     if (animating) return false;
//         //     animating = true;

//         //     current_fs = $(this).parent().parent();
//         //     previous_fs = $(this).parent().parent().prev();

//         //     //de-activate current step on progressbar
//         //     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//         //     //show the previous fieldset
//         //     previous_fs.show();
//         //     //hide the current fieldset with style
//         //     current_fs.animate({
//         //         opacity: 0
//         //     }, {
//         //         step: function (now) {
//         //             //as the opacity of current_fs reduces to 0 - stored in "now"
//         //             //1. scale previous_fs from 80% to 100%
//         //             scale = 0.8 + (1 - now) * 0.2;
//         //             //2. take current_fs to the right(50%) - from 0%
//         //             left = ((1 - now) * 50) + "%";
//         //             //3. increase opacity of previous_fs to 1 as it moves in
//         //             opacity = 1 - now;
//         //             current_fs.css({
//         //                 'left': left
//         //             });
//         //             previous_fs.css({
//         //                 'transform': 'scale(' + scale + ')',
//         //                 'opacity': opacity
//         //             });
//         //         },
//         //         duration: 800,
//         //         complete: function () {
//         //             current_fs.hide();
//         //             animating = false;
//         //         },
//         //         //this comes from the custom easing plugin
//         //         easing: 'easeInOutBack'
//         //     });
//         // });

//         // $(".submit").click(function () {
//         //     return false;
//         // })
//     };

//     //* Add Phone no select
//     function phoneNoselect() {
//         if ($('#msform').length) {
//             $("#phone").intlTelInput();
//             $("#phone").intlTelInput("setNumber", "+880");
//         };
//     };
//     //* Select js
//     function nice_Select() {
//         if ($('.product_select').length) {
//             $('select').niceSelect();
//         };
//     };
//     /*Function Calls*/
//     verificationForm();
//     phoneNoselect();
//     nice_Select();
// })(jQuery);

// ALERT PASSWORD
const incorrect =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Incorrect password</h4>
            <h5>Please try again while remembering your password.</h5>
        </div>
    </div>`;

// $('.login-next').click(e => {
//     if ($('#password')[0].value == '') {
//         e.preventDefault();
//         $('#alert-password').css({ 'display': 'block' });
//         $('#alert-password')[0].innerHTML = notFilled;
//     }
//     else if ($('#password')[0].value == 'incorrect') {
//         // INI BUAT KALO PASSWORDNYA SALAH
//         e.preventDefault();
//         $('#alert-password').css({ 'display': 'block' });
//         $('#alert-password')[0].innerHTML = incorrect;
//     }
//     else {
//         // INI NTAR DIARAHIN KMNA I DUNNO
//         window.location.href = 'landing-page.html';
//     }
// })

// CHECKBOX SHOW PASSWORD
// LOGIN BIASA
// $('#show-password').click(() => {
//     if ($('#password')[0].type == 'password') {
//         $('#password').prop("type", "text");
//     }
//     else {
//         $('#password').prop("type", "password");
//     }
// })

// LOGIN PERTAMA KALI
// $('#show-new-password').click(() => {
//     if ($('#new-password')[0].type == 'password') {
//         $('#new-password').prop("type", "text");
//     }
//     else {
//         $('#new-password').prop("type", "password");
//     }
// })

// $('#show-confirm-password').click(() => {
//     if ($('#confirm-password')[0].type == 'password') {
//         $('#confirm-password').prop("type", "text");
//     }
//     else {
//         $('#confirm-password').prop("type", "password");
//     }
// })

// ALERT LOGIN PERTAMA KALI
const doesntMatch =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Password doesn't match</h4>
            <h5>Please enter your password again.</h5>
        </div>
    </div>`;

const lessThan8 =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Password not correct</h4>
            <h5>Password must be atleast 8 characters.</h5>
        </div>
    </div>`;

// $('.login-first').click(e => {
//     if ($('#new-password')[0].value.length < 8 || $('#confirm-password')[0].value.length < 8) {
//         e.preventDefault();
//         $('#alert-first-login')[0].innerHTML = lessThan8;
//     }
//     else if ($('#new-password')[0].value != $('#confirm-password')[0].value) {
//         e.preventDefault();
//         $('#alert-first-login')[0].innerHTML = doesntMatch;
//     }
//     else {
//         // INI NTAR DIARAHIN KMNA I DUNNO
//         window.location.href = 'landing-page.html';
//     }
// })
