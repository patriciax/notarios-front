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
    @stack('styles')
</head>

<body data-barba="wrapper">
  <div class="load-container">
    <div class="loading-screen"></div>
  </div>


    <div class="main-home">
        <header>
          <div class="main-logo" data-aos="fade"
     data-aos-duration="3000">
            <img src="assets/img/logo.png" alt="" />
          </div>


          <input type="checkbox" id="toggle" class="input-toggler" />
          <label for="toggle" class="menu-toggler">
            <span class="menu-toggler-line"></span>
            <span class="menu-toggler-line"></span>
            <span class="menu-toggler-line"></span>
          </label>

          <aside class="sidebar" data-aos="fade-left"
     data-aos-duration="3000">
            <ul class="menu">
              <li><a class="menu-link" href="/">Home</a></li>
              <li><a class="menu-link" href="directores">DIRECTORES</a></li>
              <li><a class="menu-link" href="about">ABOUT US</a></li>
             <!-- <li><a class="menu-link" href="#">SERVICES</a></li>
              <li><a class="menu-link" href="#">FILMS</a></li>-->
              <li><a class="menu-link" href="contact">CONTACT</a></li>
              <li><a class="menu-link" href="private">Private </a></li>
            </ul>
          </aside>
        </header>


    @yield("content")




    </div>
<footer>
  <div>
    <p >
      NOTARIOS VISUAL KNOWMADS/FILM PRODUCTION COMPANY/BASED IN BOGOTÁ,
      COLOMBIA
    </p>
  </div>

  <div>
    <a href="" target="_blank"> INSTAGRAM </a>
    <a href="" target="_blank"> EMAIL</a>
  </div>
</footer>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script defer src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="{{ url('assets/js/main.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
      setTimeout(function () {
            $('#pre-loader').fadeOut(300);
        }, 1500)
</script>
    @stack('scripts')

</body>

</html>
