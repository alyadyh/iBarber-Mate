<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <!-- service style css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('website') }}/css/responsive.css" rel="stylesheet" /> --}}
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="shortcut icon" href="{{ asset('b_auth') }}/template/assets/images/favicon.png" />
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="">
                                    <img src="{{ asset('website') }}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="{{ request()->is('*about') ? 'active' : '' }}" href="{{ route('about.index') }}">about us</a></li>
                                                <li><a class="{{ request()->is('*serve') ? 'active' : '' }}" href="{{ route('serves.index') }}">our services</a></li>
                                                <li><a class="{{ request()->is('*hairstyle') ? 'active' : '' }}" href="{{ route('hairstyles.index') }}">choose your hairstyle</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="book_room">
                                        <div class="book_btn">
                                            <a class="popup-with-form" href="#test-form">Make an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    
    @yield('content')

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-lg-5 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('website') }}/img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Information
                            </h3>
                            <ul class="links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2  col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Smooth Shave </a></li>
                                <li><a href="#">Beard Triming</a></li>
                                <li><a href="#"> Haircut Styles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2  col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Follow Us
                            </h3>
                            <ul class="links">
                                <li><a href="#">FaceBook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#"> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                    <div class="popup_inner">
                        <h3>Make an Appointment</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <input id="datepicker" placeholder="Date">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input id="timepicker" placeholder="time">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Choose services">Choose services 1</option>
                                        <option value="1">Choose services 2</option>
                                        <option value="2">Choose services 3</option>
                                        <option value="3">Choose services 4</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Choose Barbers">Choose Barbers</option>
                                        <option value="1">Zaki</option>
                                        <option value="2">Ronky</option>
                                        <option value="3">kalu</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Phone no">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email" placeholder="Your email">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </form>
<!-- form itself end -->

    <!-- JS here -->
    <script src="{{ asset('website') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('website') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('website') }}/js/popper.min.js"></script>
    <script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('website') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('website') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('website') }}/js/ajax-form.js"></script>
    <script src="{{ asset('website') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('website') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('website') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('website') }}/js/scrollIt.js"></script>
    <script src="{{ asset('website') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('website') }}/js/wow.min.js"></script>
    <script src="{{ asset('website') }}/js/nice-select.min.js"></script>
    <script src="{{ asset('website') }}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('website') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('website') }}/js/plugins.js"></script>
    <script src="{{ asset('website') }}/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="{{ asset('website') }}/js/contact.js"></script>
    <script src="{{ asset('website') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('website') }}/js/jquery.form.js"></script>
    <script src="{{ asset('website') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('website') }}/js/mail-script.js"></script>

    <script src="{{ asset('website') }}/js/main.js"></script>
    

    <!-- Service Style CSS -->
    {{-- <script src="{{ asset('website') }}/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
      <script src="{{ asset('website') }}/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('website') }}/js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script> --}}

    
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>