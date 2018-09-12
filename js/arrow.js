var before = 0;
var active = document.getElementById("hero");
var after = active.nextElementSibling;
$(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        if(active != document.getElementById("hero")){
            $('html, body').animate({
                scrollTop: $(before).offset().top
            }, 500);
            active = before;
            before = active.previousElementSibling;
            after = active.nextElementSibling;
        }
    }
    else {
        if(active != document.getElementById("contact")){
            $('html, body').animate({
                scrollTop: $(after).offset().top
            }, 500);
            active = after;
            before = active.previousElementSibling;
            after = active.nextElementSibling;
        }
    }
});