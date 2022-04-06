
$(document).ready(function (){
    $('.head_menu ul ul, .head_menu ul ul ul').addClass('submenu');
    $('.head_menu ul').addClass('topmenu');
    var windowWidth = $('body').innerWidth();
    if(windowWidth < 1022){
        $('.head_menu').addClass('head_burger_menu').css("display", "none");
    }
    else{
        $('.head_menu').removeClass('head_burger_menu').css("display", "block");
    }
    $(window).resize(function (){
        windowWidth = $('body').innerWidth();
        if(windowWidth < 1022){
            $('.head_menu').addClass('head_burger_menu').css("display", "none");
        }
        else{
            $('.head_menu').removeClass('head_burger_menu').css("display", "block");
            $('.head_menu li button').remove();
        }
    });
    // $('.submenu button').click(function (event){
    //     $('.submenu button span').addClass('fa-rotate-90');
    //     $('.fa-rotate-90').css("display", "inline-block");
    // });
    $(".head_menu ul li ul li a").each(function () {
        this_a = $(this);
        $(this_a).prepend('<i class="far fa-square"></i>');
    });
    $('.header_burger').click(function (event){
        $('.header_burger, .menu_back').toggleClass('active');
        $('.head_burger_menu').slideToggle();
        $(".head_burger_menu ul li").each(function() {
            this_li = $(this);
            if ($(this_li).find("ul").length > 0) {
                $(this_li).append('<button><span></span></button>');
            }
        });
        $('.head_burger_menu li button').click(function() {
            $(this).closest('li').find('ul').eq(0).slideToggle();
        });
    });
});

