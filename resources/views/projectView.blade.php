@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="contact-section">

    {{ $project->name }}

    @if($project->image_type == 'image')

        <img src="{{ $project->image }}" alt="" class="w-100">

    @else

        <video class="w-100">
            <source src="{{ $project->image }}">
        </video>

    @endif

    @foreach(App\Models\ProjectSecondaryContent::where("project_id", $project->id)->get() as $content)

        @if($content->image_type == 'image')

            <img src="{{ $content->image }}" alt="" class="w-100">

        @else

            <video class="w-100">
                <source src="{{ $content->image }}">
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
