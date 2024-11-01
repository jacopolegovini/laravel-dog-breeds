@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container d-flex justify-content-center mt-4">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.focus.it/images/2022/05/25/carlino_1020x680.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$breeds->name}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="button d-flex justify-content-center">
              <a href="#" class="btn btn-success me-2">Edit</a>
              <a href="#" class="btn btn-warning me-2">Delete</a>
          </div>
        </div>
      </div>
</main>
@endsection
