jQuery(document).ready(function($){

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: true,
        asNavFor: '.slider-nav',
        prevArrow : '<img class="w-10-px position-absolute prev-arrow rounded-circle bg-light" src="/wp-content/themes/leonstyle/images/arrow/direction_left_icon.png">',
        nextArrow : '<img class="w-10-px position-absolute next-arrow rounded-circle bg-light" src="/wp-content/themes/leonstyle/images/arrow/direction_next_icon.png">'
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        autoplay: true,
        centerMode: true,
        focusOnSelect: true,
        prevArrow : '<img class="w-10-px position-absolute prev-arrow" src="/wp-content/themes/leonstyle/images/arrow/left_icon.png">',
        nextArrow : '<img class="w-10-px position-absolute next-arrow" src="/wp-content/themes/leonstyle/images/arrow/latter_icon.png">'
    });
});