@extends("layouts.main")

@section("content")
<main class="bg-dark" data-barba="container" data-barba-namespace="private-section">

<<<<<<< HEAD
    <section class="main-private">
        <div class="form">

            <div class="content-form">
                <h3>PRIVATE</h3>
                <div class="mb-2">
                    <label for="">User:</label>
                    <input class="ml-27" type="text" autocomplete="off">
                </div>
=======
  <section class="main-private">
    <div class="form">

      <div class="content-form">
      <h3>PRIVATE</h3>
        <form action="{{ url('validate-user') }}" method="post">
          {{ csrf_field() }}
          <div class="mb-2">
            <label for="">User:</label>
            <input class="ml-27" type="text" autocomplete="off" name="email">
          </div>

          <div>
            <label for="">Password:</label>
            <input class="mb-2"class="mb-2" type="password" name="pass">
          </div>
          <button class="btn">Submit</button>

        </form>
      </div>
>>>>>>> faedabb1b62cb63fbed5e7a058f34d4f3cc5fef8

                <div>
                    <label for="">Password:</label>
                    <input class="mb-2" class="mb-2" type="password">
                </div>
                <button class="btn">Submit</button>
            </div>


        </div>
    </section>




</main>

<style>
    @media only screen and (max-width: 600px) {
        body {
            background: #a2a2a2;
        }
    }
</style>
@push("scripts")

@endpush





@endsection
