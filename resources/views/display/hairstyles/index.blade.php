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


<div class="make_apppointment_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title pl-68">
                    <h3>Make an Appointment</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="appoint_ment_form pl-68">
                    <form action="#">
                        <div class="single_field">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="single_field">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="single_field m-0">
                            <textarea id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <p>I’m available for commissions and collaborations, and i’m <br>
                            excited to hear from you about new projects.</p>
                        <div class="form_btn">
                            <button class="boxed-btn3" type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="appointMent_info">
                    <div class="single_appontment">
                        <h4>Visit our studio at</h4>
                        <p>221B Baker Street, P. O Box 3 Park Road, 
                            USA - 215852</p>
                    </div>
                    <div class="single_appontment">
                        <h4>Message us</h4>
                        <p>Support@colorlib.net <br>
                            (+68) 120034509</p>
                    </div>
                    <div class="single_appontment">
                        <h4>Working Hours</h4>
                        <p class="d-flex justify-content-between">
                            <span>Monday - Friday</span>
                            <span>:  09.00 - 23.00</span>
                        </p>
                        <p class="d-flex justify-content-between">
                            <span>Sunday</span>
                            <span>:  09.00 - 16.00s</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection