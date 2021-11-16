// Countdown
function convertTZ(date, tzString) {
    return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));
}

el = 'timer'
// Set the date we're counting down to

var countDownDate = new Date(2021, 10, 28, 13, 00, 00).getTime();

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
        window.location.reload();
        document.getElementById('countdownText').innerHTML = 'The event has started, please look at the streaming page'
        document.getElementById(el).style.display = "none";

    }
    return StartCount;
}(), 1000);

