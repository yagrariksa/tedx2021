const regist = document.querySelector('#regist');
regist.addEventListener('click', () => {
    window.location = "./user-regis-cfe.html"
})

// SLIDESHOW
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
}

// BOX WRITING FORMAT NGEZOOM KALO DI HOVER
console.log($('.box'))

$('.box').map(box => {
    $('.box')[box].addEventListener('mouseover', () => {
        $('.box')[box].classList.add('bigger')
        if (box != 1) {
            $('.box')[1].classList.remove('bigger')
        }
    })

    $('.box')[box].addEventListener('mouseout', () => {
        $('.box')[box].classList.remove('bigger')
    })
});