@extends("layouts.main")

@section("content")

<div class="bg-light ">
    <main>
        <div class="section-no end">
            <div class="slider-films">
                @foreach(App\Models\Film::all() as $film)
                <a href="#a{{ $film->id }}" class="slider-films_item" id="film_slider-{{ $film->id }}" onclick="showSection('{{ $film->id }}')">
                    <img src="{{ $film->image }}" alt="">
                </a>
                @endforeach
            </div>
        </div>
    </main>


    @foreach(App\Models\Film::all() as $index => $film)
    <section id="a{{ $film->id }}" class="section-films" style="visibility:hidden;">
        <div class="arrow">
            <a href="#top">top</a>
        </div>
        <div class="film-grid">
            <div class="film-grid_item">
                @if($film->secondary_image_file_type == 'image')
                <img src="{{ $film->secondary_image }}" alt="">
                @else

                <video class="w-100 js-open-popup" data-target="custom-popup-films-vid" autoplay muted loop id="video-{{$index}}" onclick="pauseVid('{{ $index }}')">
                    <source src="{{ $film->secondary_image }}">
                </video>

                {{---------------modals-----------------------}}
                <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup-films-vid">
                    <div class="custom-popup__holder js-custom-popup-holder"><span onclick="pauseVid('popup-{{ $index }}')" class="custom-popup__close js-close-popup"></span>
                        <div class="custom-popup__content">
                            <video controls id="video-popup-{{ $index }}">
                                <source src="{{ $film->secondary_image }}" type="video/mp4">
                                <source src="{{ $film->secondary_image }}" type="video/ogg">
                                Your browser does not support HTML video.
                            </video>

                        </div>

                    </div>
                </div>

                @endif
            </div>
            <div class="film-grid_item">
                <h3 class="title-film">{{ $film->name }}</h3>

                <p>
                    GÉNERO: {{ $film->genre }} <br>
                    FORMATO: {{ $film->format }}<br>
                    AÑO: {{ $film->year }}<br>
                    DURACIÓN: {{ $film->duration }}


                    <br> <br>SINOPSIS<br><br>

                    {!! $film->description !!}

                </p>
                <p class="see">/ SEE MORE</p>
            </div>
        </div>
    </section>
    @endforeach
</div>

<style>
    footer .copy {
        display: none;
    }

    footer {
        position: fixed;
        right: 0;
    }

    .menu li:nth-child(4) {

        border-bottom: 1px solid #121212 !important;

    }

    .slick-next.slick-arrow {
        width: 25px;
    }

    .slick-list {
        margin-right: 20px;
    }

    @media only screen and (max-width: 600px) {
        .bg-light {

            flex-direction: column;
            height: auto;
        }

        .film-grid_item .title-film {
            font-family: "DrukText";
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .film-grid {

            margin-top: 7rem;
        }

        .slider-films .slick-next {
            right: 15%;
        }

        .slider-films [type="button"] {

            position: fixed !important;
        }
    }

    .see {
        cursor: pointer;
        position: fixed;
        top: 77%;
    }

    .custom-popup__close {
        top: 50px;
        right: 50px;
    }
</style>
@push("scripts")

<script>
    function showSection(id) {

        $(".section-films").css("visibility", "hidden")
        $("#a" + id).css("visibility", "visible")

    }

    $(".see").click(function() {
        $(this).css("opacity", "0");

        $(".film-grid_item:nth-child(2)").css("height", "400");
        $(".film-grid_item:nth-child(2)").css("overflow-y", "scroll");


    });

    function pauseVid(id) {
        vid = document.getElementById("video-" + id);
        vid.pause();
    }
</script>

@endpush





@endsection