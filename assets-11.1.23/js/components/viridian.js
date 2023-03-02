jQuery(document).ready(function ($) {
    //navigation functionality
    $('.nav_open').on('click', function () {
        $('.nav_wrap').css('right', '0');
        $(this).css('opacity', '0');
    });

    $('.nav_close').on('click', function () {
        $('.nav_wrap').css('right', '-100%');
        $('.nav_open').css('opacity', '1');
    });


});