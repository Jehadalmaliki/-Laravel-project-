@extends('admin.layout.master')
  @section('content')
<div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> </h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
<h5 class="card-header">Add new company details</h5>
@if ($errors->any())
@foreach ($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>

@endforeach

@endif
<form class="card-body" action="{{ route('save_company') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label" for="multicol-username"> company title</label>
    <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
  </div>
  <div class="col-md-6">
    <label class="form-label" for="multicol-email"> Photo</label>
    <div class="input-group input-group-merge">
      <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />

    </div>
  </div>

  <div class="col-md-6">
    <label class="form-label" for="multicol-username"> Company description</label>
    <input name="description" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
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
