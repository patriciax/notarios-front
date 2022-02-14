function myscripts() {
  /*************************** */
  // Slick slider init

  $(".slider").slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    draggable: false,
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

  /******************************* */
  $(".main-info").on("click", function () {
    $(this).toggleClass("open");
  });
  $(".main-info").on("click", function () {
    $(".main-director-names").toggleClass("opacity");
  });



  $(".main-panel p").click(function () {
    $(this).toggleClass("active");
    $('.main-panel p').parent().find(".panel").removeClass("panel-active");

    $(this).parent().find(".panel").toggleClass("panel-active");

  });
}
/***********loader*****/

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
});
myscripts();
