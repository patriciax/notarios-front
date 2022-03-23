@extends("layouts.main")

@section("content")
<main class=" bg-dark--private" data-barba="container" data-barba-namespace="contact-section">
    <div class="private-main">



            @foreach($secondaryContent as $content)
            @php
            $model = App\Models\Project::where('id', $content->project_id)->first();
            @endphp
            <div class="item-private">
            <a class="private-a" href="{{ url('/private-project/'.$model->slug) }}">{{ $model->name }}</a> <br>
            @if($model->image_type == 'image')

            <!-- Use figure for a more semantic html -->
            <div class="gallery">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                    <a href="{{ $model->image }}" data-width="1200" data-height="900" itemprop="contentUrl">
                        <!-- Thumbnail -->
                        <img src="{{ $model->image }}" itemprop="thumbnail" alt="Image description">

                    </a>
                </figure>

            </div>
            @else
            <video class="w-100">
                <source src="{{ $model->image }}">
            </video>
            @endif

            </div>
            @endforeach



    </div>
</main>
<style>
    footer .copy {
        display: none;
    }

    footer {
        position: fixed;
        right: 0;
    }
</style>

@push("scripts")

@endpush





@endsection
