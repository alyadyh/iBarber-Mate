@extends('display.layout')

@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            {{-- <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider_text">
                                <h3>Modern barber
                                    shop in center
                                    of the city</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="boxed-btn3">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider_text">
                                <h3>Modern barber
                                    shop in center
                                    of the city</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="boxed-btn3">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider_text">
                                <h3>Modern barber
                                    shop in center
                                    of the city</h3>
                                <p>Save your time with iBarberPal by choosing the hairstyle that suit you. <br>Get the perfect haircut and be stylish. Make an appointment now.</p>
                                <a href="#" class="boxed-btn3">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumbs">
                        <div class="large_img_1">
                            <img src="{{ asset('website') }}/img/about/about_lft.png" alt="">
                        </div>
                        <div class="small_img_1">
                            <img src="{{ asset('website') }}/img/about/about_right.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteiusmod tempor incididunt ut labore et dolore magna aliqua. Qpsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultr.</p>
                        </div>
                        <p class="opening_hour">
                            Opening Hour
                            <span>10:00 am - 10:00 pm</span>
                        </p>
                        <a href="{{ asset('website') }}/about.html" class="boxed-btn3">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

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
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb">
                             <img src="{{ asset('website') }}/img/service/1.png" alt="">
                         </div>
                         <div class="service_content text-center">
                            <div class="icon">
                                <i class="flaticon-shave"></i>
                            </div>
                            <h3>Smooth Shave</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb">
                             <img src="{{ asset('website') }}/img/service/2.png" alt="">
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
                             <img src="{{ asset('website') }}/img/service/3.png" alt="">
                         </div>
                         <div class="service_content text-center">
                            <div class="icon">
                                <i class="flaticon-null"></i>
                            </div>
                            <h3>Haircut Styles</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title mb-55">
                        <h3>Our Pricing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="prising_slider_active owl-carousel">
                        <div class="prising_active d-flex justify-content-between">
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prising_active d-flex justify-content-between">
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prising_active d-flex justify-content-between">
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_prising">
                                <div class="prise_title">
                                    <h4>Hair Styling</h4>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Cut</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Hair Style</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="service_inner">
                                        <div class="thumb">
                                            <img src="{{ asset('website') }}/img/prising/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hair_style_info">
                                        <div class="prise d-flex justify-content-between">
                                            <span>Shaving</span>
                                            <span>$8</span>
                                        </div>
                                        <p>Lorem ipsum dolor sitamet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- team_area_start  -->
    <div class="team_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section_title text-center mb-55">
                        <h3>Barber</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team_member">
                        <div class="team_thumb">
                            <img src="{{ asset('website') }}/img/team/1.png" alt="">
                        </div>
                        <div class="member_info text-center">
                            <h3>Jhon Smith</h3>
                            <p>Junior Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team_member">
                        <div class="team_thumb">
                            <img src="{{ asset('website') }}/img/team/2.png" alt="">
                        </div>
                        <div class="member_info text-center">
                            <h3>Jems Smith</h3>
                            <p>Junior Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team_member">
                        <div class="team_thumb">
                            <img src="{{ asset('website') }}/img/team/3.png" alt="">
                        </div>
                        <div class="member_info text-center">
                            <h3>Thomas J Watson</h3>
                            <p>Junior Barber</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team_area_end  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Testimonial
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('website') }}/img/testmonial/1.png" alt="">
                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('website') }}/img/testmonial/1.png" alt="">
                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('website') }}/img/testmonial/1.png" alt="">
                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

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