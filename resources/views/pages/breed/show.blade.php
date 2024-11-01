@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
@dd($breeds)
<main class="container">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.focus.it/images/2022/05/25/carlino_1020x680.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$breed->name}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</main>
@endsection
