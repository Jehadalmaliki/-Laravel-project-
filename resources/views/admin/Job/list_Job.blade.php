
@extends('admin.layout.master')
@section('content')


<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>name</th>

            <th>image</th>
            <th>email</th>
            <th>caree_level</th>
            <th>start_date</th>
            <th>status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">

         @foreach ($job as $job)

         <tr>
           <td>{{ $loop->iteration }}</td>
          <td>{{ $job->id }}</td>
          <td>{{ $job->name }}</td>
          <td>{{ $job->description }}</td>
          <td>{{ $job->caree_level }}</td>
          <td>{{ $job->start_date }}</td>
          <td>
            <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{ $job->image }}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>

          <td>
            @if($job->is_active==1)
            <span class="badge bg-label-success me-1">مفعل</span>

            @else
            <span class="badge bg-label-danger me-1">موقف</span>
            @endif

        </td>

            <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_job',$job->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_job',$job->id) }}"><i class="bx bx-trash me-2"></i> @if($job->is_active==1)disable @else enable @endif</a>
              </div>
            </div>
          </td>
        </tr>

         @endforeach


        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


@endsection
