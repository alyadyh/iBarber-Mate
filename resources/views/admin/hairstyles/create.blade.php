@extends('admin.layout')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Hairstyles</h5>
                    <span>List of hairstyles recommendation in iBarberPal</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Hairstyles</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>
  
  <div class="page-header">
      <div class="row col-lg-12">
          <a href="{{ route('admin.hairstyles.index') }}">
              <button type="button" class="btn btn-secondary"><i class="ik ik-chevrons-left"></i>Back</button>
          </a>
      </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Add Hairstyles</h3></div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin.hairstyles.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="category_id">Choose Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option>Select one category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection