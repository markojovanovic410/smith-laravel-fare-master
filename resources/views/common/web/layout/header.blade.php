<style type="text/css">
   .mob-show{
      display: none !important;
   }
   @media only screen and (max-width: 767px) {
      .logo-outer{
         padding-left: 0px !important;
      }
      .mob-hide {
         display: none !important;
      }
      .mob-show{
         display: inline-block !important;
         margin-top: 15px;
      }
   }
</style>
<!-- Main Header / Header Style One-->
   <header class="main-header header-style-one">
      <!--Header-Upper-->
      <div class="header-upper">
         <div class="auto-container">
            <div class="clearfix">
               <div class="logo-outer">
                  <div class="logo">
                     <a href="{{URL::to('')}}">
                        <img style="width: 200px" src="{{ Helper::getSiteLogo() }}" alt="Farerun" title="Farerun">
                     </a>
                  </div>
               </div>
               <div class="upper-right clearfix">
                  <!--Info Box-->
                  <!-- <div class="info-box">
                     <div class="icon-box"><span class="flaticon-buildings"></span></div>
                     <ul>
                        <li><strong>Visit Us:</strong></li>
                        <li>123A, Mainbridge, USA</li>
                     </ul>
                  </div> -->
                  <!--Info Box-->
                  <div class="info-box mob-hide">
                     <div class="icon-box"><span class="flaticon-technology-5"></span></div>
                     <ul>
                        <li><strong>Call Us:</strong></li>
                        <li>@if(isset(Helper::getSettings()->site->contact_number)){{ Helper::getSettings()->site->contact_number[0]->number}}@endif</li>
                     </ul>
                  </div>
                  <div class="info-box mob-hide">
                     <div class="icon-box"><span class="flaticon-envelope"></span></div>
                     <ul>
                        <li><strong>Mail Us:</strong></li>
                        <li>@if(isset(Helper::getSettings()->site->contact_email)){{ Helper::getSettings()->site->contact_email}}@endif</li>
                     </ul>
                  </div>

                  <div class="info-box btn-box">
                     <a  class="theme-btn" href="{{URL::to('provider/signup')}}">{{ __('Provider Sign Up') }}</a>
                     <a  class="theme-btn mob-show" href="{{URL::to('user/signup')}}">{{ __('User Sign Up') }}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Header-Lower-->
      <div class="header-lower">
         <div class="auto-container">
            <div class="nav-outer clearfix">
               <!-- Main Menu -->
               <nav class="main-menu">
                  <div class="navbar-header">
                     <!-- Toggle Button -->       
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="navbar-collapse collapse clearfix">
                     <ul class="navigation clearfix">
                        <li class="current"><a href="{{URL::to('')}}">{{ __('Home') }}</a></li>
                        <li><a href="">{{ __('About') }}</a></li>
                        <!-- <li><a href="">{{ __('Services') }}</a></li>
                        <li><a href="">{{ __('Features') }}</a></li> -->
                        <li><a href="">{{ __('How It Works') }}</a></li>
                        <li class="dropdown">
                           <a href="#">Provider</a>
                           <ul>
                              <li><a href="{{URL::to('provider/login')}}">{{ __('Sign In') }}</a></li>
                              <li><a href="{{URL::to('provider/signup')}}">{{ __('Sign Up') }}</a></li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="#">User</a>
                           <ul>
                              <li><a href="{{URL::to('user/login')}}">{{ __('Sign In') }}/{{ __('Sign Up') }}</a></li>
                           </ul>
                        </li>
                        
                        <!-- <li class="dropdown" style="float:right;position: relative;right: -25%;">
                           <a href="#">Login/Register</a>
                           <ul>
                              <li><a href="{{URL::to('user/login')}}">{{ __('User Sign In') }}/{{ __('Sign Up') }}</a></li>
                              <li><a href="{{URL::to('provider/login')}}">{{ __('Provider Sign In') }}</a></li>
                              <li><a href="{{URL::to('provider/signup')}}">{{ __('Provider Sign Up') }}</a></li>
                           </ul>
                        </li> -->
                     </ul>
                  </div>
               </nav>
               <!-- Main Menu End--><!--Social Links-->
               <div class="social-links">

                  <!-- <a href="#"><span class="fa fa-facebook-f"></span></a>
                  <a href="#"><span class="fa fa-twitter"></span></a>
                  <a href="#"><span class="fa fa-google-plus"></span></a>
                  <a href="#"><span class="fa fa-linkedin"></span></a>
                  <a href="#"><span class="fa fa-instagram"></span></a> -->
               </div>
            </div>
         </div>
      </div>
      <!--Sticky Header-->
      <div class="sticky-header">
         <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
               <a href="{{URL::to('')}}" class="img-responsive"><img  src="{{ Helper::getSiteLogo() }}" style="width: 150px;" alt="Farerun" title="Farerun"></a>
            </div>
            <!--Right Col-->
            <div class="right-col pull-right">
               <!-- Main Menu -->
               <nav class="main-menu">
                  <div class="navbar-header">
                     <!-- Toggle Button -->       
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="navbar-collapse collapse clearfix">
                     <ul class="navigation clearfix">
                        <li class="current"><a href="{{URL::to('')}}">{{ __('Home') }}</a></li>
                        <li><a href="">{{ __('About') }}</a></li>
                        <li><a href="">{{ __('Services') }}</a></li>
                        <li><a href="">{{ __('Features') }}</a></li>
                        <li><a href="">{{ __('How It Works') }}</a></li>
                        
                        <li class="dropdown">
                           <a href="#">Login/Register</a>
                           <ul>
                              <li><a href="{{URL::to('user/login')}}">{{ __('User Sign In') }}</a></li>
                              <li><a href="{{URL::to('user/login')}}">{{ __('User Sign Up') }}</a></li>
                              <li><a href="{{URL::to('provider/login')}}">{{ __('Provider Sign In') }}</a></li>
                              <li><a href="{{URL::to('provider/signup')}}">{{ __('Provider Sign Up') }}</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </nav>
               <!-- Main Menu End-->
            </div>
         </div>
      </div>
      <!--End Sticky Header-->
   </header>
   <!--End Main Header-->