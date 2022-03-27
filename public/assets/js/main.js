window.setTimeout(function () {
    $(".elipse").fadeOut(100);
}, 2000);


function customPopup() {
    let $btnShowPopup = $(".js-open-popup");
    let $btnClosePopup = $(".js-close-popup");
    let $popup = $(".js-custom-popup");

    $btnShowPopup.on("click", function () {
        let targetPopup = $(this).attr("data-target");
        $("[data-popup=" + targetPopup + "]").addClass("is-active");
    });

    $btnClosePopup.on("click", function () {
        $(this).parents(".is-active").removeClass("is-active");
        playPause();
    });

    $popup.on("click", function (event) {
        if (
            !$(event.target).closest(".js-custom-popup-holder").length &&
            !$(event.target).is("js-custom-popup")
        ) {
            if ($popup.hasClass("is-active")) {
                $popup.removeClass("is-active");
            }
            playPause();
        }
    });
}
customPopup();

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
        cssEase: "linear",
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
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    variableWidth: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /******************************* */
    $(".main-info").on("click", function () {
        $(this).toggleClass("open");
    });


    $('.main-info').removeClass("active-xs");

    $(".main-info").on("click", function () {
        $('.main-galeria').toggleClass("active-xs");
    });
    /*var myVideo = document.querySelector(".test");

function playPause() {
    if (myVideo.paused)
      myVideo.play();
    else
      myVideo.pause();
  }*/

    $('.closed').on("click", function(){

    })
    /*
$(".main-info").on("click", function () {
    $(".main-director-names").toggleClass("opacity");
});*/

    $(".main-panel .main-director-names").click(function () {
        $(this).toggleClass("active");
        $(".main-panel .main-director-names")
            .parent()
            .find(".panel")
            .removeClass("panel-active");
        $(".main-panel .main-director-names")
            .parent()
            .find(".panel")
            .addClass("panel-none");

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

    var seccion = $(".tab-content-general");

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

        $(".menu").css("opacity", "0");
        $("html, body").css({
            overflow: "hidden",
            height: "100%",
        });
        $(".section-films").addClass("active-films");
        $(".section-no").addClass("active-films-slider");
    });
    /**********arrow******************** */
    $(".arrow").click(function () {
        $(".section-films").removeClass("active-films");
        $("html, body").css({
            overflow: "auto",
            height: "100%",
        });
        $(".menu").css("opacity", "1");
        $(".section-no").removeClass("active-films-slider");
    });
    /**********btn more******************** */
    $(".hidden-film").hide();
    $(".btn_more").click(function () {
        $(".hidden-film").show();
    });








});
// Creating self-invoking anonymous function
(function() {
    'use strict';
    var app = {
      // Setting couple variables
      settings: {
        grid: $('#gallery__grid'),
        modalDialog: $('#modal-dialog'),
        elementClass: $('#gallery__grid').data('element')
      },
      controllers: function() {
        // Run the code only if gallery exists
        if (this.settings.grid.length > 0) {
          // Modal Constructor
          var modalBuilder = '<div id="modal-dialog" class="js-modal-overlay modal__overlay"><section class="js-modal-dialog modal-dialog"><button class="js-modal-close modal__close"><span class="sr-only">Close Modal</span>&Cross;</button><img class="js-modal-dialog__img modal-dialog__img" src="" alt="Gallery thumbnail"><div class="modal__navigation"><a href="#" class="js-modal-prev modal__prev theme-background">&lsaquo;</a><a href="#" class="js-modal-next modal__next theme-background">&rsaquo;</a></div></section></div>';
          // Putting the modal contructor right after the grid container
          $(app.settings.grid).after(modalBuilder);

          // Creating variables we are going to use through the code
          var modalOverlay = $('.js-modal-overlay'),
            modalImage = $('.js-modal-dialog__img'),
            modalCloseBtn = $('.js-modal-close'),
            nextImageAnchor = $('.js-modal-next'),
            prevImageAnchor = $('.js-modal-prev'),
            grid = $('.gallery__grid'),
            imagesArray = grid.find(this.settings.elementClass),
            imagesArrayLength = imagesArray.length;

          // Styling the modal dialog
          $('.js-modal-dialog').css({
            'position': 'relative',
            'top': '50%',
            'right': '0',
            'left': '0',
            'transform': 'translateY(-50%)',
            'margin-right': 'auto',
            'margin-left': 'auto',
            'max-width': '25rem',
            'text-align': 'center'
          });

          // Styling the modal overlay
          modalOverlay.css({
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'z-index': '-1',
            'width': '100%',
            'height': '100%',
            'background': 'rgba(0,0,0,.75)',
            'opacity': '0',
            'transition': '.25s opacity ease-in-out'
          });

          // Styling close button
          modalCloseBtn.css({
            'position': 'absolute',
            'top': '-25px',
            'right': '-26px',
            'padding-top': '.75rem',
            'padding-bottom': '.75rem',
            'width': '3rem',
            'font-size': '1rem',
            'color': '#fff',
            'border': '0',
            'border-radius': '50%',
            'opacity': '0',
            'cursor': 'pointer',
            'background': '#111',
            'transition': '.25s opacity ease-in-out'
          });

          // Styling close button - hover over overlay
          modalOverlay.on('mouseenter', function() {
            modalCloseBtn.css({'opacity': '.5'});
          });

          // Styling close button - mouse leaves the overlay
          modalOverlay.on('mouseleave', function() {
            modalCloseBtn.css({'opacity': '0'});
          });

          // Styling close button - hover over button itself
          modalOverlay.on('mouseenter', function() {
            modalCloseBtn.on('mouseenter', function() {
              $(this).css({'opacity': '1'});
            });
          });

          // Styling close button - mouse leaves the button
          modalOverlay.on('mouseleave', function() {
            modalCloseBtn.on('mouseleave', function() {
              $(this).css({'opacity': '.5'});
            });
          });

          // Styling the arrows
          $('.js-modal-next, .js-modal-prev').css({
            'position': 'absolute',
            'top': '50%',
            'z-index': '91',
            'display': 'block',
            'width': '3rem',
            'height': '3rem',
            'font-size': '32px',
            'font-weight': '400',
            'text-decoration': 'none',
            'color': '#fff',
            'background': '#111',
            'box-shadow': '0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)',
            'opacity': '0',
            'transition': '.25s all ease-in-out'
          });
          $('.js-modal-prev').css({
            'left': '0'
          });
          $('.js-modal-next').css({
            'right': '0'
          });

          // Styling arrows - hover over overlay
          modalOverlay.on('mouseenter', function() {
            $('.js-modal-next, .js-modal-prev').css({'opacity': '.5'});
          });

          // Styling arrows - mouse leaves the overlay
          modalOverlay.on('mouseleave', function() {
            $('.js-modal-next, .js-modal-prev').css({'opacity': '0'});
          });

          // Styling arrows - hover over the buttons
          $('.js-modal-next, .js-modal-prev').on('mouseenter', function() {
            $(this).css({
              'color': '#fff',
              'box-shadow': '0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23)',
              'opacity': '1'
            });
          });

          // Styling arrows - mouse leaves the buttons
          $('.js-modal-next, .js-modal-prev').on('mouseleave', function() {
            $(this).css({
              'color': '#fff',
              'box-shadow': '0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)',
              'opacity': '.5'
            });
          });

          // Grid-Based Gallery
          $('.' + app.settings.elementClass).on('click', function() {
            // Itterating over all images in the gallery
            $('.' + app.settings.elementClass).each(function(index) {
              // Assigning data-index attribute with unique number
              // to every image in the gallery
              $(this).attr('data-index', index);
              $(this).css({'max-width': '100%'});
            });
            var currentImage = $(this), // Currently clicked image
              imgSrc = currentImage.attr('src'), // Src attribute of clicked image
              imgAlt = currentImage.attr('alt'), // Alt attribute of clicked image
              currentImageIndex = currentImage.data('index'), // Number from data-index attribute of clicked image
              imgArray = $('img[data-index]'), // array of all images
              numOfImages = imgArray.length - 1, // switch to 0-based index
              nextIndex, // prepare nextIndex variable
              prevIndex; // prepare prevIndex variable

            if (currentImageIndex > 0) {
              // If you are not on the first image, decrease the index by 1
              prevIndex = currentImageIndex - 1;
            } else {
              // If you are on the first image, go on the last one
              prevIndex = numOfImages;
            }
            if ((currentImageIndex + 1) < numOfImages) {
              // If you are not on the last image, increase the index by 1
              nextIndex = currentImageIndex + 1;
            } else {
              // If you are on the last image, go on the first one
              nextIndex = 0;
            }

            // Attach image to modal window
            function imageAttach() {
              modalImage.attr({
                src: imgSrc,
                alt: imgAlt,
                "data-index": currentImageIndex
              });
            }

            // Open Modal Window
            function modalOpen() {
              modalOverlay.css({
                'z-index': '90',
                'opacity': '1'
              });
              // Show previous image on "left arrow" key press
              $(document).on('keydown', function(e) {
                if (e.keyCode == 37 || e.charCode == 37 || e.which == 37) {
                  prevImage(e);
                }
              });
              // Show next image on "right arrow" key press
              $(document).on('keydown', function(e) {
                if (e.keyCode == 39 || e.charCode == 39 || e.which == 39) {
                  nextImage(e);
                }
              });
              // Close modal on "Esc" key press
              $(document).on('keydown', function(e) {
                if (e.keyCode == 27 || e.charCode == 27 || e.which == 27) {
                  closeModal(e);
                }
              });
            }

            // Show previous image
            function prevImage(e) {
              e.preventDefault();

              modalImage.attr({
                src: $('[data-index=' + prevIndex + ']').attr('src'),
                alt: $('[data-index=' + prevIndex + ']').attr('alt'),
                'data-index': $('[data-index=' + prevIndex + ']').attr('data-index')
              });
              currentImageIndex = prevIndex;

              if (currentImageIndex > 0) {
                // If you are not on the first image, decrease the index by 1
                prevIndex = currentImageIndex - 1;
              } else {
                // If you are on the first image, go on the last one
                prevIndex = numOfImages;
              }
              if ((currentImageIndex + 1) < numOfImages) {
                // If you are not on the last image, increase the index by 1
                nextIndex = currentImageIndex + 1;
              } else {
                // If you are on the last image, go on the first one
                nextIndex = 0;
              }
            }

            // Show next image
            function nextImage(e) {
              e.preventDefault();

              modalImage.attr({
                src: $('[data-index=' + nextIndex + ']').attr('src'),
                alt: $('[data-index=' + nextIndex + ']').attr('alt'),
                'data-index': $('[data-index=' + nextIndex + ']').attr('data-index')
              });
              currentImageIndex = nextIndex;

              if (currentImageIndex > 0) {
                // If you are not on the first image, decrease the index by 1
                prevIndex = currentImageIndex - 1;
              } else {
                // If you are on the first image, go on the last one
                prevIndex = numOfImages;
              }
              if ((currentImageIndex + 1) <= numOfImages) {
                // If you are not on the last image, increase the index by 1
                nextIndex = currentImageIndex + 1;
              } else {
                // If you are on the last image, go on the first one
                nextIndex = 0;
              }
            }

            // Closing Modal Window
            function closeModal(e) {
              e.preventDefault();
              modalOverlay.css({
                'z-index': '-1',
                'opacity': '0'
              });
            }

            // Attach clicked image to modal dialog
            imageAttach();
            // Open modal dialog
            modalOpen();
            // Handle click on right arrow
            nextImageAnchor.on('click', function(e) {
              nextImage(e);
            });
            // Handle click on left arrow
            prevImageAnchor.on('click', function(e) {
              prevImage(e);
            });
            // Handle click on close button
            modalCloseBtn.on('click', function(e) {
              closeModal(e);
            });
          });
        }
      },
      // Run the controllers
      init: function() {
        app.controllers();
      }
    };
    // Initialize the app
    app.init();
  })($);
