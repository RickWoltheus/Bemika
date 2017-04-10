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
                $("#categorie").addClass("fixed-sec");
            } else {
                $(".nav-bar").removeClass("fixed");
                $("#categorie").removeClass("fixed-sec");
            }
        });
});

function dropdownNav(e) {
    e.preventDefault();
    $('.uthink').slideToggle(400);
}

const hamburgerMenu = document.querySelector("#hambur");
hamburgerMenu.addEventListener('click', dropdownNav);

$(document).ready(function(){
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});
