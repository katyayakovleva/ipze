
$(document).ready(function (){
    $('.head_menu ul ul, .head_menu ul ul ul').addClass('submenu');
    $('.head_menu ul').addClass('topmenu');
    var windowWidth = window.innerWidth;
    if(windowWidth <= 1020){
        $('.head_menu').addClass('head_burger_menu').css("display", "none");
    }
    else{
        $('.head_menu').removeClass('head_burger_menu').css("display", "block");
    }
    $(window).resize(function (){
        windowWidth = window.innerWidth;
        if(windowWidth <= 1020){
            $('.head_menu').addClass('head_burger_menu').css("display", "none");
            $('.header_burger, .menu_back').removeClass('active');
            $('body').removeClass('scroll');
            $("#search-form").hide();

        }
        else{
            $('.head_menu').removeClass('head_burger_menu').css("display", "block");
            $('.header_burger, .menu_back').removeClass('active');
            $('body').removeClass('scroll');
            $("#search-form-burger").hide();
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

    $("#search-icon").click(function() {
		$("#search-form").slideToggle();
	});

    $("#search-icon-burger").click(function() {
		$("#search-form-burger").slideToggle();
	});
        
    $("#header-burger").click(function() {
		$("#search-form-burger").hide();
	});
        
    // $("#boxclose").click(function(e){ //on the button click.
    //     e.preventDefault();
    //     $("#search-form").slideToggle();//this will be disappeared.
    // });

});

