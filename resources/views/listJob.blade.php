<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top"
      style="background-color: #20c997"
    >
      <div class="container-fluid">
        <a class="navbar-brand active text-light" href="#"><h3>Wazeef</h3> </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <a
                class="nav-link active text-dark"
                aria-current="page"
                href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="listJob.html">JOb</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="company.html">Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="connect.html">Connect</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="Aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="serveric.html">srevices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="account.html">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="serveric.html">عربي</a>
            </li>
            <li class="nav-item">
              <a href="login.html"
                ><button type="button" class="btn btn-outline-warning">
                  log in
                </button></a
              >
            </li>
            <li class="nav-item">
              <a href="#"
                ><button type="button" class="btn btn-warning">
                  Sing up
                </button></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
   
    <!-- footer -->
    <footer
      class="text-center text-lg-start"
      style="background-color: #20c997; border-start-end-radius: 70%"
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Quiqe Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">About us</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Job last</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark">Facebook</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Instgram</a>
              </li>
              <li>
                <a href="#!" class="text-dark">linked IN</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Twiter</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Subscribe</h5>

            <ul class="list-unstyled">
              <li>Sed consequat sapien faus quam bibendum convallis.</li>
              <form class="d-flex">
                <input
                  class="form-control me-2 w-50"
                  type="search"
                  placeholder="Email.."
                  aria-label="Search"
                />
                <button class="btn btn-outline-warning" type="submit">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-envelope-paper-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6.5 9.5 3 7.5v-6A1.5 1.5 0 0 1 4.5 0h7A1.5 1.5 0 0 1 13 1.5v6l-3.5 2L8 8.75l-1.5.75ZM1.059 3.635 2 3.133v3.753L0 5.713V5.4a2 2 0 0 1 1.059-1.765ZM16 5.713l-2 1.173V3.133l.941.502A2 2 0 0 1 16 5.4v.313Zm0 1.16-5.693 3.337L16 13.372v-6.5Zm-8 3.199 7.941 4.412A2 2 0 0 1 14 16H2a2 2 0 0 1-1.941-1.516L8 10.072Zm-8 3.3 5.693-3.162L0 6.873v6.5Z"
                    />
                  </svg>
                </button>
              </form>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #c9aa20 ;">
        © 2022 Copyright:
        <a class="text-dark">Jehad Almaliki</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/search.js"></script>

  </body>
</html>
