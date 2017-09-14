$(document).ready(function() {

    //SELECT2 PLUGIN
    $('#select-number-of-people').select2();
    $('#select-category').select2();
    $('#select-budget').select2();

    //SCROLL UP BUTTON
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }

        // var st = $(this).scrollTop();
        // $('body > header').css({
        //     "background-position": "center " + st / 2 + "px"
        // });
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    $(".burger-icon").click(function() {
        $(this).fadeOut(200);
        $('.mobile-sidebar').addClass("open-sidebar");
    });

    $("#sidebar-toggle").click(function() {
        $(".burger-icon").fadeIn(400);
        $(".mobile-sidebar").removeClass("open-sidebar");
    });
    
});

