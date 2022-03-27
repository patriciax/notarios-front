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

                                <div class="container">

                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#lightbox" data-toggle="modal">Open Lightbox</a></li>
                                    </ul>

                                    <div class="modal fade and carousel slide" id="lightbox">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <ol class="carousel-indicators">
                                                    @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                                        <li data-target="#lightbox" data-slide-to="photographer_id" ></li>

                                                        @endforeach
                                                    </ol>

                                                    <div class="carousel-inner">

                                @foreach(App\Models\PhotographerPicture::where("photographer_id", $location->id)->get() as $picture)
                                                        <div class="item ">
                                                            <img src="{{ $picture->image }}" alt="First slide">
                                                        </div>

                                                        @endforeach
                                                    </div><!-- /.carousel-inner -->
                                                    <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </div><!-- /.modal-body -->
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                </div><!-- /.container -->
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"></script>

@push("scripts")

@endpush





@endsection
