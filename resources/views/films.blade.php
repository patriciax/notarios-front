@extends("layouts.main")

@section("content")

<main class="bg-light end">
    <div class="slider-films">
        @foreach(App\Models\Film::all() as $film)
            <a href="#a" class="slider-films_item" id="film_slider-{{ $film->id }}">
                <img src="{{ $film->image }}" alt="">
            </a>
        @endforeach
        <!--<div id="film_slider-2" class="slider-films_item">
            <img src="assets/img/films2.png" alt="">
        </div>
        <div class="slider-films_item">
            <img src="assets/img/films3.png" alt="">
        </div>
        <div id="film_slider-3" class="slider-films_item">
            <img src="assets/img/films1.png" alt="">
        </div>
        <div id="film_slider-4" class="slider-films_item">
            <img src="assets/img/films1.png" alt="">
        </div>-->
    </div>



</main>

@foreach(App\Models\Film::all() as $film)
<section id="a"  class="section-films bg-light">
    <div class="arrow">
        <a href="#top">top</a>
    </div>
    <div class="film-grid">
        <div class="film-grid_item">
            <h3 class="title-film">{{ $film->name }}</h3>

            <p>
                GÉNERO: {{ $film->genre }} <br>
                FORMATO: {{ $film->format }}<br>
                AÑO: {{ $film->year }}<br>
                DURACIÓN: {{ $film->duration }}


                <br>   <br>SINOPSIS<br><br>

                {!! $film->description !!}
            </p>

            <!--<span class="btn_more">/ SEE MORE</span>
            <br>
            <p class="hidden-film">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi debitis accusantium consectetur totam quam, necessitatibus perspiciatis libero molestias cumque fugit fuga, cupiditate quisquam magnam esse fugiat ipsa tempora tempore ipsam?
            </p>-->
        </div>
        <div class="film-grid_item">
            @if($film->secondary_image_file_type == 'image')
                <img src="{{ $film->secondary_image }}" alt="">
            @else

                <video class="w-100">
                    <source src="{{ $film->secondary_image }}">
                </video>

            @endif
        </div>
    </div>
</section>
@endforeach
<style>
    footer .copy {
display: none;
    }
    footer{
        position: fixed;
    right: 0;
    }
</style>
@push("scripts")

@endpush





@endsection
