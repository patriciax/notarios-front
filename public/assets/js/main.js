
  window.setTimeout(function () {
    $(".elipse").fadeOut(100);

  }, 2000)

/***********loader*****/
/*
function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
        setTimeout(() => {
            done();
        }, n);
    });
}

function pageTransition() {
    var tl = gsap.timeline();
    tl.to(".loading-screen", {
        duration: 1.2,
        width: "100%",
        left: "0%",
        ease: "Expo.easeInOut",
    });

    tl.to(".loading-screen", {
        duration: 1,
        width: "100%",
        left: "100%",
        ease: "Expo.easeInOut",
        delay: 0.3,
    });
    tl.set(".loading-screen", { left: "-100%" });
}

function contentAnimation() {
    var tl = gsap.timeline();
    tl.from(".animate-this", {
        duration: 1,
        y: 30,
        opacity: 0,
        stagger: 0.4,
        delay: 0.2,
    });
}

$(function () {
    barba.init({
        sync: true,

        transitions: [
            {
                async leave(data) {
                    const done = this.async();

                    pageTransition();
                    await delay(1000);
                    done();
                },

                async enter(data) {
                    contentAnimation();
                },

                async once(data) {
                    contentAnimation();
                },
                async after() {
                    myscripts();
                },
            },
        ],
    });
});*/

$(document).ready(function () {

$(".slider-services").slick({
    arrows: false,

    infinite: true,
    speed: 500,
    slidesToShow: 1,
    fade: true,
    cssEase: "linear",
    autoplay: false,
    autoplaySpeed: 2000,
    draggable: false,
    dots: true,
    dotsClass: "custom-paging",
    customPaging: function (slider, i) {
        return i + 1 + " <span>/</span> " + slider.slideCount;
    },
});
/*   $('.slider-servicesr').on(`init reInit`, function(event, slick) {
    $('.counter').text('1' + ' / ' + slick.slideCount);
  })
  $('.slider-services').on(`afterChange`, function(event, slick, currentSlide, nextSlide) {
    $('.counter').text(currentSlide + 1 + ' / ' + slick.slideCount);
  })*/

/*************************** */
// Slick slider init

$(".slider").slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,


    fade: true,
    cssEase: 'linear'

});

$(".slider")
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".slick-list").addClass("do-transition");
    })
    .on("afterChange", function () {
        $(".slick-list").removeClass("do-transition");
    });
$(document).ready(function () {
    var classClicked = "clicked";
    $(".card-flip").click(function () {
        if ($(this).hasClass(classClicked)) {
            $(this).removeClass(classClicked);
        } else {
            $(this).addClass(classClicked);
        }
    });
});

/**************films************* */
$(".slider-films").slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,

    variableWidth: true,
    draggable: false,
});

/******************************* */
$(".main-info").on("click", function () {
    $(this).toggleClass("open");
});
$(".main-info").on("click", function () {
    $(".main-director-names").toggleClass("opacity");
});

$(".main-panel p").click(function () {
    $(this).toggleClass("active");
    $(".main-panel p").parent().find(".panel").removeClass("panel-active");
    $(".main-panel p").parent().find(".panel").addClass("panel-none");

    $(this).parent().find(".panel").toggleClass("panel-active");
    /*  $(this).parent().find(".main-galeria").toggleClass("scroll");*/
});
/*
$(".galeria_img img").on("click", function () {
    if ($(this).css("max-height") == "100%")
        $(this).css("max-height", "50px");
    else $(this).css("max-height", "100%");
});*/

$(".tabs-gallery span").click(function () {
    var tab_id = $(this).attr("data-tab");

    $(".tabs-gallery span").removeClass("current");
    $(".tab-content").removeClass("current");

    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
});

$(".tabs-gallery2 span").click(function () {
    var tab_id = $(this).attr("data-tab");

    $(".tabs-gallery2 span").removeClass("current2");
    $(".tab-content2").removeClass("current2");

    $(this).addClass("current2");
    $("#" + tab_id).addClass("current2");
});

var seccion = $(".tab-content");
var cantidadSecciones = seccion.lenght;
var doc = $("body");

function hijos(sec) {
    var n = seccion.toArray().length;
    var x = $(sec).find("figure").toArray().length;
    //var a = n.each.children("a");

    console.log("hay " + n + " Secciones y " + x + " Enlaces ");

    $(sec)
        .find(".counter")
        .append("" + x + "");
}
$.each(seccion, function (i, sec) {
    hijos(sec);
});
/**********item slider films******************** */
$(".slider-films_item").click(function () {
    /* var films = $(this).attr("data-slick-index")
    $(".slider-films_item").removeClass("active-film");
$("#" + films).addClass('active-film')*/

    $(".section-films").addClass("active-films");
    $(".menu").css("opacity", "0");
    $("html, body").css({
        overflow: "hidden",
        height: "100%",
    });
});
/**********arrow******************** */
$(".arrow").click(function () {
    $(".section-films").removeClass("active-films");
    $("html, body").css({
        overflow: "auto",
        height: "100%",
    });
    $(".menu").css("opacity", "1");
});
/**********btn more******************** */
$(".hidden-film").hide();
$(".btn_more").click(function () {
    $(".hidden-film").show();
});
});