@extends("layouts.main")

@section("content")
<!---<main class="bg-light" data-barba="container" data-barba-namespace="home-section">-->
<main class="bg-light  bg-center home-main">
    <div class="main-video  ">
        {{-- <div class="bg-light_folder"></div>--}}
        <div class="slider gallery">
            <!---------ITEM------->
            @foreach(App\Models\HomeProject::all() as $home)
            <div>
                <div data-target="custom-popup" class="main-mask js-open-popup" onclick="playPause()">
                    <video muted autoplay loop class="gallery">

                        <source src="{{ $home->video }}" type="video/mp4">
                        <source src="{{ $home->video }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <svg class="svg">
                        <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
                            <path d="M1,0.128 H0.933 A0.015,0.023,0,0,1,0.918,0.105 V0.055 A0.015,0.023,0,0,0,0.902,0.032 H0.713 A0.015,0.023,0,0,0,0.697,0.055 V0.105 A0.015,0.023,0,0,1,0.682,0.128 H0.052 A0.015,0.023,0,0,0,0.036,0.152 V1 A0.015,0.023,0,0,0,0.052,1 H1 A0.015,0.023,0,0,0,1,1 V0.152 A0.015,0.023,0,0,0,1,0.128"></path>
                        </clipPath>
                    </svg>
                </div>


                <div class="titles-slider">
                    <p>BON YURT
                        HERSHEY’S “AMOR”</p>
                    <span>DIR. ESTEBAN URIBE
                    </span>
                </div>

            </div>
            @endforeach




        </div>
        {{---------------modals-----------------------}}

        <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup">
            <div class="custom-popup__holder js-custom-popup-holder"><span class="custom-popup__close js-close-popup"></span>

                <div class="custom-popup__content">
                @foreach(App\Models\HomeProject::all() as $home)
                     <video autoplay loop class="test">

                        <source src="{{ $home->video }}" type="video/mp4">
                        <source src="{{ $home->video }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    @endforeach
                </div>

            </div>
        </div>

    </div>


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
