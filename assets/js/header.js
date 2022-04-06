
$(document).ready(function (){
    $('.head_menu ul ul, .head_menu ul ul ul').addClass('submenu');
    $('.head_menu ul').addClass('topmenu');
    var windowWidth = window.innerWidth;
    console.log(windowWidth);
    if(windowWidth <= 1020){
        $('.head_menu').addClass('head_burger_menu').css("display", "none");
    }
    else{
        $('.head_menu').removeClass('head_burger_menu').css("display", "block");
    }
    $(window).resize(function (){
        windowWidth = window.innerWidth;
        console.log(windowWidth);
        if(windowWidth <= 1020){
            $('.head_menu').addClass('head_burger_menu').css("display", "none");
            $('.header_burger, .menu_back').removeClass('active');
            $('body').removeClass('scroll');
        }
        else{
            $('.head_menu').removeClass('head_burger_menu').css("display", "block");
            $('.header_burger, .menu_back').removeClass('active');
            $('body').removeClass('scroll');
        }
    });
    $(".head_menu ul li ul li a").each(function () {
        this_a = $(this);
        $(this_a).prepend('<i class="far fa-square"></i>');
    });
    $('.header_burger').click(function (event){
        $('.header_burger, .menu_back').toggleClass('active');
        $('.head_burger_menu').slideToggle();
        $('body').toggleClass('scroll');
    });
});

