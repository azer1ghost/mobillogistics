$( document ).ready(function() {
    'use strict';

    // new AOS.init();

    $('.search-form button').click(function () {
        $('.search-form input').toggleClass('active')
    });

    $('.messenger-icon').hover(function () {
        $('.messenger-iframe').addClass('active')
    })
    $('.messenger-close').click(function () {
        $('.messenger-iframe').removeClass('active')
    })

    $(window).bind('scroll', function () {
        let navTopHeight = $('.header-top').height()
        let navbar = $('.navbar').height()
        if ($(window).scrollTop() > navTopHeight) {
            $('.navbar').addClass('sticky');
            $('main').css('padding-top', navbar)
        }
        else {
            $('.navbar').removeClass('sticky');
            $('main').css('padding-top', 0)
        }
    });

    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay:true,
            autoplayTimeout:2000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                },
                762: {
                    items: 4,
                },
                992: {
                    items: 6,
                }
            }
        });
    });

    //Check if an element was in a screen
    function isScrolledIntoView(elem){
        let docViewTop = $(window).scrollTop();
        let docViewBottom = docViewTop + $(window).height();
        let elemTop = $(elem).offset().top;
        let elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom));
    }
    //Count up code
    function countUp() {
        $('.counter').each(function() {
            let $this = $(this); // <- Don't touch this variable. It's pure magic.
            let countTo = $this.attr('data-count');
            let ended = $this.attr('ended');

            if ( ended !== true && isScrolledIntoView($this) ) {
                $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2500, //duration of counting
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                $this.attr('ended', 'true');
            }
        });
    }
    //Start animation on page-load
    if ( isScrolledIntoView(".counter") ) {
        countUp();
    }
    //Start animation on screen
    $(document).scroll(function() {
        if ( isScrolledIntoView(".counter") ) {
            countUp();
        }
    });

});
