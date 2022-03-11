@extends("layouts.main")

@section("content")
<!---<main class="bg-light" data-barba="container" data-barba-namespace="home-section">-->
    <main class="bg-light  bg-center">

<div class="main-video  ">
     <div class="bg-light_folder"></div>

  <div class="slider">
    {{--@foreach(App\Models\HomeProject::all() as $project)
    <div>
      <img src="assets/img/banner.png" alt="" />

      <div class="titles-slider">
        <p>{{ $project->title }}</p>
        <span>{{ $project->director }}
        </span>
      </div>
    </div>
    @endforeach--}}
    <div>
    <img src="assets/img/banner.png" alt="" />
    </div>
    <div>
    <img src="assets/img/banner.png" alt="" />
    </div>
  </div>
</div>


<!--- <div class="header">
        <h1 class="title animate-this">home page</h1>
        <div class="animate-this button">
          <a href="about.php">go to about</a>
        </div>
      </div>-->




      </main>

@push("scripts")

@endpush





@endsection
