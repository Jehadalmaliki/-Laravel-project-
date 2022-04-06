@extends('Front.layout.master')
@section('content')
    <!-- login -->
    <section class="my-5">
      <div class="container py-5">
        <h1 class="text-center text-info">log in</h1>
        <div
          class="row d-flex align-items-center justify-content-center h-60 my-5"
        >
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="image/login.svg" class="img-fluid" alt="Phone image" />
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input
                  type="email"
                  id="form1Example13"
                  class="form-control form-control-lg"
                />
                <label class="form-label" for="form1Example13"
                  >Email address</label
                >
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input
                  type="password"
                  id="form1Example23"
                  class="form-control form-control-lg"
                />
                <label class="form-label" for="form1Example23">Password</label>
              </div>

              <div
                class="d-flex justify-content-around align-items-center mb-4"
              >
                <!-- Checkbox -->
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="form1Example3"
                    checked
                  />
                  <label class="form-check-label" for="form1Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!">Forgot password?</a>
              </div>

              <!-- Submit button -->
              <a
                href="profile.html"
                role="button"
                class="btn btn-primary1 btn-lg btn-block"
                ><i> log in </i></a
              >

              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div>

              <a
                class="btn btn-primary btn-lg btn-block"
                style="background-color: #3b5998"
                href="dashboardPro.html"
                role="button"
              >
                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
   @stop
