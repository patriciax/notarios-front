@extends("layouts.main")

@section("content")
<main class=" bg-dark--private" data-barba="container" data-barba-namespace="contact-section">
    <div class="private-main">
        <h4 class="private-a">
            {{ $project->name }}
        </h4>

        @if($project->image_type == 'image')
        <div class="gallery">
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                <a href="{{ $project->image }}" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img class="w-100" src="{{ $project->image }}" itemprop="thumbnail" alt="Image description">

                </a>
            </figure>

        </div>
        @elseif($project->image_type == 'image')

        <video class="w-100" controls>
            <source src="{{ $project->image }}">
        </video>

        @elseif($project->image_type == 'pdf')

        <a href="{{ $project->image }}" target="_blank">
            PDF
        </a>

        @endif

        @php
        $media = App\Models\ProjectSecondaryContent::where("project_id", $project->id)->get()
        @endphp

        @foreach($media as $index => $content)
        <div class="item-private">
            @if($content->type == 'image')
            <div class="gallery">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                    <a href="{{ $content->image }}" data-width="1200" data-height="900" itemprop="contentUrl">
                        <!-- Thumbnail -->
                        <img class="w-100" src="{{ $content->image }}" itemprop="thumbnail" alt="Image description">

                    </a>
                </figure>

            </div>
            @elseif($content->type == 'video')

            @if($index === 0)
            <video
                data-target="custom-popup{{$content->id}}" class="w-100 js-open-popup"
                loop
                muted
                autoplay>
                <source src="{{ $content->image }}">
            </video>
            @else
                
            <video
                data-target="custom-popup{{$content->id}}" class="w-100 js-open-popup"
                controls>
                <source src="{{ $content->image }}">
            </video>
            @endif


            {{---------------modals-----------------------}}
            <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup{{$content->id}}">
                <div class="custom-popup__holder js-custom-popup-holder"><span onclick="pauseVid('{{ $content->id }}')" class="custom-popup__close js-close-popup"></span>

                    <div class="custom-popup__content">

                        @if(isset($media[$index + 1]))
                        <video controls id="video-{{ $content->id }}" onended="playNext({{ $content->id }}, {{ $media[$index + 1]->id }})">
                            @else
                            <video controls id="video-{{ $content->id }}" onended="playNext({{ $content->id }}, {{ $media[0]->id }})">
                                @endif

                                <source src="{{ $content->image }}" type="video/mp4">
                                <source src="{{ $content->image }}" type="video/ogg">
                                Your browser does not support HTML video.
                            </video>

                    </div>

                </div>
            </div>

            @elseif($content->type == 'pdf')

            <a href="{{ $content->image }}" target="_blank">
                <img src="http://imgfz.com/i/jhamRXb.jpeg" alt="">
            </a>

            @endif

        </div>
        @endforeach

    </div>

</main>
<style>
    .main-home {

        height: auto;
    }

    footer {
        position: relative;
    }

    .gallery {
        width: 100%;
    }

    .private-a {

        font-size: 2rem;
        text-transform: uppercase;
        margin-bottom: 2rem;
    }

    .private-main {

        gap: 1rem;
    }

    .item-private {
        width: 100%;
        height: fit-content;
    }

    figure img {
        width: 100%;
        max-width: 100%;
    }
</style>

@push("scripts")
<script>
function pauseVid(id) {
    vid = document.getElementById("video-"+id); 
    vid.pause(); 
}

function playNext(current, next) {
    currentModal = document.querySelector(`[data-popup=custom-popup${current}] span.js-close-popup`)
    nextModal = document.querySelector(`[data-target=custom-popup${next}]`)
    nextVideo = document.querySelector(`#video-${next}`)
    currentModal.click()
    nextModal.click()
    nextVideo.play()
}
</script>
@endpush

@endsection