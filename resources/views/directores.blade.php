@extends("layouts.main")

@section("content")
<main class="bg-light" data-barba="container" data-barba-namespace="director-section">

  <section class="main-director">
    <div class="main-director_item ">
      
      @foreach(App\Models\Director::all() as $director)

          <!------------------panel 1--------------------------->
          <div class="main-panel">
            <p class="main-director-names" >{{ $director->name }} </p>

            <div class="panel">
              <div class="main-galeria scroll">
                @foreach(App\Models\DirectorContent::where("director_id", $director->id)->get() as $directorContent)
                <div class="galeria_img">
                  @if($directorContent->type == 'image')
                    <img src="{{ $directorContent->image }}" alt="">
                  @else
                    <video autoplay="true" loop="true" playsinline="true" muted class="embed-responsive-item" style="width:100%;">
                      <source src="{{ $directorContent->image }}" type="video/mp4">
                    </video>
                  @endif
                </div>

                @endforeach

              </div>
              <div class="main-info  ">

                <div class="info scroll">
                  <div class="name-info">
                    <h3>{{ $director->name }}</h3>
                  </div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It
                    has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.



                  </p>
                  <hr>
                  <p> Contrary to popular belief, Lorem Ipsum is
                    not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it
                    over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia,
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                    through the cites of the word in and orem ipsum
                    dolor sit amet..", comes from a line in section
                    1.10.32</p>
                  <div class="logo-info">
                    <img src="assets/img/logo.png" alt="">
                  </div>
                  <div class="footer-info">
                    <p>2021© NOTARIOS.TV ALL RIGHTS RESERVED </p>
                  </div>
                </div>
              </div>
            </div>



          </div>


      @endforeach

  </section>



</main>
@push("scripts")

@endpush





@endsection
