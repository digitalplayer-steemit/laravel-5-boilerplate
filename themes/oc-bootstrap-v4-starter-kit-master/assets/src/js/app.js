/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $navbar = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150;

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true;

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    });

    function autoHideHeader() {
        var currentTop = $(window).scrollTop();

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $navbar.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $navbar.addClass('is-hidden')
        }

        previousTop = currentTop;
        scrolling = false
    }
});