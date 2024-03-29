
 @extends('Front.layout.master')
@section('content')
    <!-- Connect us -->
    <div class="container-fluid my-5">
      <h1 class="text-center text-info mt-3">Connect Us</h1>
      <div class="card mt-2 mx-auto" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/connect.svg" class="img-fluid rounded-start h-100
            w0-100 alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                @if ($errors->any())
                @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>

            @endforeach

             @endif
              <div class="mb-3">
                <form class="card-body" action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="exampleFormControlInput1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="exampleFormControlInput1"
                  placeholder="name@example.com"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">
                  Textarea</label
                >
                <textarea
                  class="form-control"
                  name="message"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-outline-success">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
  @stop
