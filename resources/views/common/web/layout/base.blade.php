<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Farerun </title>
      <!-- Stylesheets -->
      <link href="{{ asset('assets/web/css/css-bootstrap.css')}}" rel="stylesheet">
      <link href="{{ asset('assets/web/css/css-revolution-slider.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/web/css/css-jquery-ui.css')}}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css" rel="stylesheet">
      <link href="{{ asset('assets/web/css/css-style.css')}}" rel="stylesheet">
      <!--Favicon-->
      <link rel="shortcut icon" href="{{ asset('assets/web/favicons/3258-images-favicon.ico')}}" type="image/x-icon">
      <link rel="icon" href="{{ asset('assets/web/favicons/2608-images-favicon.ico')}}" type="image/x-icon">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <link href="{{ asset('assets/web/css/css-responsive.css')}}" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
      <!--[if lt IE 9]><script src="{{ asset('assets/web/js/respond.js')}}"></script><![endif]-->

      <style type="text/css">
         .service-block{
            min-height: 150px;
         }
      </style>
      @section('style')
            
      @show

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154694096-3">
      </script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-154694096-3');
      </script>

      <!-- Facebook Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '4650487638316696');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=4650487638316696&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         @include('common.web.layout.header')
         @yield('content')
         @include('common.web.layout.footer')
      </div>
      <!--End pagewrapper-->
      <!--Scroll to top-->
      <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>
      <script src="{{ asset('assets/web/js/8013-js-jquery.js')}}"></script>
      <script src="{{ asset('assets/web/js/8782-js-jquery-ui.js')}}"></script>
      <script src="{{ asset('assets/web/js/2982-js-bootstrap.min.js')}}"></script>
      <script src="{{ asset('assets/web/js/1506-js-revolution.min.js')}}"></script>
      <script src="{{ asset('assets/web/js/9252-js-jquery.fancybox.pack.js')}}"></script>
      <script src="{{ asset('assets/web/js/9681-js-jquery.fancybox-media.js')}}"></script>
      <script src="{{ asset('assets/web/js/538-js-mixitup.js')}}"></script>
      <script src="{{ asset('assets/web/js/8335-js-owl.js')}}"></script>
      <script src="{{ asset('assets/web/js/5710-js-wow.js')}}"></script>
      <script src="{{ asset('assets/web/js/9004-js-script.js')}}"></script>

      @section('script')
            
      @show
   </body>
</html>