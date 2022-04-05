@extends('layout.master')
@section('content')

    <div class="container mt-3">
      <h2>Search Jobs</h2>
      <p>Use the form-select to select menu:</p>
      <form>
        <select id="filter-company" class="filter p-2 me-4 mb-2">
          <option value="0">... </option>
      <option value="UI">Google </option>
      <option value="web"> Developer</option>
    </select>

      </form>
    </div>
    <div class="container">
      <div class="row  row-margin my-5">
        <div class="col-ms-12 job_card  d-flex flexjob">
          <div class="card mb-3 mx-2" style="max-width: 600px">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="DescripJop.html">
                  <img
                    src="image/lastjob1.png"
                    class="img-fluid rounded-start m-5 px-5"
                    alt="..."
                /></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title  company"  data-company="UI">Google</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                  </p>
                  <p class="card-text">
                    <small
                      ><a href="decjop.html" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg"  style="color: #20c997"
                      class="ml-5" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.364 2.5a.5.5 0 0 1 .5-.5H13.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 2 13.5V6.864a.5.5 0 1 1 1 0V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H6.864a.5.5 0 0 1-.5-.5z"/>
                        <path fill-rule="evenodd" d="M11 10.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L1.146 1.854a.5.5 0 1 1 .708-.708L10 9.293V5.5a.5.5 0 0 1 1 0v5z"/>
                      </svg>
                      More info</a>
                    </small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 1000px">
            <div class="row g-0">
              <div class="col-md-4">

                  <img
                    src="image/lastjob2.png"
                    class="img-fluid rounded-start m-5 px-5"
                    alt="..."
                /></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title company"  data-company="web"> Developer</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                  </p>
                  <p class="card-text">
                    <small
                      ><a href="decjop.html" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg"  style="color: #20c997"
                      class="ml-5" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.364 2.5a.5.5 0 0 1 .5-.5H13.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 2 13.5V6.864a.5.5 0 1 1 1 0V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H6.864a.5.5 0 0 1-.5-.5z"/>
                        <path fill-rule="evenodd" d="M11 10.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L1.146 1.854a.5.5 0 1 1 .708-.708L10 9.293V5.5a.5.5 0 0 1 1 0v5z"/>
                      </svg>
                      More info</a>
                    </small>


                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @stop
