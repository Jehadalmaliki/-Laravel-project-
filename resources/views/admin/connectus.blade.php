@extends('admin.layout.master')
  @section('content')
<div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> </h4>




<!-- Multi Column with Form Separator -->






<div class="card">
    <h5 class="card-header">Connect us  </h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> Message</th>
              <th>Email</th>


              <th>العمليات</th>
            </tr>
          </thead>
          <tbody>

                <tr>

                  <td>'name'</td>
                  <td>'name@nnn.com'</td>


                  <td>

                  <span class="badge bg-label-success me-1">مفعل</span>

                   <span class="badge bg-label-danger me-1">موقف</span>

                  </td>
                  <td>
                  <a href="/edit_allusers/" class="btn btn-icon btn-outline-dribbble">
                      <i class="tf-icons bx bx-edit-alt me-1"></i>
                    </a>
                    <button type="button" class="btn btn-icon btn-outline-dribbble">
                      <i class="tf-icons bx bx-trash me-1"></i>
                    </button>

                  </td>
                </tr>

              </tbody>
            </table>
</div>
</div>






      </div>
      <!-- / Content -->
@stop
