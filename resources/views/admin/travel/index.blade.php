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
                  <th>Employees</th>
                  <th>Objective</th>
                  <th>date</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
<<<<<<< HEAD
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
=======
                 @if(isset($travel_orders))
                    @foreach($travel_orders as $travel_order)
                        <tr>
                            <td>{{ $travel_order-> id }}</td>                         
                            <td>{{ $travel_order-> emp }}</td>
                            <td>{{ $travel_order-> objective }}</td>
                            <td>{{ $travel_order-> date }}</td>
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
>>>>>>> 4f6b228cafc7e66205bfb950eb9b5d8e6ce62e6d
              </tbody>
            </table>
          </div>
        	</div>
      	</div>
      </div>
  </div>
@endsection
