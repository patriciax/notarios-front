
@extends("layouts.main")

@section("content")
<main class="bg-light no_height" data-barba="container" data-barba-namespace="about-section">

<section data-aos="fade"
     data-aos-duration="3000">
    <figure class="card-flip fancy-hover" >
        <div class="card-flip__flipper">
            <!-- FRONT SIDE -->
            <figure class="card-flip__content card-flip__content--front">
                <img class="fancy-hover__image" src="http://imgfz.com/i/Rn3NkQj.png">
                <div class="fancy-hover__fancy"></div>
            </figure>
            <!-- BACK SIDE -->
            <figure class="card-flip__content card-flip__content--back">
                <p>
                Un Visual Knowmad es una evolución del
“filmaker” tradicional en uno más abierto y
universal. Ser un Visual Knowmad no es ponerse
una etiqueta de moda, no es una estrategia de
mercadeo, ni una forma de vendernos mejor. Ser
un Visual Knowmad es un impulso interior que
nos obliga a ir más allá, es una necesidad que
nos saca de nuestra zona de confort para
aprender del todo. <br> <br>
Es la búsqueda de una conexión con nosotros
mismos y nuestro entorno; es el uso de
herramientas pasadas y nuevas; es el cúmulo de
experiencias buenas y malas; es un encuentro
con el diferente y con lo diferente; es el
goce de compartir y colaborar con el otro. <br> <br>
Ser un Visual Knowmad es la forma necesaria e
innata con que podemos enfrentar el futuro. Es
un homenaje a lo audiovisual; es un culto a la
comunidad, a la curiosidad y a lo desconocido.</p>

                    <div class="team">
                        <div class="team-item">
                            <img src="assets/img/team1.png" alt="">
                        </div>
                        <div class="team-item">
                            <img src="assets/img/team2.png" alt="">
                        </div>
                        <div class="team-item">
                            <img src="assets/img/team3.png" alt="">
                        </div>
                        <div class="team-item">
                            <img src="assets/img/team4.png" alt="">
                        </div>

                    </div>

                </figure>
        </div>
    </figure>
</section>
<style>

    footer .copy {
display: none;
    }
    footer{
        position: fixed;
    right: 0;
    }
    main {
    padding-top: 6rem;
}
</style>

</main>
@push("scripts")

@endpush





@endsection
