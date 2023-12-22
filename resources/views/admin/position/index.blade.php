@extends('layouts.default')

@section('content')
	<div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> {{ $pagetitle }}
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      	<div class="row">
        	<div class="col-lg-12 grid-margin stretch-card">
      			<a href="{{ route('employee.create') }}" class="btn btn-gradient-success btn-rounded btn-fw">Add Employee</a>
        	</div>
    	</div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	<div class="card">
          <div class="card-body">
            <h4 class="card-title">Hoverable Table</h4>
            <p class="card-description"> Add class <code>.table-hover</code>
            </p>
            <table class="table table-hover">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                </tr>
              </thead>
              <tbody>
                @if(isset($employees))
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee-> id }}</td>
                            <td>{{ $employee-> name }}</td>
                            <td>{{ $employee-> position }}</td>
                        </tr>
                    @endforeach
                @endif
              <!--   <tr>
                  <td>Messsy</td>
                  <td>Flash</td>
                  <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>Premier</td>
                  <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                  <td><label class="badge badge-info">Fixed</label></td>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>After effects</td>
                  <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                  <td><label class="badge badge-success">Completed</label></td>
                </tr>
                <tr>
                  <td>Dave</td>
                  <td>53275535</td>
                  <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr> -->
              </tbody>
            </table>
          </div>
        	</div>
      	</div>
      </div>
  </div>
@endsection
