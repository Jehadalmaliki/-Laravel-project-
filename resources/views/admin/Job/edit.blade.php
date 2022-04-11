@extends('admin.layout.master')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>

          @endforeach

          @endif


          <form method="POST" action="{{ route('update_job',$job->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name"> الإسم العربي</label>
                <div class="col-sm-9">
                  <input type="text"  value="{{ $job->name }}" name="name" id="formtabs-first-name" class="form-control" placeholder="John" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <label for="multiple" class="control-label col-md-3">Company</label>
                <select id="multiple"name="company_id" class="form-control select2-multiple" multiple>
                    <option value="{{ $job->company_id }}"></option>
                    @foreach($company as $host)
                    <option value="{{$host->id}}">{{$host->name}} </option>
                    @endforeach

                </select>
            </div>
        </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> الوصف</label>
                <div class="col-sm-9">
                  <input type="text" name="description" value="{{ $job->description }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> caree_level</label>
                  <div class="col-sm-9">
                    <input type="text" name="caree_level" value="{{ $job->caree_level }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> governement</label>
                  <div class="col-sm-9">
                    <input type="text" name="governement" value="{{ $job->governement }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> sector</label>
                  <div class="col-sm-9">
                    <input type="text" name="sector" value="{{ $job->sector }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> responsibilities</label>
                  <div class="col-sm-9">
                    <input type="text" name="responsblite" value="{{ $job->responsblite }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> start_date</label>
                  <div class="col-sm-9">
                    <input type="date" name="start_date" value="{{ $job->start_date }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> expirt_date</label>
                  <div class="col-sm-9">
                    <input type="date" name="expirt_date" value="{{ $job->expirt_date }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> Details</label>
                  <div class="col-sm-9">
                    <input type="file" name="file" value="{{ $job->file }}" id="formtabs-last-name" class="form-control" value="{{ $job->name_ar }}" />
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">

                    <option @if($job->is_active==1) selected @endif value="1">مفعل</option>
                    <option  @if($job->is_active==-1) selected @endif value="-1">معطل</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">الصورة</label>
                <div class="col-sm-9">
                  <input type="file" name="image" id="formtabs-birthdate" class="form-control dob-picker" />
                </div>
              </div>
            </div>

          </div>




        </div>
        <div class="card-footer">
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>






  </div>
@endsection
