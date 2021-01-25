<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>
        {!! env('APP_NAME') !!} | @yield('title')
    </title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    @yield('style')
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div>
    </div>
    <!-- Header Area-->
    {{-- @include('layouts.header') --}}

    {{-- Sidebar --}}
    @yield('sidebar')

    {{-- Page Content Wrapper --}}
    <div class="content-wrapper" id="content_wrapper">
        @yield('content')
        <!-- Footer Area-->
        @yield('footer')
    </div>    
    <!-- All JavaScript Files-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>    
    <script src="{{ asset('js/default/classy-nav.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/default/jquery.scrollup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/default/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('js/default/cookiealert.js') }}"></script>
    <script src="{{ asset('js/default/jquery.passwordstrength.js') }}"></script>
    <script src="{{ asset('js/default/mail.js') }}"></script>
    <script src="{{ asset('js/default/active.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>

    @yield('script')
    
  </body>
</html>