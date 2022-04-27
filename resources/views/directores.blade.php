@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="director-section">

    <section class="main-director">
        <p class="txt-title">DIRECTORS</p>
        <div class="main-director_item ">
            <!------------------panel 1--------------------------->
            @foreach(App\Models\Director::all() as $director)
            @php
            $directorContents = App\Models\DirectorContent::where("director_id", $director->id)->get()->toArray();
            @endphp
            <div class="main-panel">
                <div class="panel">
                    <div class="main-galeria scroll gallery">
                        @foreach($directorContents as $content)

                        @if(($loop->index + 1) % 2 != 0)

                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <div data-target="custom-popup-directors{{ $content['id'] }}" class="js-open-popup">
                            <!-- Thumbnail -->
                            <video muted loop autoplay style="width: 100%;">
                                <source src="{{ $content['image'] }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
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
                                <p>{{ date("Y") }}© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                            </div>
                        </div>
                    </div>


                    @foreach($directorContents as $content)

                    @if(($loop->index + 1) % 2 != 0)

                    <div class="custom-popup js-custom-popup" id="custom-popup-directors{{$content['id']}}" data-popup="custom-popup-directors{{$content['id']}}">
                        <div class="custom-popup__holder js-custom-popup-holder"><span onclick="pauseVid(`{{$content['id']}}`)" class="custom-popup__close js-close-popup"></span>

                            <div class="custom-popup__content">
                                @if(isset($directorContents[$loop->index + 1]))
                                @if(isset($directorContents[$loop->index + 2]))
                                <video controls style="width: 100%;" id="video-{{ $content['id'] }}" onended="playNext({{ $content['id'] }}, {{ $directorContents[$loop->index + 2]['id']}})">
                                    @else
                                    <video controls style="width: 100%;" id="video-{{ $content['id'] }}" onended="playNext({{ $content['id'] }}, {{ $directorContents[0]['id']}})">
                                        @endif
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
                <p class="main-director-names">{{ strtoupper($director->name) }}</p>
            </div>
            @endforeach
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

        .main-logo img,
        .menu li:nth-child(2),
        .menu li:nth-child(3),
        .menu li:nth-child(4),
        .menu li:nth-child(5),
        .menu li:nth-child(6),
        .menu li:nth-child(7),
        .menu li:nth-child(5),
        footer .copy,
        .main-logo img {
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

        border-bottom: 1px solid #121212 !important;

    }

    header {

        z-index: 0;
    }
</style>
@push("scripts")

<script>
    function pauseVid(id) {
        vid = document.getElementById("video-" + id);
        vid.pause();
    }

    function playNext(current, next) {
        currentModal = document.querySelector(`[data-popup=custom-popup-directors${current}] span.js-close-popup`)
        nextModal = document.querySelector(`[data-target=custom-popup-directors${next}]`)
        nextVideo = document.querySelector(`#video-${next}`)
        currentModal.click()
        nextModal.click()
        nextVideo.play()
    }
</script>


@endpush





@endsection