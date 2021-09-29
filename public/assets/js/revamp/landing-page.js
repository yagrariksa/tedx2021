let rect = $('.x-container')[0].getBoundingClientRect();
let mouse = { x: 0, y: 0, moved: false };

$("body").mousemove(e => {
    mouse.moved = true;
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
});

// Ticker event will be called on every frame
TweenLite.ticker.addEventListener('tick', () => {
    if (mouse.moved) {
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