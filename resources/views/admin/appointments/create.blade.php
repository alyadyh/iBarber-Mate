@extends('admin.layout')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Appointments</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard.index') }}"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Business</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>
  
  <div class="page-header">
      <div class="row col-lg-12">
          <a href="{{ route('admin.appointments.index') }}">
              <button type="button" class="btn btn-secondary"><i class="ik ik-chevrons-left"></i>Back</button>
          </a>
      </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Add Appointment</h3></div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin.appointments.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Your last name">
                    </div>
                    <div class="form-group">
                        <label for="phone_num">Phone Number</label>
                        <input type="number" class="form-control" id="phone_num" name="phone_num" placeholder="Your phone number">
                    </div>
                    <div class="form-group">
                        <label for="point_date">Date and Time</label>
                        <input class="form-control" type="datetime-local" id="point_date" name="point_date" />
                    </div>
                    <div class="form-group">
                        <label for="service_id">Choose Service</label>
                        <select class="form-control" id="service_id" name="service_id">
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hairstyle_id">Choose Hairstyle</label>
                        <select class="form-control" id="hairstyle_id" name="hairstyle_id">
                            @foreach ($hairstyles as $hairstyle)
                                <option value="{{ $hairstyle->id }}">{{ $hairstyle->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Choose Location</label>
                        <select class="form-control" id="location" name="location">
                            @foreach ($slots as $slot)
                                <option value="{{ $slot->id }}">{{ $slot->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection