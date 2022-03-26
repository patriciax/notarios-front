@extends("layouts.main")

@section("content")
<!----<main class="bg-light" data-barba="container" data-barba-namespace="servicies-section">--->
<main class="bg-light no_height">
    <!-- Tab-->
    <div class="tabs">
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
                <div class="container-gallery" >

                    <div class="tabs-gallery">
                        @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)
                        <span class="tab-link @if($loop->index == 0) current @endif" data-tab="tab-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> {{ strtoupper($location->name) }} </span>
                        @endforeach
                    </div>
                    <div class="content ">

                        @foreach(App\Models\Photographer::where("type", "Location")->get() as $location)


                            <div id="tab-{{ $location->id }}" class="tab-content-general tab-content @if($loop->index == 0) current @endif">


                                <div class="name-gallery">
                                    <p> {{ strtoupper($location->name) }}</p>
                                </div>
                                <!-- Galley wrapper that contains all items -->
                                <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">
                                    @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                    <!-- Use figure for a more semantic html -->
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                        <a href="{{ $picture->image }}" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                            <!-- Thumbnail -->
                                            <img src="{{ $picture->image }}" itemprop="thumbnail" alt="Image description" style="width: 300px; height: 300px;">

                                            <div class="marco" alt=""></div>
                                        </a>
                                    </figure>
                                    @endforeach

                                </div>
                                <div class="counter">1/</div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </section>
            <section>
                <div class="container-gallery" style="gap: 2rem;">
                    <div class="tabs-gallery2">
                        @foreach(App\Models\Photographer::where("type", "Photography")->get() as $location)
                        <span class="tab-link" data-tab="tabname-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> {{ strtoupper($location->name) }} </span>
                        @endforeach
                    </div>
                    <div class="content ">
                        @foreach(App\Models\Photographer::where("type", "Photography")->get() as $location)
                        <div id="tabname-{{ $location->id }}" class="tab-content-general tab-content2 @if($loop->index == 0) current2 @endif">


                            <div class="name-gallery">
                                <p> {{ $location->name }}
                                </p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">

                                @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="{{ $picture->image }}" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="{{ $picture->image }}" itemprop="thumbnail" alt="Image description" style="width: 300px; height: 300px;">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                @endforeach

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>


</main>

@push("scripts")

@endpush





@endsection
