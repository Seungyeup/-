$(document).ready(function() {

    $(".visual_slider").slick({
        dots: true,
        arrows: true,
        infinite: true,
        autoplaySpeed: 6000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    $(".msec01_slider").slick({
        dots: false,
        arrows: true,
        autoplaySpeed: 4000,
        prevArrow: '#msec01_prev',
        nextArrow: '#msec01_next',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 940,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".msec02_slider").slick({
        dots: false,
        arrows: true,
        autoplaySpeed: 4500,
        prevArrow: '#msec02_prev',
        nextArrow: '#msec02_next',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 940,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".expert_slider").slick({
        dots: false,
        arrows: true,
        autoplaySpeed: 4000,
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 360,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".mov_slider").slick({
        dots: false,
        arrows: true,
        autoplaySpeed: 4000,
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".sns_slider").slick({
        dots: false,
        arrows: true,
        autoplaySpeed: 4500,
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

});