@extends("layouts.main")

@section("content")
<!----<main class="bg-light" data-barba="container" data-barba-namespace="servicies-section">--->
<main class="bg-light">
    <!-- Tab-->
    <div class="tabs">
        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <ul>
            <li title="Features"><label for="tab1" role="button"><span>Features</span></label></li>
            <li title="Delivery Contents"><label for="tab2" role="button"><span>Delivery Contents</span></label></li>
        </ul>

        <div class="sliders">
            <div class="indicator"></div>
        </div>
        <div class="content">
            <section>
                <div class="container-gallery" style="    gap: 9rem;">

                    <div class="tabs-gallery">
                        <span class="tab-link current" data-tab="tab-1"> <span>1.</span> CITIES </span>
                        <span class="tab-link" data-tab="tab-2"><span>2.</span>TOWNS</span>
                        <span class="tab-link" data-tab="tab-3"><span>3.</span>MOUNTAINS</span>

                        <span class="tab-link" data-tab="tab-4"><span>4.</span>DESERTS</span>
                        <span class="tab-link" data-tab="tab-5"><span>5.</span>DBEACHES</span>
                        <span class="tab-link" data-tab="tab-6"><span>6.</span>RIVERS</span>
                        <span class="tab-link" data-tab="tab-7"><span>7.</span>LAKES</span>
                        <span class="tab-link" data-tab="tab-8"><span>8.</span>AMAZON</span>
                    </div>
                    <div class="content ">
                        <div id="tab-1" class="tab-content current">


                            <div class="name-gallery">
                                <p> CITIES</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">

                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        <div id="tab-2" class="tab-content">


                            <div class="name-gallery">
                                <p>TOWNS</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>


                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <div class="name-gallery">
                                <p>MOUNTAINS</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">

                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-gallery">
                    <div class="tabs-gallery2">
                        <span class="tab-link current2" data-tab="tabname-1"> <span>1.</span> MARTIN KOHLER
                        </span>
                        <span class="tab-link" data-tab="tabname-2"><span>2.</span>ALBERTO OVIEDO</span>
                        <span class="tab-link" data-tab="tabname-3"><span>3.</span>MAURICIO CANDELAS</span>
                        <span class="tab-link" data-tab="tabname-4"><span>4.</span>MATEO MEDINA</span>
                        <span class="tab-link" data-tab="tabname-5"><span>5.</span>eUGENIO MAZZINGHI</span>
                        <span class="tab-link" data-tab="tabname-6"><span>6.</span>MAURICIO CIFUENTES</span>
                    </div>
                    <div class="content ">
                        <div id="tabname-1" class="tab-content2 current2">


                            <div class="name-gallery">
                                <p> MARTIN KOHLER
                                </p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">

                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        <div id="tabname-2" class="tab-content2">


                            <div class="name-gallery">
                                <p>ALBERTO OVIEDO</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>


                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                        <div id="tabname-3" class="tab-content2">
                            <div class="name-gallery">
                                <p>MAURICIO CANDELA</p>
                            </div>
                            <!-- Galley wrapper that contains all items -->
                            <div id="gallery" class="gallery slider-servicess" itemscope itemtype="http://schema.org/ImageGallery">

                                <!-- Use figure for a more semantic html -->
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                                    <a href="https://unsplash.it/1200/900/?image=702" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <!-- Thumbnail -->
                                        <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description">

                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=695" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=695" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://unsplash.it/1200/900/?image=675" data-caption="Mysterious ocean<br><em class='text-muted'>© Barn Images</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                        <img src="https://unsplash.it/400/300/?image=675" itemprop="thumbnail" alt="Image description">
                                        <div class="marco" alt=""></div>
                                    </a>
                                </figure>

                            </div>
                            <div class="counter">1/</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


</main>

@push("scripts")

@endpush





@endsection
