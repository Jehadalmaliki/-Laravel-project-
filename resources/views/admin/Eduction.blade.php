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
    <style>
       
    </style>
</head>
<body>
    <nav class="navbar navbar-light  p-3 " style="background-color: #20c997 ;color: aliceblue !important;">
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
                          <a class="nav-link active" aria-current="page" href="dashboardPro.html">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="ml-2">Home</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Experince.html">
                            <svg xmlns="http://www.w3.org/2000/svg"  style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span class="ml-2">Experience</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Eduction.html">
                            <svg xmlns="http://www.w3.org/2000/svg"  style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            <span class="ml-2">Eductional</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Skill.html">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="ml-2">skills</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Course.html">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(41, 204, 155);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            <span class="ml-2">Course</span>
                          </a>
                        </li>
                       
                       
                       
                      </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
               
                <h1 class="h2">Personal Information</h1>
                  
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card shadow ">
                            <h5 class="card-header d-flex justify-content-between">Latest Update <button type="button" class="btn btn-sm " data-bs-toggle="modal" data-bs-target="#addEducation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg></button></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Name</th>
     <th scope="col">Year</th>
     <th scope="col">University</th>
     <th scope="col">Description</th>
     <th scope="col">Date</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Software Engineering</th>
     <td>2019-2021</td>
     <td>Taiz Unvirsity</td>
     <td>Study programmer</td>
     <td>Aug 31 2020</td>
                                            <td><button type="button" class="btn btn-sm " style="color:rgb(41, 204, 155);" data-bs-toggle="modal" data-bs-target="#addEducation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg></button></td>
                                           
                                            <td><button type="button" class="btn btn-sm  " style="color:rgb(204, 41, 41);"data-bs-toggle="modal" data-bs-target="#delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M6.5 1a.5.5 0 0 0-.5.5v1h4v-1a.5.5 0 0 0-.5-.5h-3ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1H3.042l.846 10.58a1 1 0 0 0 .997.92h6.23a1 1 0 0 0 .997-.92l.846-10.58Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                            </svg></button></td>
                                          </tr>
                                          
                                       
                                        </tbody>
                                      </table>
                                </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
                
           
        </div>
    </div>
  </main>
<!-- Modal Delete -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-body fw-bold d-flex justify-content-lg-center align-items-center flex-column">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-circle text-danger" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
              <h3 class="fs-4">Do you want to delete?</h3>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-danger">Yes</button>
          </div>
      </div>
  </div>
</div>

  <!-- Modal Edit Image Profile -->
    <div class="modal fade" id="editImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit image profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <!-- Job details -->
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Modal Add Education -->
    <div class="modal fade" id="addEducation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Education</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <!-- Education details -->
                        <div class="col-12">
                            <label for="degree" class="form-label">Degree</label>
                            <select class="form-select rounded-pill" aria-label="Default select example" id="degree">
                                <option selected disabled>Choose degree</option>
                                <option value="1">High school or equivalent</option>
                                <option value="2">Diploma</option>
                                <option value="3">Bachelor's degree</option>
                                <option value="3">Higher diploma</option>
                                <option value="3">Master's degree</option>
                                <option value="3">Doctorate</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="university" class="form-label">University or institution</label>
                            <input type="text" class="form-control rounded-pill" id="university" placeholder="Ex. Harvad University">
                        </div>
                        <div class="col-12">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control rounded-pill" id="country" placeholder="Country">
                        </div>
                        <div class="col-12">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control rounded-pill" id="city" placeholder="City">
                        </div>
                        <div class="col-12">
                            <label for="study" class="form-label">Fild of study (Major)</label>
                            <input type="text" class="form-control rounded-pill" id="study" placeholder="Ex. Accounting">
                        </div>
                        <div class="col-12">
                            <label for="date" class="form-label">Graduation date</label>
                            <input type="date" class="form-control rounded-pill" id="date">
                        </div>
                        <div class="col-12">
                            <label for="grading" class="form-label">Grade</label>
                            <select class="form-select rounded-pill" aria-label="Default select example" id="grading">
                                <option selected disabled>Grading system</option>
                                <option value="1">4-point GPA</option>
                                <option value="2">5-point GPA</option>
                                <option value="3">20-point GPA</option>
                                <option value="3">Percentage (out of 100)</option>
                                <option value="3">Rating</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="" class="form-control rounded" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="certificate" class="form-label">Certificate</label>
                            <input type="file" class="form-control" id="certificate">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="js/buttons.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>