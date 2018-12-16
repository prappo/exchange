$(document).ready(function(){
    $('.slider').bxSlider({
        auto:true,
        controls:true
    });

    $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 500,
    });

    $('.review').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });




});