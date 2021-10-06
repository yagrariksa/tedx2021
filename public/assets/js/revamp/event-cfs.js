// ALERT FORM
const enterAll =
    `<div class="danger">
        <img src="assets/img/danger.svg" alt="">
        <div class="desc">
            <h4>Enter all required data</h4>
            <h5>Please input again with all required data.</h5>
        </div>
    </div>`;

$('#submit-form').click(() => {
    if ($('#fullname')[0].value == '' || $('#faculty')[0].value == '' || $('#batch')[0].value == '' || $('#domicile')[0].value == '' || $('#whatsapp')[0].value == '' || $('#instagram')[0].value == '' || $('#gdrive')[0].value == '') {
        $('#alert-regis').css({ 'display': 'block' })
        $('#alert-regis')[0].innerHTML = enterAll;
    }
    else {
        // INI KALO UDAH SUBMIT KEMANA?
        window.location.href = 'dashboard.html';
    }
})

// ISIAN ANNOUNCEMENT
const oprec =
    `<h2 class="smaller">Requirement</h2>
    <h3>The following list is what you’ll need to <span class="text-red">include</span> inside a
        <span class="text-red">google drive folder</span> and their formats:
    </h3>
    <div class="requirement">
        <div class="tl-card">
            <h4>Video</h4>
            <h4>Video_Name</h4>
        </div>
        <div class="tl-card">
            <h4>CV</h4>
            <h4>CV_Name</h4>
        </div>
        <div class="tl-card">
            <h4>KTM</h4>
            <h4>KTM_Name</h4>
        </div>
        <div class="tl-card">
            <h4>Script</h4>
            <h4>Script_Name</h4>
        </div>
    </div>
    <h4>Please upload the folder with <span class="text-green">Name_Faculty</span> as your <span
            class="text-green">folder name</span> and don’t forget to set your applications
        <span class="text-green">on public</span></h4>`;

const soon = `<h1 class="bigest">Coming Soon</h1>`;


// CAROUSEL TIMELINE MOBILE
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "flex";
}
