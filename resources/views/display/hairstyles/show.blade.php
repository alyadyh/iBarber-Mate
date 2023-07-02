@extends('display.hairstyles.index')

@section('extra-content')

<div class="row justify-content-center">
    <?php $i = 1; ?>
    @foreach ($hairstyles as $item)
    <div class="col-lg-4 col-md-6">
        <div class="single_service">
             <div class="service_thumb">
                 <img src="{{ asset('storage/images/hairstyles/'.$item->image) }}" class="img-fluid" alt="" style="height: 4in">
             </div>
             <div class="service_content text-center">
                <h3>{{ $item->name }}</h3>
                {{-- <p>{{ $item->description }}</p> --}}
             </div>
        </div>
    </div>
    @endforeach
</div>

@endsection