@extends('common.web.layout.base')
@section('content')

<style>
   .img-dd{

   }
   .img-ii{
      width: 100% !important;
      height: 250px;
   }
</style>
   <!--Main Slider-->
   <section class="main-slider" data-start-height="800" data-slide-overlay="yes">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
               <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset('assets/web/images/main-slider/1.jpg')}}" data-saveperformance="off" data-title="Awesome Title Here">
                  <img src="{{ asset('assets/web/images/main-slider-1.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-90" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <div class="small-title">No. 1 Car Rental / Hire Company</div>
                  </div>
                  <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <h2 class="big-title">Get All Apps In One Click</h2>
                  </div>
                  <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="130" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#myModal">Download Now</button>
                     <!-- <a href="#" class="theme-btn btn-style-one">Download Now</a> -->
                  </div>
               </li>

               
               <!-- <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset('assets/web/images/main-slider/2.jpg')}}" data-saveperformance="off" data-title="Awesome Title Here">
                  <img src="{{ asset('assets/web/images/main-slider-2.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-90" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <div class="small-title">The perfect way to ride!</div>
                  </div>
                  <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="10" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <div class="text-center">
                        <h2 class="big-title">Best secured, safe affordable and hassle free way to move around.</h2>
                     </div>
                  </div>
                  <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="130" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Book a Ride</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Download App</a></div>
               </li>
               <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset('assets/web/images/main-slider/3.jpg')}}" data-saveperformance="off" data-title="Awesome Title Here">
                  <img src="{{ asset('assets/web/images/main-slider-3.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-90" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <div class="small-title">Everyone want an extra income</div>
                  </div>
                  <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="10" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                     <div class="text-center">
                        <h2 class="big-title">Join us and earn as much as you want</h2>
                     </div>
                  </div>
                  <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="130" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Book a Ride</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Download App</a></div>
               </li> -->
            </ul>
         </div>
      </div>
   </section>
   <!--Welcome Section-->
   <section class="welcome-section">
      <div class="auto-container">
         <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column pull-right col-md-8 col-sm-12 col-xs-12">
               <!--Heading Title-->
               <div class="sec-title">
                  <h2>One App for getting your <br> <span>Service Together</span></h2>
                  <div class="desc-text">Our rides suit your needs and mood. And they’re all available right from your app. You can’t be late for work. (ever again.) We save You time because your time is your money.</div>
               </div>
               <div class="row clearfix">
                  <!--Service Block-->
                  <div class="service-block col-md-6 col-sm-6 col-xs-12">
                     <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-tax"></span></div>
                        <h3>Easy to Use</h3>
                        <div class="text">Get where ever you need to be as quickly as possible. Our safe user-friendly platform, provide several means of payment to ensure you're never stranded.</div>
                     </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-md-6 col-sm-6 col-xs-12">
                     <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-money"></span></div>
                        <h3>Refundable Deposit</h3>
                        <div class="text">Automated instant stress-free return of deposit when the service is not provided.</div>
                     </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-md-6 col-sm-6 col-xs-12">
                     <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-shape-1"></span></div>
                        <h3>Secure Payment</h3>
                        <div class="text">Worried about your security? We use one of the most secure payment systems in the world to ensure our customers have the best experience possible. Secure, safe, and reliable.</div>
                     </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-md-6 col-sm-6 col-xs-12">
                     <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-support"></span></div>
                        <h3>Track Location</h3>
                        <div class="text">Your security and safety is our top priority. We provide top industry standard service, no more entering one chance.</div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Form Column-->
            <div class="form-column pull-left col-md-4 col-sm-12 col-xs-12">
               <div class="form-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <!--Tabs Box-->
                  <div class="tabs-box booking-tabs">
                     <video preload="auto" loop="" muted="" autoplay="" playsinline="" style="width: 100%;">
                        <source src="{{ asset('assets/landing/src/intro.mp4')}}" type="video/mp4">
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Drive Cars-->
   <section class="drive-cars-section">
      <div class="auto-container">
         <!--Floated Title-->
         <div class="floated-title">
            <div class="inner clearfix">
               <div class="heading-block">Book a Ride</div>
               <div class="or">OR</div>
               <div class="heading-block">Be a Rider</div>
            </div>
         </div>
         <!--Big Image-->
         <figure class="big-image"><img src="{{ asset('assets/web/images/resource-featured-image-1.jpg')}}" alt=""></figure>
         <!--Heading Title-->
         <div class="sec-title centered">
            <div class="icon-box"><span class="flaticon-sports-car"></span></div>
            <h2>How Farerun Works</h2>
            <div class="desc-text">
               Our core service is developing technology that connect driver, riders and merchants. For a seamless ride experience
            </div>
         </div>
         <div class="row clearfix">
            <!--Service Block Two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
               <div class="inner-box">
                  <div class="icon-box"><span class="flaticon-clipboard-1"></span></div>
                  <h3>Book Your Car</h3>
                  <div class="text">Open the app, choose vehicle size, check the price, view the estimated times and confirm.</div>
               </div>
            </div>
            <!--Service Block Two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
               <div class="inner-box">
                  <div class="icon-box"><span class="flaticon-money-3"></span></div>
                  <h3>Pay the Fare</h3>
                  <div class="text">Enter your most preferred payment method, make payment and confirm payment.</div>
               </div>
            </div>
            <!--Service Block Two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
               <div class="inner-box">
                  <div class="icon-box"><span class="flaticon-car-3"></span></div>
                  <h3>Ride the Car</h3>
                  <div class="text">Your ride is ready to take you to your destination, don't forget to leave a review of your experience.</div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <!--Subscribe Section-->
   <section class="subscribe-section">
      <div class="auto-container">
         <!--Heading Title / Light Version-->
         <div class="sec-title centered light-version">
            <h2>Farerun Stuning Services</h2>
            <!-- <div class="desc-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div> -->
         </div>
         <!--Form-->
         <div class="form">

            <form>
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-4" style="padding: 0px">
                        <select id="select-box" class="form-control country" style="    height: 43px;">
                            <option value="">Select</option>
                        </select>
                     </div>
                     <div class="col-md-8">
                        <input type="text" name="search" value="" placeholder="Search Service" required>
                     </div>
                  </div>
                  <button type="submit" class="theme-btn btn-style-one">search</button>
               </div>
            </form>
         </div>
      </div>
   </section>
   <!--News Section-->
   <section class="news-section">
      <div class="auto-container">
         <!--Heading Title-->
         <div class="sec-title centered">
            <div class="icon-box"><span class="flaticon-sports-car"></span></div>
            <h2>Our Latest News</h2>
            <!-- <div class="desc-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </div> -->
         </div>
         <div class="row clearfix" id="homenews">
            <!--News Style One-->
            <!-- <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
               <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <figure class="image-box">
                     <a href="blog-single.html"><img src="{{ asset('assets/web/images/resource-blog-image-1.jpg')}}" alt=""></a> 
                     <div class="date-box"><span class="day">01</span><span class="month">Sep</span></div>
                  </figure>
                  <div class="lower-content">
                     <h3><a href="blog-single.html">Group would some form a family</a></h3>
                     <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply </div>
                     <a href="blog-single.html" class="theme-btn btn-style-four">Read More</a>
                  </div>
               </div>
            </div> -->
            <!--News Style One-->
            
         </div>
      </div>
   </section>
   <!--Testimonials Section-->
   {{-- <section class="testimonials-section">
      <div class="auto-container">
         <!--Testimonials Carousel-->
         <div class="testimonials-carousel">
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-1.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Erick Bishop</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-2.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</div>
                  <div class="author-info">
                     <h4 class="author-title">Lulie Ceasar</h4>
                     <div class="designation">Rofin, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-3.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem </div>
                  <div class="author-info">
                     <h4 class="author-title">Matt Wagh</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-1.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Erick Bishop</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-2.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Lulie Ceasar</h4>
                     <div class="designation">Rofin, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-3.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Matt Wagh</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-1.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Erick Bishop</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-2.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</div>
                  <div class="author-info">
                     <h4 class="author-title">Lulie Ceasar</h4>
                     <div class="designation">Rofin, Founder</div>
                  </div>
               </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
               <div class="inner-box">
                  <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('assets/web/images/resource-author-thumb-3.jpg')}}" alt=""></figure>
                  <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                  <div class="author-info">
                     <h4 class="author-title">Matt Wagh</h4>
                     <div class="designation">Poppies, Founder</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!--FUn Facts Section-->
   <!-- <section class="fun-facts-section fact-counter">
      <div class="auto-container">
         <div class="sec-title centered light-version">
            <div class="icon-box"><span class="flaticon-car-2"></span></div>
            <h2>Our Fun Facts</h2>
            <div class="desc-text">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </div>
         </div>
         <div class="row clearfix">
            <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="inner">
                  <div class="icon-box"><span class="flaticon-sports-car"></span></div>
                  <div class="content">
                     <h4 class="counter-title">Cabs</h4>
                     <div class="count-outer">
                        <span class="count-text" data-speed="5000" data-stop="8350">0</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="inner">
                  <div class="icon-box"><span class="flaticon-settings"></span></div>
                  <div class="content">
                     <h4 class="counter-title">Trips Daily</h4>
                     <div class="count-outer">
                        <span class="count-text" data-speed="7000" data-stop="25000">0</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="inner">
                  <div class="icon-box"><span class="flaticon-room-key"></span></div>
                  <div class="content">
                     <h4 class="counter-title">Clients Annually</h4>
                     <div class="count-outer">
                        <span class="count-text" data-speed="10000" data-stop="5500000">0</span> +
                     </div>
                  </div>
               </div>
            </div>

            <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="inner">
                  <div class="icon-box"><span class="flaticon-dashboard-1"></span></div>
                  <div class="content">
                     <h4 class="counter-title">Kilometers Daily</h4>
                     <div class="count-outer">
                        <span class="count-text" data-speed="8000" data-stop="12000">0</span> +
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->

   <!-- <section class="sponsors-section">
      <div class="auto-container">
         <ul class="sponsors-slider">
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-1.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-2.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-3.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-4.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-5.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-1.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-2.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-3.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-4.png')}}" alt=""></a></div>
            </li>
            <li>
               <div class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients-5.png')}}" alt=""></a></div>
            </li>
         </ul>
      </div>
   </section> -->
   
   <!--Call To Action Footer-->
   <div class="call-to-action-footer">
      <div class="auto-container">
         <div class="row clearfix">
            <!--Left Column-->
            <div class="left-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
               <div class="inner-box">
                  <div class="icon-box"><span class="fa fa-phone"></span></div>
                  Contact Us:  <strong>@if(isset(Helper::getSettings()->site->contact_number)){{ Helper::getSettings()->site->contact_number[0]->number}}@endif</strong>
               </div>
            </div>
            <!--Right Column-->
            <div class="right-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
               <div class="inner-box">
                  <div class="content-box">
                     <figure class="logo-box"><a href="index.html"><img src="{{ Helper::getSiteLogo() }}" alt=""></a></figure>
                     <div class="text">A Made in Africa logistic company, committed to providing seamless and stress free experience for users, drivers and merchant.</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <!-- <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Modal Header</h4>
         </div> -->
         <div class="modal-body">
           <div class="row">
              <div class="col-md-6 text-center">
                 <h2 style="margin-bottom: 30px;">User</h2>
                 <a href="https://apps.apple.com/pk/app/farerun-user/id1522894034" target="_blank">
                    <img src="{{ asset('assets/web/images/apple-store.png')}}" style="width: 200px;">
                 </a>
                 <a href="https://play.google.com/store/apps/details?id=com.farerun.user" target="_blank">
                    <img src="{{ asset('assets/web/images/google-store.png')}}" style="width: 200px;">
                 </a>
              </div>
              <div class="col-md-6 text-center">
                 <h2 style="margin-bottom: 30px;">Provider</h2>
                 <a href="https://apps.apple.com/pk/app/farerun-provider/id1522869707" target="_blank">
                    <img src="{{ asset('assets/web/images/apple-store.png')}}" style="width: 200px;">
                 </a>
                 <a href="https://play.google.com/store/apps/details?id=com.farerun.provider" target="_blank">
                    <img src="{{ asset('assets/web/images/google-store.png')}}" style="width: 200px;">
                 </a>
              </div>
           </div>
         </div>
         <!-- <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div> -->
       </div>

     </div>
   </div>
@endsection

@section('script')
    @parent
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <script>

      const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "June",
        "July", "Aug", "Sept", "Oct", "Nov", "Dec"
      ];
     $.ajax({
           type: "GET",
           url: "{{Helper::getBaseUrl()}}/cmshomenews",
           data: {
            company_id: 1
           },
           success: function(data) {
               var result = data.responseData;
               result.map(function(item, idx){
                  var date = new Date(item.created_at).getDate();
                  var month = new Date(item.created_at).getMonth();
                  $('#homenews').append(`
                        <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                           <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <figure class="image-box img-dd">
                                 <a href="blog-single.html">
                                    <img src="${item.photo}" class="img-ii" alt="">
                                 </a> 
                                 <div class="date-box">
                                    <span class="day">${date}</span>
                                    <span class="month">${monthNames[month]}</span>
                                 </div>
                              </figure>
                              <div class="lower-content">
                                 <h3>${item.heading.substr(0, 40)}</h3>
                                 <div class="text" style="height:50px;">
                                    ${item.content.substr(0, 105)} ...
                                 </div>
                                 <a href="/news/${item.id}" class="theme-btn btn-style-four">Read More</a>
                              </div>
                           </div>
                        </div>
                     `);   
                  });
               }
      });

      function isEven(value) {
         if (value%2 == 0)
            return true;
         else
            return false;
      }
   </script>
@endsection

