$(document).ready(function () {

    // Click Bars for Dropdown

    $('.fa').click(function () {
        $('.dropdown').css("visibility","visible").toggle();
    });

    $(window).keyup(function(e) {
        if (e.keyCode == 39 || e.keyCode == 40) {
            var currentSlide = $('.active-slide');
            var nextSlide = currentSlide.next();

            if (nextSlide.length == 0) {
                nextSlide = $('.slide').first();
            }

            currentSlide/*.animate({right: '1200px'})*/.fadeOut(600).removeClass('active-slide');
            nextSlide.fadeIn(600).addClass('active-slide');

        } else if (e.keyCode == 37 || e.keyCode == 38) {
            var currentSlide = $('.active-slide');
            var prevSlide = currentSlide.prev();

            if (prevSlide.length == 0) {
                prevSlide = $('.slide').last();
            }

            currentSlide.fadeOut(600).removeClass('active-slide');
            prevSlide.fadeIn(600).addClass('active-slide');
        }
    });

});
