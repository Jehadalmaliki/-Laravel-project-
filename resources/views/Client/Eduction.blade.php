
@extends('Client.layout.master')
@section('content')
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

                <h1 class="h2">Eduction Information</h1>

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

      <!-- Modal Add Experince -->

    <div class="modal fade" id="addEducation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Education</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                    @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>

                    @endforeach

                     @endif
                    <form class="row g-3 needs-validation" action="{{ route('save_eduction') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Education details -->
                        <div class="col-12">
                            <label for="degree" class="form-label">user_id</label>
                            <select id="multiple"name="user_id" class="form-control select2-multiple" multiple>
                                <option value=""></option>
                                @foreach($user as $host)
                                <option value="{{$host->id}}">{{$host->name}} </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-12">
                            <label for="university" class="form-label">Fild of STUDY</label>
                            <input type="text" name="name" class="form-control rounded-pill" id="university" placeholder="Ex. software engineering">
                        </div>
                        <div class="col-12">
                            <label for="university" class="form-label">University</label>
                            <input type="text" name="University" class="form-control rounded-pill" id="university" placeholder="Ex. Harvad University">
                        </div>
                        <div class="col-12">
                            <label for="country" class="form-label">How many Years</label>
                            <input type="text" name="Year" class="form-control rounded-pill" id="country" placeholder="Country">
                        </div>


                        <div class="col-12">
                            <label for="date" class="form-label">Graduation date</label>
                            <input type="date" name="Date" class="form-control rounded-pill" id="date">
                        </div>


                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="Description" class="form-control rounded" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


   @stop
