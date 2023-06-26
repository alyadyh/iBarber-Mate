@extends('admin.layout')

@section('content')
<div class="page-header">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <i class="ik ik-inbox bg-blue"></i>
              <div class="d-inline">
                  <h5>Slots</h5>
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
                  <li class="breadcrumb-item active" aria-current="page">Slots</li>
              </ol>
          </nav>
      </div>
  </div>
</div>


<div class="page-header">
    <div class="row align-items-end flex-column col-lg-12">
        <a href="{{ route('admin.slots.create') }}">
            <button type="button" class="btn btn-info"><i class="ik ik-plus"></i>Add Slot</button>
        </a>
    </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-block">
          <h3>Slot Data</h3>
      </div>
      <div class="card-body">
          <div class="dt-responsive">
              <table id="simpletable"
                     class="table table-striped table-bordered nowrap">
                  <thead>
                  <tr>
                      <th>Service</th>
                      <th>Location</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $slot)    
                        <tr>
                            <td>{{ $slot->service->name }}</td>
                            <td>{{ $slot->location }}</td>
                            <td>{{ $slot->status }}</td>
                            <td class="col-md-1">
                                    <div class="table-actions d-flex justify-content-around">
                                        <a href='{{ route('admin.slots.edit', $slot->id) }}'>
                                            <button type="button" class="btn btn-icon btn-warning"><i class="ik ik-edit-2"></i></button>
                                        </a>
                                        <form id="delete-slot-{{ $slot->id }}" onsubmit="return confirm('You want to delete this data?')" 
                                            action="{{ route('admin.slots.destroy', $slot->id)  }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name='submit' class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></button>
                                          </form>
                                    </div>
                                </td>
                          </td>
                        </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
              </table>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection