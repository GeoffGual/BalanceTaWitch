$(window).scroll(function () {
    if ($(window).scrollTop() >= 450) {
        $('.navbar').css('background','#FECAAE');
        $('.nav-link').css('color','#2d2d2d');
        $('.balance').css('color','#2d2d2d');
    } else {
        $('.navbar').css('background','transparent');
        $('.nav-link').css('color','#7A2B00');
        $('.balance').css('color','#2d2d2d');

    }
});

