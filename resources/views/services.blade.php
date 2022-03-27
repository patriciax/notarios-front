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
                            <label for="mpo-modal-controller" class="btn">open modal</label>


                                <div class="mpo-modal">
                                    <input type="checkbox" id="mpo-modal-controller" class="mpo-modal-open" hidden>
                                    <div class="mpo-modal-wrap">
                                        <label for="mpo-modal-controller" class="mpo-modal-overlay"></label>
                                        <div class="mpo-modal-body">

                                            <label for="mpo-modal-controller" class="mpo-modal-close">&times;</label>

                                            <input type="radio" name="content-nav" id="modal-content-1" class="modal-radio" checked hidden />
                                            <input type="radio" name="content-nav" id="modal-content-2" class="modal-radio" hidden />
                                            <input type="radio" name="content-nav" id="modal-content-3" class="modal-radio" hidden />
                                            @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                            <div class="mpo-modal-slide content-1">
                                                <div class="mpo-modal-content">
                                                    <h2>Example Modal - Slide 1</h2>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>

                                                    <div class="mpo-modal-nav">
                                                        <label for="modal-content-2" class="next-slide">&#8250;&#8250;</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>

                                </div>


                                <!--
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
