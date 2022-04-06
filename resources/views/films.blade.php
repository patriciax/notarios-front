@extends("layouts.main")

@section("content")

<div class="bg-light ">
<main >
    <div class="section-no end">
        <div class="slider-films">
            @foreach(App\Models\Film::all() as $film)
            <a href="#a{{ $film->id }}" class="slider-films_item" id="film_slider-{{ $film->id }}" onclick="showSection('{{ $film->id }}')">
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
    </div>



</main>
@foreach(App\Models\Film::all() as $film)
<section id="a{{ $film->id }}" class="section-films" style="visibility:hidden;">
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


                <br> <br>SINOPSIS<br><br>

                {!! $film->description !!}
           
            </p>
            <p class="see">/ SEE MORE</p>
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

            <video class="w-100 test" controls autoplay muted onclick="playPause()">
                <source src="{{ $film->secondary_image }}">
            </video>

            @endif
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

border-bottom: 1px solid #121212!important;

}
@media only screen and (max-width: 600px){
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
    right: 6%;
}
.slider-films [type="button"] {
 
    position: fixed!important;
}
}
.see{
    cursor: pointer;
    position: fixed;
    top: 77%;
}
</style>
@push("scripts")

    <script>

        function showSection(id){

            $(".section-films").css("display", "none")
            $("#a"+id).css("display", "block")

        }

        $(".see").click(function () {
            $(this).css("opacity", "0");

            $(".film-grid_item:nth-child(1)").css("height", "auto");
            
 
    });
      
    </script>

@endpush





@endsection
