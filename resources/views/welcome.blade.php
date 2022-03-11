@extends("layouts.main")

@section("content")
<!---<main class="bg-light" data-barba="container" data-barba-namespace="home-section">-->
<main class="bg-light  bg-center">
    <div class="main-video  ">
        <div class="bg-light_folder"></div>
        <div class="slider">
            <!---------ITEM------->
            @foreach(App\Models\HomeProject::all() as $home)
            <div>
                <video muted autoplay loop>
                    <source src="{{ $home->video }}" type="video/mp4">
                    <source src="{{ $home->video }}" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
                <div class="titles-slider">
                    <p>{{ $home->title }}</p>
                    <span>DIR. {{ $home->director }}
                    </span>
                </div>
            </div>
            @endforeach
            <!---------ITEM------->
            {{--<div>
                <img src="assets/img/banner.png" alt="" />
                <div class="titles-slider">
                    <p>BON YURT
                        HERSHEY’S “AMOR”</p>
                    <span>DIR. ESTEBAN URIBE
                    </span>
                </div>
            </div>
            <!---------ITEM------->

            <div>
                <video muted autoplay loop>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-depressed-and-tired-actor-in-front-of-the-mirror-24142-large.mp4" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
                <div class="titles-slider">
                    <p>BON YURT
                        HERSHEY’S “AMOR”</p>
                    <span>DIR. ESTEBAN URIBE
                    </span>
                </div>
            </div>--}}
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
