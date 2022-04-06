@extends('Front.layout.master')
@section('content')
    <!-- our services -->
    <div class="container-fluid my-5">
      <h1 class="text-center text-info mt-3">our services</h1>
      <div class="row  g-4 m-2">
        <div class="col m-5">
          <div class="card h-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              style="color: #20c997"
              width="50"
              height="50"
              fill="currentColor"
              class="bi bi-search m-auto my-3"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              />
            </svg>
            <div class="card-body text-center">
              <h5 class="card-title">Search Jobs</h5>
              <p class="card-text">
                Post a job to tell us about your project. We'll quickly match
                you with the right freelancers find place best.
              </p>
            </div>
          </div>
        </div>
        <div class="col m-5">
          <div class="card h-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              style="color: #20c997"
              width="50"
              height="50"
              fill="currentColor"
              class="bi bi-back m-auto my-3"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"
              />
            </svg>
            <div class="card-body text-center">
              <h5 class="card-title">Search Jobs</h5>
              <p class="card-text">
                Post a job to tell us about your project. We'll quickly match
                you with the right freelancers find place best.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    @stop
