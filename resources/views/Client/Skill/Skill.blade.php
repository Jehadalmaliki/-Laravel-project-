
@extends('Client.layout.master')
@section('content')

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

                <h1 class="h2">Skills</h1>

                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header d-flex justify-content-between">Latest Update<button type="button" class="btn btn-sm " data-bs-toggle="modal" data-bs-target="#addSkill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                              </svg></button></h5></h5>
                            <div class="card-body">
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            @foreach ($skill as $skill)

                                            <h4>{{ $skill->name }}</h4>
                                            <div>


                                                @if($skill->is_active==1)
                                                <span class="badge bg-label-success me-1">مفعل</span>

                                                @else
                                                <span class="badge bg-label-danger me-1">موقف</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="progress">
                                            <div class="progress-bar"  role="progressbar" style="width: 65%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">{{ $skill->progrse }}%</div>

                                        </div>


                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{ route('edit_skill',$skill->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                          <a class="dropdown-item" href="{{ route('toggle_skill',$skill->id) }}"><i class="bx bx-trash me-2"></i> @if($skill->is_active==1)disable @else enable @endif</a>
                                        </div>
                                      </div>
                                </div>
                                @endforeach



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


      <!-- Modal Add Skill -->
    <div class="modal fade" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                    @if ($errors->any())
                @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>

                @endforeach

                 @endif
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" action="{{ route('save_skill') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="text"  name="name" value="{{ old('name') }}"class="form-control rounded-pill" id="skill" placeholder="Skill">
                        </div>

                        <div class="col-12">
                            <input type="range"name="progrse" class="form-range" id="customRange1">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                              <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                              <div class="col-sm-9">
                                <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">

                                  <option value="1">مفعل</option>
                                  <option value="-1">معطل</option>
                                </select>
                              </div>
                            </div>
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
