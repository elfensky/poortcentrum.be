$(document).ready(function(){
    $('.c-nav__hamburger').click(function(){
        $(this).toggleClass('open');
        $('.c-sidenav').toggleClass('c-sidenav--visible');
        $('.c-content-overlay').toggleClass('c-content-overlay--visible');
    });

    $('.c-content-overlay, .c-sidenav__link').click(function() {
        $('.c-nav__hamburger').toggleClass('open');
        $('.c-sidenav').toggleClass('c-sidenav--visible');
        $('.c-content-overlay').toggleClass('c-content-overlay--visible');
    });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 600){  
        $('.c-nav__sticky').addClass("c-nav__sticky--visible");
    }
    else {
        $('.c-nav__sticky').removeClass("c-nav__sticky--visible");
    }
});

