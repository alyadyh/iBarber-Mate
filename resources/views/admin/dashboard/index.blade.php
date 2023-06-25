@extends('admin.layout')

@section('content')
<div class="row clearfix">
  <div class="col-12">
      <div class="widget">
          <div class="widget-body">
              <div class="d-flex justify-content-between align-items-center">
                  <div class="state">
                      <h2>Welcome back, {{ Auth::user()->name }}!</h2>
                  </div>
              </div>
          </div>
          <div class="progress progress-sm">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
          </div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-body">
              <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                      <h3 class="card-title">Visitors By Countries</h3>
                      <div id="visitfromworld" style="width:100%; height:350px"></div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="row mb-15">
                          <div class="col-9">India</div>
                          <div class="col-3 text-right">28%</div>
                          <div class="col-12">
                              <div class="progress progress-sm mt-5">
                                  <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-15">
                          <div class="col-9"> UK</div>
                          <div class="col-3 text-right">21%</div>
                          <div class="col-12">
                              <div class="progress progress-sm mt-5">
                                  <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-15">
                          <div class="col-9"> USA</div>
                          <div class="col-3 text-right">18%</div>
                          <div class="col-12">
                              <div class="progress progress-sm mt-5">
                                  <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-9">China</div>
                          <div class="col-3 text-right">12%</div>
                          <div class="col-12">
                              <div class="progress progress-sm mt-5">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection