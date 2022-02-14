@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="home-section">
<div class="main-video">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" viewBox="0 0 1366 768" xml:space="preserve">
    <!-- Gaussian blur filter progression to animate -->
    <defs>
      <filter id="blur0">
        <feGaussianBlur in="SourceGraphic" stdDeviation="0 0" />
      </filter>
      <filter id="blur1">
        <feGaussianBlur in="SourceGraphic" stdDeviation="5 0" />
      </filter>
      <filter id="blur2">
        <feGaussianBlur in="SourceGraphic" stdDeviation="12 0" />
      </filter>
      <filter id="blur3">
        <feGaussianBlur in="SourceGraphic" stdDeviation="20 0" />
      </filter>
      <filter id="blur4">
        <feGaussianBlur in="SourceGraphic" stdDeviation="35 1" />
      </filter>
      <filter id="blur5">
        <feGaussianBlur in="SourceGraphic" stdDeviation="50 1" />
      </filter>
    </defs>
  </svg>

  <div class="slider">
    <div>
      <img src="assets/img/test.png" alt="" />
      <div class="titles-slider">
        <p>BON YURT
          HERSHEY’S “AMOR”</p>
        <span>DIR. ESTEBAN URIBE
        </span>
      </div>
    </div>
    <div>
      <img src="assets/img/test.png" alt="" />
    </div>
    <div>
      <img src="assets/img/test.png" alt="" />
    </div>
  </div>
</div>

<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop" />
    </filter>
  </defs>
</svg>
<!--- <div class="header">
        <h1 class="title animate-this">home page</h1>
        <div class="animate-this button">
          <a href="about.php">go to about</a>
        </div>
      </div>-->

      </main>

@push("scripts")

@endpush





@endsection
