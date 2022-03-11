@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="contact-section">

    @foreach($secondaryContent as $content)

        @php
            $model = App\Models\Project::where('id', $content->project_id)->first();
        @endphp
       
        <a href="{{ url('/private-project/'.$model->slug) }}">{{ $model->name }}</a> <br>
        @if($model->image_type == 'image')

            <img src="{{ $model->image }}" alt="" class="w-100">

        @else

            <video class="w-100">
                <source src="{{ $model->image }}">
            </video>

        @endif


    @endforeach



</main>
<style>

    footer .copy, .main-logo img {
display: none;
    }
    footer{
        position: fixed;
    right: 0;
    }
</style>

@push("scripts")

@endpush





@endsection
