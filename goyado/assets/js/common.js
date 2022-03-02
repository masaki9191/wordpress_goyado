$(document).ready(function() {
    // Hambeger menu click
    $(".sp-menu, .menu-overlay a").click(function() {
        $(".menu-overlay, .sp-menu, body").toggleClass("change");
    });

    //Header style Reset Part
    var cHeader = document.getElementById("cHeader");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 320 || document.documentElement.scrollTop > 320) {
            cHeader.style.opacity = "0.8";
        } else {
            cHeader.style.opacity = "1";
        }
    }


    $('.intro_top_page_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 0,
        infinite: true,
        cssEase: 'ease-in-out',
        autoplay: true,
        fade: true,
        dots: false,
        arrows: false,
        adaptiveHeight: true,
        autoplaySpeed: 6000,
        pauseOnFocus: false,
        pauseOnHover: false,
        touchMove: false
    });
    $('.news_list_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        pauseOnFocus: false,
        pauseOnHover: true,
        dotsClass: 'news_pager_item',
        appendDots: $('.news_pager'),
        vertical: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                pauseOnFocus: false,
                pauseOnHover: false,
                arrows: true,
                autoplay: false,
                nextArrow: $('.news_slick_next'),
                prevArrow: $('.news_slick_prev'),
                customPaging: function(slider, i) {
                    console.log(slider);
                    return (i + 1) + '/' + slider.slideCount;
                }
            }
        }, ]
    });
    $('.p-top-amenities-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        arrows: false
    });

    $('.p-room-amenitiesSlider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        dots: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        centerMode: true,
        arrows: false
    });

    $('.p-meals-itemImgSlider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        dots: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        centerMode: true,
        arrows: false
    });

    $(".collapsible").click(function() {
        // acodian click
        $(this).toggleClass("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px ";
        }
    });

    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
});