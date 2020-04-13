$(document).ready(function(){
    $('.c-nav__hamburger').click(function(){
        $(this).toggleClass('open');
        $('.c-sidenav').toggleClass('c-sidenav--visible');
        $('.c-content-overlay').toggleClass('c-content-overlay--visible');
    });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > $(window).height()-10){  
        $('.c-nav').addClass("c-nav__sticky");
    }
    else{
        $('.c-nav').removeClass("c-nav__sticky");
    }
});