@extends('layout.master')
@section('content')
{{-- home --}}
     <div class="container  mt-3 h-50">
       <div class="row ">
         <div class="col-md-12 d-flex">
         <div class="text   w-50 mt-5">
           <h1 class="text-dark float-md-none">Find Your <span style="color: #20c997;">Job</span></h1>
           <p class="text-dark">This is the biggist website in the world </p>
           <form class="d-flex">
            <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
         </div>
         <div class="photo  col-lg-6 col-ms-12">
          <img src="image/jobbg.svg" class="d-block w-100" alt="...">
         </div>
       </div>
     </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="photo  " viewBox="0 0 1440 320"><path fill="#20c997" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,74.7C640,75,800,117,960,117.3C1120,117,1280,75,1360,53.3L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

   <!-- joblist -->


     <div class="container">
      <div class="row row-margin">
        <div class="col d-flex">
        <div class=" mx-2 ">
          <img src="image/adv5.png " class="d-flex">
        </div>
        </div>
       <div class="col-md-12 col-lg-8 my-4">
         <h1 class="text-center text-info">Last Job</h1>
        <div class="card mb-3" style="max-width: 1000px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="image/lastjob1.png"
                class="img-fluid rounded-start m-5 px-5"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">UI/UX</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted"><svg  style =" color: #20c997"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>Yemen,Taiz   </small>  <small class="text-muted p-lg-5"> <svg style =" color: #20c997" class="ml-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                  </svg>      Full Time  </small>
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
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Web Developer</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted"><svg  style =" color: #20c997"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>Yemen,Taiz   </small>  <small class="text-muted p-lg-5"> <svg style =" color: #20c997" class="ml-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                  </svg>      Full Time  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 1000px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="image/lastjob3.png"
                class="img-fluid rounded-start  m-5 px-5"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Markting</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted"><svg  style =" color: #20c997"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>Yemen,Taiz   </small>  <small class="text-muted p-lg-5"> <svg style =" color: #20c997" class="ml-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                  </svg>      Full Time  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>

        </div>
       </div>
     </div>
   <!-- slider -->
   <div class="container">
    <h1 class="text-center text-info">Paterner</h1>
   <div id="carouselExampleControlsNoTouching" class="carousel slide w-50 mx-auto mb-5" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/brand1.jpg" class="d-block w-100 imghight" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/brand2.jpg" class="d-block w-100 imghight"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/brand1.jpg" class="d-block w-100 imghight" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@stop
