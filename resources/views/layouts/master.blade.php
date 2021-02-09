<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="@yield('keywords')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>
        @yield('title')
    </title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script>
      window.base_url = "{{ URL::to('/') }}";
    </script>
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


    {{-- modal --}}
    <div class="modal fade" id="newsletter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">NEWSLETTER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- body --}}
              <p class="new-letter">Subscribe to our newsletter</p>
              <form action="" class="form_email mb-30">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Your email">
                  <a href="" type="submit" class="d-flex"><i class="fa m-auto">
                    <svg width="31" height="26" viewBox="0 0 31 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M29.3281 12.7152L1.71367 24.4304L6.00925 12.7152M29.3281 12.7152L1.71367 0.999999L6.00925 12.7152M29.3281 12.7152L6.00925 12.7152" stroke="black"/>
                    </svg>                  
                  </i></a>
                </div>
              </form>
              <span class="form_email_desc">
                By signing up, you agree to our 
                Terms & Conditions and Privacy Policy
              </span>
            {{-- end body --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    {{-- end modal --}}

    <!-- All JavaScript Files-->
    <script src="{{ asset('js/app.js') }}"></script>
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