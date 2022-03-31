@extends("layouts.main")

@section("content")
<main class=" bg-dark--private" data-barba="container" data-barba-namespace="contact-section">
    <div class="private-main">



            @foreach($secondaryContent as $content)
            @php
            $model = App\Models\Project::where('id', $content->project_id)->first();
            @endphp
            <div class="item-private">
            <a class="private-a" href="{{ url('/private-project/'.$model->slug) }}">{{ $model->name }}<br>

            <!-- Use figure for a more semantic html -->
            <div class="gallery">
                
                        <!-- Thumbnail -->
                <img src="{{ $model->image }}"  alt="Image description">

            </div>


            </a>

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
