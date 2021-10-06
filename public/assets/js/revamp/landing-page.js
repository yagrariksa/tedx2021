let rect = $('.x-container')[0].getBoundingClientRect();
let mouse = { x: 0, y: 0, moved: false };

$("body").mousemove(e => {
    mouse.moved = true;
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
});

// Ticker event will be called on every frame
TweenLite.ticker.addEventListener('tick', () => {
    if (mouse.moved && window.innerWidth >= '576') {
        parallaxIt(".x", -20);
        parallaxIt(".slide", -20);
    }
    mouse.moved = false;
});

function parallaxIt(target, movement) {
    TweenMax.to(target, 0.5, {
        x: (mouse.x - rect.width / 2) / rect.width * movement,
        y: (mouse.y - rect.height / 2) / rect.height * movement
    });
}

$(window).on('resize scroll', () => {
    rect = $('.x-container')[0].getBoundingClientRect();
})

// Ripple Effect-nya pool
$('.pool').ripples({
    resolution: 256,
    perturbance: 0.005
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
