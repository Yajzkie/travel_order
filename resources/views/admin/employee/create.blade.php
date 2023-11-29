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
                <h4 class="card-title">travel order</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('employee.store') }}">
                  @csrf
                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" >
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
