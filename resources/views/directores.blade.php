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
                            <div data-target="custom-popup{{$content['id']}}" class="js-open-popup">
                                <!-- Thumbnail -->
                   

                                <video class="w-100" controls muted autoplay>
                                    <source src="{{ $content['image'] }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                          
                            </div>

                            <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup{{$content['id']}}">
                                <div class="custom-popup__holder js-custom-popup-holder"><span class="custom-popup__close js-close-popup"></span>

                                    <div class="custom-popup__content">
                                        {{ $directorContents[$loop->index + 1]['image'] }}
                                     
                                        
                                        {{--<video controls class="test w-100">

                                            <source src="{{ $contentToShow->image }}" type="video/mp4">
                                            <source src="{{ $contentToShow->image }}" type="video/ogg">
                                            Your browser does not support HTML video.
                                        </video>--}}
                  

                                    </div>

                                </div>
                            </div>
                            @endif
                       
                        @endforeach

                    </div>
                    <div class="main-info  ">

                        <div class="info scroll">
                            <div class="name-info">
                                <h3>{{ strtoupper($director->name) }}</h3>
                            </div>
                            {!! $director->description !!}
                            <div class="logo-info">
                           <a href=""><img class="vimeo" src="http://imgfz.com/i/6nAzYHJ.png" alt=""></a>

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
            <!------------------panel 1--------------------------->
            {{--<div class="main-panel">
                <p class="main-director-names">ALEJANDRO CARREÑO </p>
                <div class="panel">
                    <div id="gallery" class="main-galeria scroll gallery">
                        <figure class="galeria_img">
                            <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                            <a href="assets/img/portafolio2.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                <!-- Thumbnail -->
                                <img src="assets/img/portafolio2.jpg" alt="">
                            </a>
                        </figure>

                        <figure class="galeria_img">
                            <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                            <a href="assets/img/portafolio2.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                <!-- Thumbnail -->
                                <img src="assets/img/portafolio1.jpg" alt="">
                            </a>
                        </figure>
                        <figure class="galeria_img">
                            <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                            <a href="assets/img/portafolio2.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                <!-- Thumbnail -->
                                <img src="assets/img/portafolio2.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="main-info  ">

                        <div class="info scroll">
                            <div class="name-info">
                                <h3>ALEJANDRO CARREÑO</h3>
                            </div>
                            <p>Alejandro se inició en el mundo de la publicidad como redactor en la agencia BBDO donde trabajó por nueve años. Allí realizó campañas muy recordadas para marcas muy importantes y también descubrió que su real pasión era contar historias a través de la cámara.
                                <br> <br>
                                Decidió entonces estudiar dirección de cinematografía en Madrid e hizo una especialización en dirección de actores.
                                <br> <br>
                                Desde hace doce años trabaja como Director en Los Notarios, compañía de la que además es socio fundador. Su capacidad para diseñar personajes y universos enmarcados en el humor lo han llevado a ser uno de los directores más destacados del país y a ganar varios premios en diferentes festivales loacles e internacionales de publicidad.
                            </p>
                            <div class="logo-info">
                                <img src="assets/img/logo2.png" alt="">
                            </div>
                            <div class="footer-info">
                                <p>2021© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!------------------panel 1--------------------------->
            <div class="main-panel">
                <p class="main-director-names">ESTEBAN URIBE</p>

                <div class="panel">
                    <div class="main-galeria scroll">
                        <div class="galeria_img">
                            <img src="assets/img/portafolio1.jpg" alt="">
                        </div>
                        <div class="galeria_img">
                            <img src="assets/img/portafolio2.jpg" alt="">
                        </div>
                        <div class="galeria_img">
                            <img src="assets/img/portafolio1.jpg" alt="">
                        </div>

                    </div>
                    <div class="main-info  ">

                        <div class="info scroll">
                            <div class="name-info">
                                <h3>ESTEBAN URIBE</h3>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the
                                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.



                            </p>
                            <hr>
                            <p> Contrary to popular belief, Lorem Ipsum is
                                not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it
                                over 2000 years old. Richard McClintock, a Latin
                                professor at Hampden-Sydney College in Virginia,
                                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                                through the cites of the word in and orem ipsum
                                dolor sit amet..", comes from a line in section
                                1.10.32</p>
                            <div class="logo-info">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                            <div class="footer-info">
                                <p>2021© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!------------------panel 1--------------------------->
            <div class="main-panel">
                <p class="main-director-names">GINA MEDINA</p>

                <div class="panel">
                    <div class="main-galeria scroll">
                        <div class="galeria_img">
                            <img src="assets/img/portafolio1.jpg" alt="">
                        </div>
                        <div class="galeria_img">
                            <img src="assets/img/portafolio2.jpg" alt="">
                        </div>
                        <div class="galeria_img">
                            <img src="assets/img/portafolio1.jpg" alt="">
                        </div>

                    </div>
                    <div class="main-info  ">

                        <div class="info scroll">
                            <div class="name-info">
                                <h3>GINA MEDINA</h3>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the
                                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.



                            </p>
                            <hr>
                            <p> Contrary to popular belief, Lorem Ipsum is
                                not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it
                                over 2000 years old. Richard McClintock, a Latin
                                professor at Hampden-Sydney College in Virginia,
                                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                                through the cites of the word in and orem ipsum
                                dolor sit amet..", comes from a line in section
                                1.10.32</p>
                            <div class="logo-info">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                            <div class="footer-info">
                                <p>2021© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>--}}

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
</style>
@push("scripts")

@endpush





@endsection
