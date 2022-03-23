@extends("layouts.main")

@section("content")
<main class=" bg-dark--private" data-barba="container" data-barba-namespace="contact-section">
<div class="private-main">
  <h4 class="private-a">
  {{ $project->name }}
  </h4>

    @if($project->image_type == 'image')

        <img src="{{ $project->image }}" alt="" class="w-100">

    @else

        <video class="w-100" controls>
            <source src="{{ $project->image }}">
        </video>

    @endif

    @foreach(App\Models\ProjectSecondaryContent::where("project_id", $project->id)->get() as $content)
    <div class="item-private">
        @if($content->type == 'image')

            <img src="{{ $content->image }}" alt="" class="w-100">

        @else

            <video class="w-100" controls>
                <source src="{{ $content->image }}">
            </video>

        @endif

        </div>
    @endforeach

    </div>

</main>
<style>

    footer .copy, .main-logo img {
display: none;
    }
    footer{
        position: fixed;
    right: 0;
    }
    .private-a {

    font-size: 2rem;
    text-transform: uppercase;
    margin-bottom: 2rem;
}
</style>

@push("scripts")

@endpush





@endsection
