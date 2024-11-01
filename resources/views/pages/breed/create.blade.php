@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <form action="{{route('breed.store')}}" method="GET" class="mt-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="size">Size:</label>
            <input type="size" class="form-control" id="size">
          </div>
          <div class="form-group">
            <label for="origin">Origin:</label>
            <input type="origin" class="form-control" id="origin">
          </div>
          <div class="form-group">
            <label for="group">Group:</label>
            <input type="group" class="form-control" id="group">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</main>
@endsection
