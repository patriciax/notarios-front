<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Notarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/iso.png') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://photoswipe.com/site-assets/site.css?v=4.1.1-1.0.4">
    <link rel="stylesheet" href="https://photoswipe.com/dist/photoswipe.css?v=4.1.1-1.0.4">
    <link rel="stylesheet" href="https://photoswipe.com/dist/default-skin/default-skin.css?v=4.1.1-1.0.4">
    @stack('styles')
</head>
<!----<body data-barba="wrapper">---->

<body>
    <!----<div class="load-container">
    <div class="loading-screen"></div>
  </div>--->


    <div class="main-home">
        <header>
            <div class="main-logo" data-aos="fade" data-aos-duration="3000">
                <img src="assets/img/logo.png" alt="" />
            </div>


            <input type="checkbox" id="toggle" class="input-toggler" />
            <label for="toggle" class="menu-toggler">
                <span class="menu-toggler-line"></span>
                <span class="menu-toggler-line"></span>
                <span class="menu-toggler-line"></span>
            </label>

            <aside class="sidebar">
                <ul class="menu">
                    <li><a class="menu-link" href="/">Home</a></li>
                    <li><a class="menu-link" href="directores">DIRECTORS</a></li>

                    <li><a class="menu-link" href="services">SERVICES</a></li>
                    <li><a class="menu-link" href="films">FILMS</a></li>
                    <li><a class="menu-link" href="about">ABOUT US</a></li>
                    <li><a class="menu-link" href="contact">CONTACT</a></li>
                    <li><a class="menu-link" href="private">Private </a></li>
                </ul>
            </aside>
        </header>


        @yield("content")




    </div>
    <footer>
        <div>
            <p class="copy">
                NOTARIOS VISUAL KNOWMADS/FILM PRODUCTION COMPANY/BASED IN BOGOTÁ,
                COLOMBIA
            </p>
        </div>

        <div>
            <a href="" target="_blank" class="ig"> INSTAGRAM </a>

        </div>
    </footer>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Background of PhotoSwipe.
           It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>
        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
            <!-- Container that holds slides.
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!---<script defer src="https://unpkg.com/@barba/core"></script>--->
 <!----   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>--->
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
    <script src="{{ url('assets/js/photoswipe.js') }}"></script>
    <script>
        AOS.init();
    </script>

    <script>
        setTimeout(function() {
            $('#pre-loader').fadeOut(300);
        }, 1500)
    </script>
    @stack('scripts')

</body>

</html>
