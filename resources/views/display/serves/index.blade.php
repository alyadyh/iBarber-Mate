@extends('display.layout')

@section('content')
<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Services</h3>
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
                    <h3>Our Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php $i = 1; ?>
            @foreach ($services as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                     <div class="service_thumb">
                         <img src="{{ asset('storage/images/services/'.$item->image) }}" class="img-fluid" alt="" style="height:15rem;">
                     </div>
                     <div class="service_content text-center">
                        <div class="icon">
                            <i class="flaticon-shave"></i>
                        </div>
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                     </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6">
                <div class="single_service">
                     <div class="service_thumb">
                         <img src="img/service/2.png" alt="">
                     </div>
                     <div class="service_content text-center">
                        <div class="icon">
                            <i class="flaticon-barber"></i>
                        </div>
                        <h3>Beard Triming</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                     </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                     <div class="service_thumb">
                         <img src="img/service/3.png" alt="">
                     </div>
                     <div class="service_content text-center">
                        <div class="icon">
                            <i class="flaticon-null"></i>
                        </div>
                        <h3>Haircut Styles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                     </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection