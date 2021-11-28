// CLICK TO START
$('#menuItems').css('opacity', '0')
$('body').addClass('no-scroll')
$('#click').click(() => {
    // $('#home').css('height', '0')
    $('#home').animate({
        height: '210px',
        opacity: 0
    }, {
        duration: 750,
    });
    var nodes = document.getElementById('menuItems').getElementsByTagName("a");
    for(var i=0; i<nodes.length; i++) {
        nodes[i].style.pointerEvents = "auto";
    }
    $('#menuItems').animate({
        opacity: 1
    }, {
        duration: 750,
    });
    var divsToHide = document.getElementsByClassName("mobile_items"); //divsToHide is an array
    for(var i = 0; i < divsToHide.length; i++){
        divsToHide[i].style.display = "block";
    }

    $('body')[0].classList.remove('no-scroll')
    // window.scrollBy(0, ($('.heading')[0].offsetHeight - 80));
})

// ON RELOAD: BACK TO TOP
$(document).ready(function () {
    setTimeout(
        function()
        {
            $(this).scrollTop(0);
        }, 700);
});

// Hover event-nya
const reads = document.querySelectorAll('.ic-read-more');
const ELEMENTS_SPAN = [];

reads.forEach((element, index) => {
    // If The span element for this element does not exist in the array, add it.
    if (!ELEMENTS_SPAN[index])
        ELEMENTS_SPAN[index] = element.querySelector("span");

    element.addEventListener("mouseover", e => {
        ELEMENTS_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
        ELEMENTS_SPAN[index].style.top = e.pageY - element.offsetTop + "px";

        element.addEventListener("mouseout", e => {
            ELEMENTS_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
            ELEMENTS_SPAN[index].style.top = e.pageY - element.offsetTop + "px";
        });
    });
});


// Countdown
function convertTZ(date, tzString) {
    return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));
}


el = 'timer'
// Set the date we're counting down to

var countDownDate = new Date(2021, 10, 28, 12, 45, 00).getTime();

// Update the count down every 1 second
var x = setInterval(function StartCount() {
    // Get today's date and time
    var time = new Date();
    var now = convertTZ(time, "Asia/Jakarta").getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="timer"
    document.getElementById(el).innerHTML = days + 'd : ' + hours + "h : "
    + minutes + "m : " + seconds + "s";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById('countdownText').innerHTML = 'The event has started, please look at the streaming page'
        document.getElementById(el).style.display = "none";


    }
    return StartCount;
}(), 1000);

