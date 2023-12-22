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
        	 <div class="card">
              <div class="card-body bg-light">
                <h4 class="card-title">Travel order</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('travel.store') }}">
                  @csrf
                  <div class="form-group">
                    <label for="emp">TO:</label>
                    <select name="emp" id="emp" class="form-control text-dark">
                        @if($employees = App\Models\Employee::get())
                          @foreach($employees as $employee)
                                <option value="{{ $employee->name }}">{{ $employee->name }}</option>
                          @endforeach
                        @endif
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="travel_purpose">Travel is on:</label>
                    <select name="travel_purpose" class="form-control text-dark">
                        <option value="officialBusiness">Official Business</option>
                        <option value="officialTime">Official time only in accordance with the following schedule and objective/s</option>
                        <option value="pursuant">Pursuant</option>
                        <option value="exception">As an exception to:</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="place">Destination:</label>
                    <input type="text" name="place" class="col-xs-12" id="place">
                  </div>
                  <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name="date" class="col-xs-12" id="date">
                  </div>
                  <div class="form-group">
                    <label for="objective">Purpose:</label>
                    <input type="text" name="objective" class="form-control" id="objective" >
                  </div>
                  <div class="form-group">
                    <label for="funds">Source of funds:</label>
                    <input type="text" name="funds" class="form-control" id="funds" >
                  </div>                   
                  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
      	</div>
      </div>
  </div>
@endsection
