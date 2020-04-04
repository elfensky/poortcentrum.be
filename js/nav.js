$(document).ready(function(){
    $('.c-nav__icon').click(function(){
        $(this).toggleClass('open');
        $('.c-sidenav').toggleClass('c-sidenav--visible');
    });
});