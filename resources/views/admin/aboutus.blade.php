@extends('admin.layout.master')
  @section('content')
<div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> </h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
<h5 class="card-header">Add About us details</h5>
@if ($errors->any())
@foreach ($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>

@endforeach

@endif
<form class="card-body" action="{{ route('save_aboutus') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label" for="multicol-username"> Aboutus title</label>
    <input name="title" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
  </div>
  <div class="col-md-6">
    <label class="form-label" for="multicol-email"> Photo</label>
    <div class="input-group input-group-merge">
      <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />

    </div>
  </div>

  <div class="col-md-6">
    <label class="form-label" for="multicol-username"> Aboutus description</label>
    <input name="description" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
  </div>

  <div class="col-md-6">
    <div class="form-password-toggle">
      <label class="form-label" for="multicol-confirm-password">تفعيل القسم</label>
      <div class="input-group input-group-merge">
      <label class="switch">
          <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label">مفعل؟</span>
        </label>
      </div>
    </div>
  </div>
</div>


<div class="pt-4">
  <button type="submit" class="btn btn-primary me-sm-3 me-1">حفظ</button>
  <button type="reset" class="btn btn-label-secondary">الغاء</button>
</div>
</form>
</div>






      </div>
      <!-- / Content -->
@stop
