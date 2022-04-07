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

        @foreach(App\Models\ProjectSecondaryContent::where("project_id", $project->id)->get() as $content)
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

            <video class="w-100" controls>
                <source src="{{ $content->image }}">
            </video>

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
    footer .copy
   {
        display: none;
    }

    footer {
      position: relative;
    }
    .gallery{
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
        width: 49%;
    }
    figure img {
        width: 100%;
    max-width: 100%;
}

</style>

@push("scripts")

@endpush





@endsection
