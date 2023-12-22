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
      			<a href="{{ route('travel.create') }}" class="btn btn-gradient-success btn-rounded btn-fw">Add Travel</a>
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
                  <th>travel no</th>
                  <th>user</th>
                  <th>date</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                    @if(isset($travel_orders))
                        @foreach($travel_orders as $value)
                            <tr>
                                <td>{{ $value['id']}}</td>
                                <td>{{ $value['emp']}}</td>
                                <td>{{ $value['date']}}</td>
                                <td><a href="{{ route('travel.view', $value['id']) }}" class="btn btn-info btn-sm">View</a></td>
                            </tr>
                        @endforeach
                    @endif
              </tbody>
            </table>
          </div>
        	</div>
      	</div>
      </div>
  </div>
@endsection
