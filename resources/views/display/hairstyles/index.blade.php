@extends('display.layout')

@section('content')
<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Hairstyles</h3>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center mb-55">
                    <h3>Our Hairstyles</h3>
                    <p>Choose hairstyle that suits your face shape.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center mb-55">
                @foreach ($hairstyles as $item)
                @endforeach
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 0]) }}" class="boxed-btn4">All</a>
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 1]) }}" class="boxed-btn4">Square</a>
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 2]) }}" class="boxed-btn4">Heart</a>
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 3]) }}" class="boxed-btn4">Round</a>
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 4]) }}" class="boxed-btn4">Long</a>
                <a href="{{ route('hairstyles.show', ['hairstyle' => $item->category_id = 5]) }}" class="boxed-btn4">Oval</a>
            </div>
        </div>
        @yield('extra-content')
    </div>
</div>

@endsection