@extends('Front.layout.master')
@section('content')
    <!-- our companies -->
    <div class="container-fluid my-5">
      <h1 class="text-center text-info mt-3">Company</h1>
      <div class="row row-cols-lg-3 g-4 m-2">
        <div class="col m-5">
          <div class="card h-100">
            <img
              src="image/brand2.jpg"
              class="d-block w-100 imghight"
              alt="..."
            />
            <div class="card-body text-center">
              <h5 class="card-title">Google</h5>
              <p class="card-text">
                Post a job to tell us about your project. We'll quickly match
                you with the right freelancers find place best.
              </p>
            </div>
          </div>
        </div>
        <div class="col m-5">
          <div class="card h-100">
            <img
              src="image/brand1.jpg"
              class="d-block w-100 imghight"
              alt="..."
            />
            <div class="card-body text-center">
              <h5 class="card-title">Slack</h5>
              <p class="card-text">
                Post a job to tell us about your project. We'll quickly match
                you with the right freelancers find place best.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
