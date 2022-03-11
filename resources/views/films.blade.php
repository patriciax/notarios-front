@extends("layouts.main")

@section("content")

<main class="bg-light end">
    <div class="slider-films">
        <a href="#a" class="slider-films_item">
            <img src="assets/img/films1.png" alt="">
        </a>
        <div id="film_slider-2" class="slider-films_item">
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
        </div>
    </div>



</main>

<section id="a"  class="section-films bg-light">
    <div class="arrow">
        <a href="#top">top</a>
    </div>
    <div class="film-grid">
        <div class="film-grid_item">
            <h3 class="title-film">LA VIRGEN NEGRA
                SHORT FILM</h3>

            <p>
                GÉNERO: Ficción <br>
                FORMATO: Cortometraje<br>
                AÑO: 2018<br>
                DURACIÓN: 18 mins


                <br>   <br>SINOPSIS<br><br>

                Belisario espera, su mujer está muy enferma; él trabaja silenciosamente en sus ovejas hasta que llega un curandero. El curandero ha venido a salvar a la esposa de Belisario y le indica que debe traer un objeto enterrado en la nieve en lo alto de las montañas de los Andes, con el fin de usarlo en un ritual para recuperarla a ella. La suerte de la esposa depende enteramente de Belisario y las decisiones que ha tomado.
            </p>

            <span class="btn_more">/ SEE MORE</span>
            <br>
            <p class="hidden-film">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi debitis accusantium consectetur totam quam, necessitatibus perspiciatis libero molestias cumque fugit fuga, cupiditate quisquam magnam esse fugiat ipsa tempora tempore ipsam?
            </p>
        </div>
        <div class="film-grid_item">
            <img src="assets/img/fiilmtest.png" alt="">
        </div>
    </div>
</section>
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
