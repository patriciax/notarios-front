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
                <div class="container-gallery">

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
                            <div id="gallery" class="gallery slider-servicess">
                                @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                <!-- Use figure for a more semantic html -->
                                <figure>
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="{{ $picture->image }}" data-width="1200" data-height="900">
                                        <!-- Thumbnail -->
                                        <img src="{{ $picture->image }}" style="width: 300px; height: 300px;">

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
                        <span class="tab-link" data-tab="tabname-{{ $location->id }}"> <span>{{ $loop->index + 1 }}.</span> <span>{{ strtoupper($location->name) }}</span> </span>
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
                            <div id="gallery" class=" slider-servicess">
                                <div class="wrapper">
                                    <a href="#demo-modal"><img src="{{ $picture->image }}"  style="width: 300px; height: 300px;">

<div class="marco" alt=""></div></a>
                                </div>

                                <div id="demo-modal" class="modal">
                                    <div class="modal__content">
                                        <h1>CSS Only Modal</h1>

                                        <p>
                                            You can use the :target pseudo-class to create a modals with Zero JavaScript. Enjoy!
                                        </p>

                                        <div class="modal__footer">
                                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">@denicmarko</a>
                                        </div>

                                        <a href="#" class="modal__close">&times;</a>
                                    </div>
                                </div>
                                <!--
                                      @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                       holisç
                                       @endforeach
                                    <a href="{{ $picture->image }}"  data-width="1200" data-height="900">

                                        <img src="{{ $picture->image }}"  style="width: 300px; height: 300px;">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>---}}---->



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
