@extends("layouts.main")

@section("content")
<!----<main class="bg-light" data-barba="container" data-barba-namespace="servicies-section">--->
<main class="bg-light no_height nones">
    <!-- Tab-->
    <div class="tabs ">
        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <ul>
            <li title="Features"><label class="logo-old" for="tab1" role="button"><span class="menu-link">LOCATIONS</span></label></li>
            <li title="Delivery Contents "><label class="logo-new" for="tab2" role="button"><span class="menu-link">PHOTOGRAPHY</span></label></li>
        </ul>

        <div class="sliders">
            <div class="indicator"></div>
        </div>
        <div class="content">
            <section>
                <div class="container-gallery">
                    <div class="tabs-gallery">
                        <div class="ab-tab">
                            @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)
                            <span class="tab-link @if($loop->index == 0) current @endif" data-tab="tab-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span>
                                <p>{{ strtoupper($location->name) }}</p>
                            </span>
                            @endforeach
                        </div>

                    </div>
                    <div class="content ">
                        @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)
                        <div id="tab-{{ $location->id }}" class="tab-content-general tab-content @if($loop->index == 0) current @endif">
                            <div class="name-gallery">
                                <p> {{ strtoupper($location->name) }}</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div class=" slider-servicess ">
                                @if( $picture = App\Models\PhotographerPicture::where("photographer_id", $location->id)->first())
                                <!-- Use figure for a more semantic html -->

                                <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                <a href="#galerias" class="sect-fil" data-width="1200" data-height="900" onclick="showSection('{{ $location->id }}')">
                                    <!-- Thumbnail -->
                                    <img src="{{ $picture->image }}" style="width: 300px; height: 300px;">

                                    <div class="marco" alt=""></div>
                                </a>

                                @endif

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section>
                <div class="container-gallery">
                    <div class="tabs-gallery2">
                        <div class="ab-tab">
                            @foreach(App\Models\Photographer::where("type", "Photography")->get() as $location)
                            <span class="tab-link" data-tab="tabname-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> <span>
                                    <p>{{ strtoupper($location->name) }}</p>
                                </span> </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="content ">
                        @foreach(App\Models\Photographer::where("type", "Photography")->get() as $location)
                        <div id="tabname-{{ $location->id }}" class="tab-content-general tab-content2 @if($loop->index == 0) current2 @endif">
                            <div class="name-gallery">
                                <p> {{ strtoupper($location->name) }}</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div class=" slider-servicess ">
                                @if( $picture = App\Models\PhotographerPicture::where("photographer_id", $location->id)->first())
                                <!-- Use figure for a more semantic html -->

                                <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                <a href="#galerias" class="sect-fil" data-width="1200" data-height="900" onclick="showSection('{{ $location->id }}')">
                                    <!-- Thumbnail -->
                                    <img src="{{ $picture->image }}" style="width: 300px; height: 300px;">

                                    <div class="marco" alt=""></div>
                                </a>

                                @endif
                                <div class="counter">1/</div>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
        </div>
    </div>




</main>
<section id="galerias" class="sec-galeria bg-light ">
    <div class="arrow">
        <a href="#top">top</a>
    </div>
    <div id="gallery" class="gallery">

        @foreach(App\Models\PhotographerPicture::get() as $picture)
        <!-- Use figure for a more semantic html -->
        <figure class="sec-services  services-{{$picture->photographer_id}}">

            <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
            <a href="{{ $picture->image }}" data-width="1200" data-height="900">
                <!-- Thumbnail -->
                <img src="{{ $picture->image }}">
            </a>
        </figure>

        @endforeach

    </div>
</section>
<style>
    .ab-tab {
        /* position: absolute;
    top: 32%;
    left: 20%;*/
        display: inline-flex;
        flex-direction: column;
        align-items: start;
    }

    /*.pswp--has_mouse .pswp__button--arrow--left, .pswp--has_mouse .pswp__button--arrow--right {
 opacity: 0;
    display: none;
}*/
    #gallery figure {
        display: block;
    }

    figure img {
        max-width: 100%;
        object-fit: cover;
        width: 100%;
        height: 250px;
        border-radius: 7px;
    }

    .gallery {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 2rem;
        justify-content: center;
        align-items: center;
    }

    .menu li:nth-child(3) {

        border-bottom: 1px solid #121212 !important;

    }

    .sec-galeria {
        opacity: 0;
        height: 0;
        transition: 0.6s;
        display: none;
        padding-top: 12rem;
        padding-left: 5rem;
        padding-right: 5rem;
        padding-bottom: 5rem;
    }

    .sec-galeria-act {
        opacity: 1;
        height: -webkit-fill-available;
        display: block;
        overflow-y: scroll;
    }

    .arrow {

        margin-left: -3rem;
    }

    @media only screen and (max-width: 600px) {
        .ab-tab {
            position: relative;
            top: auto;
            left: auto;
        }

        .gallery {
            grid-template-columns: 1fr;

        }

        .container-gallery {

            gap: 0rem;
        }

        .marco::after {
            margin-left: auto;
            width: 293px;
            top: 6%;
            left: 0;
            height: 279px;
        }

        .counter {

            display: none;
        }

        .sec-galeria {

            padding-top: 10rem;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-bottom: 2rem;
        }

        .pswp--zoom-allowed .pswp__img {
            object-fit: contain;

        }

    }

    .arrow {

        top: 3rem;
    }

    .content p {
        font-size: 1rem;
    }

    .tabs ul {
        right: 280px;
        margin-left: 0;
    }
</style>
@push("scripts")

<script>
    function showSection(id) {

        $(".sec-services").css("display", "none")

        $(".services-" + id).css("display", "block")

    }



    $(".sect-fil").click(function() {
        $("html, body").css({
            overflow: "auto",
            height: "100%",
        });
        $(".sec-galeria").addClass("sec-galeria-act");
        $(".nones").addClass("sec-galeria ");

        //$(".main-home").css("height", "auto");

    });
    /**********arrow******************** */
    $(".arrow").click(function() {
        $(".sec-galeria").removeClass("sec-galeria-act");
        $("html, body").css({
            overflow: "auto",
            height: "100%",
        });

        $(".nones").removeClass("sec-galeria");
    });



    $(".logo-new").click(function() {
        $(".main-logo-img").attr("src", "http://imgfz.com/i/JqfXFGS.png");
        $(".main-logo-img").css("width", "217px");


    });
    $(".logo-old").click(function() {
        $(".main-logo-img").attr("src", "http://imgfz.com/i/DWBfqR1.png");
        $(".main-logo-img").css("width", "130px");

    });
</script>

@endpush





@endsection