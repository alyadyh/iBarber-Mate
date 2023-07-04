@extends('admin.layout')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Slots</h5>
                    <span>List of slots available in iBarberPal</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Slots</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>
  
  <div class="page-header">
      <div class="row col-lg-12">
          <a href="{{ route('admin.slots.index') }}">
              <button type="button" class="btn btn-secondary"><i class="ik ik-chevrons-left"></i>Back</button>
          </a>
      </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Add Slot</h3></div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin.slots.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="service_id">Choose Service</label>
                        <select class="form-control" id="service_id" name="service_id">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Choose Status</label>
                        <select class="form-control" id="status" name="status">
                            @foreach (App\Enums\SlotStatus::cases() as $status)
                                <option value="{{ $status->value }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="location">Choose Location</label>
                        <select class="form-control" id="location" name="location">
                            @foreach (App\Enums\SlotLocation::cases() as $location)
                                <option value="{{ $location->value }}">{{ $location->name }}</option>
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