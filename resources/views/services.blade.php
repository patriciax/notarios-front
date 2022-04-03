@extends("layouts.main")

@section("content")
<!----<main class="bg-light" data-barba="container" data-barba-namespace="servicies-section">--->
<main class="bg-light no_height nones">
    <!-- Tab-->
    <div class="tabs ">
        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <ul>
            <li title="Features"><label for="tab1" role="button"><span>LOCATIONS </span></label></li>
            <li title="Delivery Contents"><label for="tab2" role="button"><span>PHOTOGRAPHY</span></label></li>
        </ul>

        <div class="sliders">
            <div class="indicator"></div>
        </div>
        <div class="content">
            <section>
                <div class="container-gallery">

                    <div class="tabs-gallery">
                        @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)
                        <span class="tab-link @if($loop->index == 0) current @endif" data-tab="tab-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> <p>{{ strtoupper($location->name) }}</p> </span>
                        @endforeach
                    </div>
                    <div class="content ">

                        @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)
                        <div id="tab-{{ $location->id }}" class="tab-content-general tab-content @if($loop->index == 0) current @endif">
                            <div class="name-gallery">
                                <p> {{ strtoupper($location->name) }}</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div  class=" slider-servicess " >
                                @if(App\Models\PhotographerPicture::where("photographer_id", $location->id)->first())
                                @php
                                    $picture = App\Models\PhotographerPicture::where("photographer_id", $location->id)->first();
                                @endphp
                                <!-- Use figure for a more semantic html -->
                              
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="#galerias" class="sect-fil" data-width="1200" data-height="900" >
                                        <!-- Thumbnail -->
                                        <img src="{{ $picture->image }}"  style="width: 300px; height: 300px;">

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
                <div class="container-gallery" >
                    <div class="tabs-gallery2">
                        @foreach(App\Models\Photographer::where("type", "Photography")->get() as $location)
                        <span class="tab-link" data-tab="tabname-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> <span>
                            <p>{{ strtoupper($location->name) }}</p>
                        </span> </span>
                        @endforeach
                    </div>
                    <div class="content ">
                        @if(App\Models\Photographer::where("type", "Photography")->first())
                        @php
                            $picture = App\Models\PhotographerPicture::where("photographer_id", $location->id)->first();
                        @endphp
                        <div id="tabname-{{ $location->id }}" class="tab-content-general tab-content2>
                            <div class="name-gallery">
                                <p> {{ $location->name }}
                                </p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess">
                            <a href="#galerias" class="sect-fil" data-width="1200" data-height="900" >
                                        <!-- Thumbnail -->
                                        <img src="{{ $picture->image }}"  style="width: 300px; height: 300px;">

                                        <div class="marco" alt=""></div>
                                    </a>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        @endif
                    </div>
                </div>
        </div>
    </div>


  

</main>
<section id="galerias" class="sec-galeria" >
<div class="arrow">
        <a href="#top">top</a>
    </div>
<div id="gallery" class="gallery slider-servicess">

@foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
<!-- Use figure for a more semantic html -->
<figure>
    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
    <a href="{{ $picture->image }}"  data-width="1200" data-height="900">
        <!-- Thumbnail -->
        <img src="{{ $picture->image }}"  style="width: 300px; height: 300px;">

   
    </a>
</figure>

@endforeach

</div>
    </section>
<style>


.menu li:nth-child(3) {

border-bottom: 1px solid #121212!important;

}
.sec-galeria {
    opacity: 0;
    height: 0;
    transition: 0.6s;
    display: none;
}
.sec-galeria-act{
    opacity: 1;
    height: 100vh;
    display: block;
}
</style>
@push("scripts")

<script>
   $(".sect-fil").click(function () {

       
        $("html, body").css({
            overflow: "hidden",
            height: "100%",
        });
        $(".sec-galeria").addClass("sec-galeria-act");
        $(".nones").addClass("sec-galeria ");

      
    });
    /**********arrow******************** */
    $(".arrow").click(function () {
        $(".sec-galeria").removeClass("sec-galeria-act"");
        $("html, body").css({
            overflow: "auto",
            height: "100%",
        });
 
      
    });
</script>

@endpush





@endsection

