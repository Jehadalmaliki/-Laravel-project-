@extends('Client.layout.master')
@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

    <h1 class="h2">Social Media</h1>

    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-lg-0">
            <div class="card shadow ">
                <h5 class="card-header d-flex justify-content-between">Latest Update <button type="button" class="btn btn-sm " data-bs-toggle="modal" data-bs-target="#addsocial"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg></button></h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">SocialName</th>
                                <th scope="col">Link</th>
                                <th scope="col">icon</th>

                                <th scope="col"></th>
                                <th scope="col"></th>

                              </tr>
                            </thead>
                            <tbody>
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
 <!-- Modal Add social -->
 <div class="modal fade" id="addsocial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Social</h4>
                @if ($errors->any())
                @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>

                @endforeach

                 @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3 needs-validation" action="{{ route('save_social') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="university" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"class="form-control rounded-pill" id="university" placeholder="Ex. software engineering">
                    </div>
                    <div class="col-12">
                        <label for="university" class="form-label">Link</label>
                        <input type="text" name="Link" value="{{ old('Link') }} class="form-control rounded-pill" id="university" placeholder="Ex. Harvad University">
                    </div>
                    <div class="col-12">
                        <label for="country" class="form-label">image</label>
                        <input type="file" name="image" class="form-control rounded-pill" id="country" placeholder="Country">
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
