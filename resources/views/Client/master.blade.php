<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jop</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

</head>
<body>
    <nav class="navbar navbar-light  p-3  " style="background-color: #20c997 ;color: aliceblue !important;">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" style="background-color: #20c997 ;color: aliceblue !important;" href="#">
              Wazeef
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0 ">

            <div class="dropdown shadow ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Hello, Jehad Almaliki
                </button>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Protfilio</a></li>
                  <li><a class="dropdown-item" href="index.html">Sign out</a></li>
                </ul>
              </div>
        </div>
    </nav>

    <div class="container-fluid shadow " >
        <div class="row ">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse shadow ">
              <!-- image profile -->
              <div class=" col-12 d-flex justify-content-center align-items-center p-4 position-relative ">
                <img src="image/face1.png" width="50%" class="img-fluid rounded-circle" alt="">
                <a role="button" data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute bg-white
                    border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle"
                    style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
            </div>
            <div class="col-12 text-center mb-5">
                <a class="fs-4 fw-bold" href="" style="color: #20c997 ;">Jehad Almaliki</a>
                <p>Software Engineering</p>
            </div>

                <div class="position-sticky  " >
                    <ul class="nav flex-column shadow ">

                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('Experince') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"  style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span class="ml-2">Experience</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('Eduction') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"  style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            <span class="ml-2">Eductional</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('Skill') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="ml-2">skills</span>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Course') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                              <span class="ml-2">Course</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('Social') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                              <span class="ml-2">Social media</span>
                            </a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('User') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            <span class="ml-2">user</span>
                          </a>
                        </li>




                      </ul>
                </div>
            </nav>


  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="js/buttons.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
