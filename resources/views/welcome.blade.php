@extends("layouts.main")

@section("content")
<!---<main class="bg-light" data-barba="container" data-barba-namespace="home-section">-->
<main class="bg-light  bg-center home-main">
    <div class="main-video  ">
        {{-- <div class="bg-light_folder"></div>--}}
        <div class="slider gallery">
            <!---------ITEM------->
            @foreach(App\Models\HomeProject::orderBy("order")->get() as $home)
            <div>
                <div class="video-mask" >
                <div data-target="custom-popup{{$home->id}}" class="main-mask js-open-popup" >
                <p class="number">Nº 512</p>
                    <video muted autoplay loop class="gallery" onclick="playVid()">

                        <source src="{{ $home->video }}" type="video/mp4">
                        <source src="{{ $home->video }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <svg class="svg">
                        <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
                            <path d="M0.985,0.097 H0.897 A0.015,0.023,0,0,1,0.88,0.073 V0.023 A0.015,0.023,0,0,0,0.866,0 H0.676 A0.015,0.023,0,0,0,0.66,0.023 V0.073 A0.016,0.024,0,0,1,0.646,0.097 H0.015 A0.015,0.023,0,0,0,0,0.12 V0.977 A0.015,0.023,0,0,0,0.015,1 H0.985 a0.015,0.023,0,0,0,0.015,-0.023 V0.12 A0.015,0.023,0,0,0,0.985,0.097"></path>
                        </clipPath>
                    </svg>

                    <div class="clipped"></div>
                </div>


                <div class="titles-slider">
                    <p>{{ strtoupper($home->title) }}</p>
                    <span>DIR. {{ strtoupper($home->director) }}
                    </span>
                </div>
                </div>


            </div>
            @endforeach




        </div>
        {{---------------modals-----------------------}}
        @foreach(App\Models\HomeProject::orderBy("order")->get() as $home)
        <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup{{$home->id}}">
            <div class="custom-popup__holder js-custom-popup-holder"><span onclick="pauseVid()"  class="custom-popup__close js-close-popup"></span>

                <div class="custom-popup__content">

                    <video  controls  class="test-video">

                        <source src="{{ $home->video_comercial }}" type="video/mp4">
                        <source src="{{ $home->video_comercial }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>

                </div>

            </div>
        </div>
        @endforeach

    </div>


    <!--- <div class="header">
        <h1 class="title animate-this">home page</h1>
        <div class="animate-this button">
          <a href="about.php">go to about</a>
        </div>
      </div>-->




</main>
<style>
    .menu li:nth-child(1) {

   border-bottom: 1px solid #121212!important;
 
}
</style>

<script>
      var vid = document.querySelector("test-video"); 
function playVid() { 
    $('.test-video')[0].play();
} 

function pauseVid() { 
  vid.pause(); 
} 


</script>
@push("scripts")

@endpush





@endsection

