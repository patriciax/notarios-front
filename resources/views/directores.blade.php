@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="director-section">

    <section class="main-director">
        <p class="txt-title">DIRECTORS</p>
        <div class="main-director_item ">
            <!------------------panel 1--------------------------->
            @foreach(App\Models\Director::all() as $director)
            <div class="main-panel">
                <div class="panel">
                    <div class="main-galeria scroll gallery">
                        @php
                            $directorContents = App\Models\DirectorContent::where("director_id", $director->id)->get()->toArray();
                        @endphp
                        @foreach($directorContents as $content)

                            @if(($loop->index + 1) % 2 != 0)

                            <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                            <div data-target="custom-popup{{$content['id']}}" class="js-open-popup" onclick="playVid(`{{ $content[id] }}`)">
                                <!-- Thumbnail -->


                                <video class="w-100" controls muted autoplay style="width: 100%;">
                                    <source src="{{ $content['image'] }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup{{$content['id']}}">
                                <div class="custom-popup__holder js-custom-popup-holder"><span class="custom-popup__close js-close-popup"></span>

                                    <div class="custom-popup__content">
                                        @if(isset($directorContents[$loop->index + 1]))

                                        <video controls class="test w-100" style="width: 100%;" id="video-{{ $home->id }}">

                                            <source src="{{ $directorContents[$loop->index + 1]['image'] }}" type="video/mp4">
                                            <source src="{{ $directorContents[$loop->index + 1]['image'] }}" type="video/ogg">
                                            Your browser does not support HTML video.
                                        </video>
                                        @endif


                                    </div>

                                </div>
                            </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="main-info  ">

                       <div>

                       </div>
                       <div class="info scroll">
                            <div class="name-info">
                                <h3>{{ strtoupper($director->name) }}</h3>
                            </div>
                            {!! $director->description !!}
                            <div class="logo-info">
                           <a href="" target="__blank"><img class="vimeo" src="http://imgfz.com/i/6nAzYHJ.png" alt=""></a>

                                <img src="assets/img/logo.png" alt="">
                            </div>
                            <div class="footer-info">
                                <p>2021© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                            </div>
                        </div>
                    </div>
                </div>
               <p class="main-director-names">{{ strtoupper($director->name) }}</p>
            </div>

            @endforeach


            <!---- <div class="main-director_item">
      <div class="main-director-names">
        <p data-aos="fade-up" data-aos-duration="1000">FELIPE CORTES



        </p>
        <p data-aos="fade-up" data-aos-duration="2000">ESTEBAN URIBE
        </p>
        <p data-aos="fade-up" data-aos-duration="2500">GINA MEDINA
        </p>
        <p data-aos="fade-up" data-aos-duration="3000">KLAUS OBERMEYER
        </p>
        <p data-aos="fade-up" data-aos-duration="3000">IPSUM LOREMSDF
        </p>
      </div>
    </div>--->
    </section>



</main>
<style>
    .ig {
        display: none;
    }

    .menu li:nth-child(2),
    .menu li:nth-child(3),
    .menu li:nth-child(4),
    .menu li:nth-child(5),
    .menu li:nth-child(6),
    .menu li:nth-child(7),
    .menu li:nth-child(5),
    footer .copy,
    .main-logo img {
        display: none;
    }

    @media only screen and (max-width: 600px) {
        .main-logo img,.menu li:nth-child(2), .menu li:nth-child(3), .menu li:nth-child(4), .menu li:nth-child(5), .menu li:nth-child(6), .menu li:nth-child(7), .menu li:nth-child(5), footer .copy, .main-logo img  {
            display: block;
        }
    }

    main {
        padding-top: 0rem;
    }

    .main-director {
        margin-top: 0rem;
    }
    .menu li:nth-child(2) {

border-bottom: 1px solid #121212!important;

}
header {
 
    z-index: 0;
}
</style>
@push("scripts")

<script>
      
function playVid(id) { 
    vid = document.getElementById("video-"+id); 
    $('#video-'+id)[0].play();
} 

function pauseVid(id) {
    vid = document.getElementById("video-"+id); 
    vid.pause(); 
} 


</script>


@endpush





@endsection
