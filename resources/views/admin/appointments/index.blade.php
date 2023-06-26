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


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-block">
          <h3>Appointment Data</h3>
      </div>
      <div class="card-body">
          <div class="dt-responsive">
              <table id="simpletable"
                     class="table table-striped table-bordered nowrap">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Appointment date</th>
                      <th>Location</th>
                      <th>Service</th>
                      <th>Hairstyle</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>08123</td>
                          <td>2011/04/25</td>
                          <td>Front</td>
                          <td>Haircut</td>
                          <td>Queen</td>
                          <td>
                            <td class="col-md-1">
                                <div class="table-actions d-flex justify-content-around">
                                    <button type="button" class="btn btn-icon btn-warning"><i class="ik ik-edit-2"></i></button>
                                    <button type="button" class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></button>
                                </div>
                          </td>
                        </td>
                      </tr>
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