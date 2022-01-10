@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}



@section('styles')
@parent
<link href="{{ asset('assets/landing/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('assets/landing/css/main.css')}}" rel="stylesheet">
<link href="{{ asset('assets/landing/css/responsive.css')}}" rel="stylesheet">
<style type="text/css">
.header-style-one ul li a {
    color: #eceded;
}
.header-style-one.fixed-header ul li a {
    color: #333;
}
.main-header.fixed-header .logo img {
    width:16% !important;
}
 .main-footer.style-four {
    background-color: #40b83c !important;
}
.main-header.fixed-header .btn-style-one {
    border: 1px solid;
}
</style>

@stop
@section('content')

<div class="page-wrapper">
    
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
   
    
    <!-- Banner Section -->
    <section class="banner-section" id="baner">
        <!-- Layers Box -->
        <div class="layers-box">
            <div class="layer-one"></div>
            <div class="layer-two"></div>
            <div class="layer-three" style="background-image: url({{ asset('assets/landing/images/pattern-1.png')}})"></div>
            <div class="layer-four" style="background-image: url({{ asset('assets/landing/images/pattern-1.png')}})"></div>
            <div class="layer-five" style="background-image: url({{ asset('assets/landing/images/pattern-1.png')}})"></div>
            <div class="layer-six" style="background-image: url({{ asset('assets/landing/images/pattern-1.png')}})"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
            
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h1>Get All your Services in <br> <span>One App!</span></h1>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing</div>
                        <a href="#" class="theme-btn btn-style-two">discover now</a>
                    </div>
                </div>
                
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="assets/images/mobile.png" alt="" />
                        </div> -->
                        <div class="col-lg-4 offset-lg-4 col-md-12">
                    <div class="wt-hero-phone">
                        <div class="wt-phone">
                           <div class="wt-phone-shadow"></div>
                           <div class="wt-phone-case"></div>
                           <div class="wt-phone-screen">
                              <div class="wt-phone-screen-video">
                                 <video preload="auto" loop="" muted="" autoplay="" playsinline="">
                                    <source src="{{ asset('assets/landing/src/intro.mp4')}}" type="video/mp4">
                                 </video>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Banner Section-->
    
    <!-- App Section -->
    <section class="app-section" id="about">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/pattern-4.png')}} )"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Welcome Column -->
                <div class="welcome-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <!-- Welcome Box -->
                        <img src="{{ asset('assets/landing/src/screen1.png')}}" class="img-fluid front-img">
                        <div class="image-two wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/landing/src/shadow-1.png')}}" alt="" />
                        </div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>One App for getting your <br> <span>Service Together</span></h2>
                        </div>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</div>
                        <a href="#" class="theme-btn btn-style-two"><span class="icon fa fa-apple"></span>discover now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End App Section -->
    

    <section class="features-section-serv" id="service">
        <div class="container">
            <div class="title-column col-lg-8 mx-auto col-md-12 col-sm-12 text-center">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Farerun Stuning <span>Services</span></h2>
                        <div class="text text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="tab-navigation">              
                        <select id="select-box" class="form-control country">
                            <option value="">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search Services...">
                      </div>
                </div>
            </div>
          </div>
        </section>
        <div class="container">
            <div class="row">   
                <div class="col-md-10 mx-auto service-tab-content">  
                    <div id="tab-1" class="tab-content">
                        <div class="row">
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/delivery.svg')}}">
                                    </div>
                                    <p>Food Delivery</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/motorcycle.svg')}}">
                                    </div>
                                    <p>Motor Rental</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/car.svg')}}">
                                    </div>
                                    <p>Taxi</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/electrician.svg')}}">
                                    </div>
                                    <p>Electrician</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/painter.svg')}}">
                                    </div>
                                    <p>Painter</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/work.svg')}}">
                                    </div>
                                    <p>Plumber</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div id="tab-2" class="tab-content">
                        <div class="row mx-auto">
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/delivery.svg')}}">
                                    </div>
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/motorcycle.svg')}}">
                                    </div>
                                    <p>Motor Rental</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/car.svg')}}">
                                    </div>
                                    <p>Taxi</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div id="tab-3" class="tab-content">
                        <div class="row mx-auto">
                            
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/electrician.svg')}}">
                                    </div>
                                    <p>Electrician</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/painter.svg')}}">
                                    </div>
                                    <p>Painter</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="inner-box">
                                    <div class="icon-outer">
                                        <img src="{{ asset('assets/landing/src/work.svg')}}">
                                    </div>
                                    <p>Plumber</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

        </div>

   
    
    <!-- Screenshots Section Three -->
    <section class="app-section-four" id="works">
        <div class="layer-one"></div>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/pattern-4.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="layer-three"></div>
                        <div class="layer-four"></div>
                        <div class="image">
                            <img src="{{ asset('assets/landing/src/screen-moc.png')}}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>How <span>Farerun</span> Works</h2>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</div>
                        </div>
                        <a href="#app" class="theme-btn btn-style-two">Get App</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Screenshots Section Three -->
    
    <!-- App Section -->
    
    <!-- End App Section -->

    <section class="features-section" id="feature">
        <div class="layer-one"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>We Provide Stunning <br> <span>Features</span></h2>
            </div>
            
            <div class="row clearfix">
                
                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="side-lines"></div>
                        <div class="icon-outer">
                            <span class="icon flaticon-drawing"></span>
                        </div>
                        <h4>Easy to Use</h4>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</div>
                    </div>
                </div>
                
                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="side-lines"></div>
                        <div class="icon-outer">
                            <span class="icon flaticon-lock-1"></span>
                        </div>
                        <h4>Secure Payment</h4>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </div>
                    </div>
                </div>
                
                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="side-lines"></div>
                        <div class="icon-outer">
                            <span class="icon flaticon-airplane49"></span>
                        </div>
                        <h4>Track Location</h4>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- App Section Two -->
    <section class="app-section-seven" id="app">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/icons/pattern-1.png')}} )"></div>
        <div class="pattern-layer-two"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Available this App <br> <span> Iphone &amp; Android</span></h2>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply.</p>
                            <p>Dummy text of the printing Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        </div>
                        <div class="btns-box">
                            <a href="#"><img src="{{ asset('assets/landing/src/play-store.png')}}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/landing/src/apple.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circles-layer"></div>
                        <div class="image wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                            <img src="{{ asset('assets/landing/src/app-sec.png')}}" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End App Section Two -->

    
    <!-- Screenshots Section -->
  <section class="screenshots-section-three padding">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/pattern-6.png')}}"></div>
        <div class="auto-container">
            <div class="outer-container">
                <div class="row clearfix">
                    
                    <!-- Title Column -->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title style-two">
                                <h2>Our Awesome App <span>Screenshots</span></h2>
                                <div class="text">Dummy text of the printing Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</div>
                            </div>
                            <a href="#" class="theme-btn btn-style-four">GET STARTED NOW</a>
                        </div>
                    </div>
                    
                    <!-- Carousel Column -->
                    <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="mobile-carousel-slider owl-carousel owl-theme">
                                <div class="slide">
                                    <figure class="image">
                                        <a href="{{ asset('assets/landing/src/screen1.png')}}" data-fancybox="screenshot-2" class="lightbox-image" title=""><img src="{{ asset('assets/landing/src/screen1.png')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="image">
                                        <a href="{{ asset('assets/landing/src/screen2.png')}}" data-fancybox="screenshot-2" class="lightbox-image" title=""><img src="{{ asset('assets/landing/src/screen2.png')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="image">
                                        <a href="{{ asset('assets/landing/src/screen3.png')}}" data-fancybox="screenshot-2" class="lightbox-image" title=""><img src="{{ asset('assets/landing/src/screen3.png')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="image">
                                        <a href="{{ asset('assets/landing/src/screen4.png')}}" data-fancybox="screenshot-2" class="lightbox-image" title=""><img src="{{ asset('assets/landing/src/screen4.png')}}" alt="" /></a>
                                    </figure>
                                </div>                              
                            </div>
                            <!--Mockup Layer-->
                            <div class="mockup-layer"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- End Screenshots Section -->
    

                                
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<!-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div> -->


@stop

@section('scripts')
@parent
<script src="{{ asset('assets/landing/js/jquery.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/landing/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/jquery.scrollTo.js')}}"></script>
<script src="{{ asset('assets/landing/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/landing/js/appear.js')}}"></script>
<script src="{{ asset('assets/landing/js/swiper.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/parallax.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/tilt.jquery.min.js')}}"></script>
<!--Master Slider-->
<script src="{{ asset('assets/landing/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('assets/landing/js/owl.js')}}"></script>
<script src="{{ asset('assets/landing/js/wow.js')}}"></script>
<script src="{{ asset('assets/landing/js/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/landing/js/script.js')}}"></script>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function openToggle() {
        document.getElementById("toggle-bg").style.width = "100%";
        document.getElementById("sideToggle").style.right = "-10px";
    }

    function closeToggle() {
        document.getElementById("toggle-bg").style.width = "0";
        document.getElementById("sideToggle").style.right = "-640px";
    }

    $(document).ready(function() {
        $('.nav-tabs li:first a').trigger('click');
    });

    $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
        $.getJSON('http://www.geoplugin.net/json.gp?ip=' + data.geobytesremoteip, function(response) {
            if (response.geoplugin_countryCode == 'AE') {
                if (!(window.location.href).includes('/ar')) {
                    location.replace('/ar');
                }
            }
        });
    });


    // jQuery(document).ready(function ($) {
    //    "use strict";

    // $('#rides').owlCarousel({

    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });

    // $('#deliveries').owlCarousel({

    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       375: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });

    // $('#other-services').owlCarousel({
    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       375: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });
</script>

<script type="text/javascript">
      //hide all tabs first


$( document ).ready(function() {
 $('.tab-content').hide();
//show the first tab content
$('#tab-1').show();

$('#select-box').change(function () {
   dropdown = $('#select-box').val();
  //first hide all tabs again when a new option is selected
  $('.tab-content').hide();
  //then show the tab content of whatever option value was selected
  $('#' + "tab-" + dropdown).show();                                    
});

});
</script>

<script type="text/javascript">
      //hide all tabs first

$( document ).ready(function() {

    $.ajax({
        url:  "https://api.farerun.org/getCities",
        type: "GET",
        beforeSend: function() {
              showLoader();
              // alert('send');
           },
        success: function(data) {
            // console.log(data);
            $("#select-box").empty()
                .append('<option value="">select</option>');
            $.each(data.responseData, function(key, item) {
                $("#select-box").append('<option value="' + item.id + '">' + item.city.city_name + '</option>');
            });
            var country=$('.country').val();
            $('#select-box').val(country);

        }
    });

});
</script>

<script type="text/javascript">
    (function( $ ) {      "use strict";   
  $(function() {
      $('#navbarNav ul li a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
        });
  });   
}(jQuery));
</script>

@stop