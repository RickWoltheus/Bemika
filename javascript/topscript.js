$(document).ready(function () {

    $(".verken-bemika").click(function () {
        $(".verken-bemika").addClass("verken-animate");
        $(".bemikaSoft").addClass("bemikaSoft-vis");
        $(".intro-tekst").addClass("bemikaSoft-visable");
        $(".stroke1").addClass("stroke1-active");
        $(".stroke2").addClass("stroke2-active");
        $(".stroke3").addClass("stroke3-active");
        $(".stroke4").addClass("stroke4-active");
    });

    $(".bemika-button").click(function () {
        $(".bemika-button").addClass("remove-button");
        $(".bemikaLogo").addClass("displace-logo");
        $(".bemika-tekst").addClass("tekst-remove");
        $(".tak1").addClass("tak1-animatie");
        $(".tak2").addClass("tak2-animatie");
        $(".tak3").addClass("tak3-animatie");
        $(".tak4").addClass("tak4-animatie");
    });

  
//    $(".displace-logo").attr("src", "../images/logoBem.gif?" + Math.random());


    var gifSource = $('.displace-logo').attr('src'); 
    $('.displace-logo').attr('src', ""); 
    $('.displace-logo').attr('src', gifSource + "?" + new Date().getTime());
    
    $(window).on("scroll", function () {
            if ($(window).scrollTop() > 100) {
                $(".nav-bar").addClass("fixed");
            } else {
                $(".nav-bar").removeClass("fixed");
            }
        });


});