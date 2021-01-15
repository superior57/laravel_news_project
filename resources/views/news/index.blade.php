@extends('layouts.master')

@section('title')
    All news
@endsection

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

<!-- News section 1-->
<section class="news-section-1">
  {{-- Main News --}}
  <div class="col-12 col-md-5">
    <div class="news-item main-item overaly border-b-1 border-r-1">
      <img src="{{ asset('img/concept/news/1.png') }}" alt="Main news">
      <div class="news-item-content flex-wrap px-3 px-md-5">
        <div class="w-100">
          <h5>"Find the G Spot"</h5>
          <p>online platform</p>
        </div>
        <div class="px-md5 w-100">
          <h3>We promote <br> awareness of <br> the androgynous <br> society in Thailand</h3>
        </div>
        <div class="mb-5 w-100">
          <a >
            <img src="{{ asset('img/svg/play-button.svg') }}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Videos ... --}}
  <div class="col-12 col-md-7">
    <div class="videos">
      <div class="news-item overaly video-item border-b-1 animated fadeInRight">
        {{-- <video src="{{ asset('uploads/video/artist long1.mp4') }}" autoplay muted loop></video> --}}
        <img src="{{ asset('img/concept/news/artists.png') }}" alt="">
        <div class="news-item-content">
          <div class="px-3 px-md-5 w-100">
            <h3>Artists</h3>
            <p>street art / music / photo / video</p>
          </div>
        </div>
      </div>
      <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .2s;">
        <img src="{{ asset('img/concept/news/project.png') }}" alt="">
        <div class="news-item-content">
          <div class="px-3 px-md-5 w-100">
            <h3>projects</h3>
            <p>art events / meetups</p>
          </div>
        </div>
      </div>
      <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .4s;">
        <img src="{{ asset('img/concept/news/shop.png') }}" alt="">
        <div class="news-item-content">
          <div class="px-3 px-md-5 w-100">
            <h3>shop</h3>
            <p>products designed in-house by GIA</p>
          </div>
        </div>
      </div>
      <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .6s;">
        <img src="{{ asset('img/concept/news/contact-us.png') }}" alt="">
        <div class="news-item-content">
          <div class="px-3 px-md-5 w-100">
            <h3>contact us</h3>
            <p>submit artwork  / comission a project</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Event content --}}
  <div class="col-12 col-md-5">
    <div class="news-item time-content md-border-r-1 event">      
      <div class="news-item-content flex-wrap px-3 px-md-5">
        <div class="w-100">
          <a href="#" class="btn btn-primary">#streetart</a>
          <div class="date-time-item d-flex">
            <div class="time-item">
              <div class="d-flex">
                <p>10</p>
                <p>:</p>
              </div>
              days
            </div>
            <div class="time-item">
              <div class="d-flex">
                <p>06</p>
                <p>:</p>
              </div>
              hours
            </div>
            <div class="time-item">
              <div class="d-flex">
                <p>34</p>
              </div>
              minutes
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="news-section-2">
  {{-- Tyler --}}
  <div class="col-12 col-md-5">
    <div class="event md-border-r-1 border-b-1">
      <div class="event-title">      
        <div class="px-3 px-md-5">
          <h3 class="text-black text-uppercase">Tyler The Creator X golf Wang Tour 2020</h3>        
        </div>
        <div class="px-3 px-md-5">
          <a href="{{ url('/events') }}" class="btn btn-more">more info             
          </a>
        </div>
      </div>
      <div class="event-image">
        <img src="{{ asset('img/concept/event-img-1.png') }}" alt="Event Image">
      </div>
    </div>
  </div>
  
  <div class="col-12 col-md-7">
    {{-- Ongoing Projects ... --}}
    <div class="on-going-project">
      <div class="project-header py-2 px-3 px-md-5 border-b-1 d-flex align-items-center">
        <div class="mr-15">
          <h3>Ongong projects</h3>
        </div>
        <div class="user-list d-flex justify-content-between">
          <div class="circle-avatar-sm mr-15" style="background: url('img/svg/ellipse.svg') no-repeat;">
            <div>
              <img src="{{ asset('img/concept/users/egiphy_1.png') }}" alt="">
            </div>            
          </div> 
          <div class="circle-avatar-sm mr-15" style="background: url('img/svg/ellipse.svg') no-repeat;">
            <div>
              <img src="{{ asset('img/concept/users/e3_1_2.png') }}" alt="">
            </div>            
          </div> 
          <div class="circle-avatar-sm mr-15" style="background: url('img/svg/ellipse.svg') no-repeat;">
            <div>
              <img src="{{ asset('img/concept/users/e10496654575_f75748428a_z_1.png') }}" alt="">
            </div>            
          </div> 
          <div class="circle-avatar-sm mr-15" style="background: url('img/svg/ellipse.svg') no-repeat;">
            <div>
              <img src="{{ asset('img/concept/users/esb_pakorn_7_of_34_1.png') }}" alt="">
            </div>            
          </div> 
          <div class="circle-avatar-sm mr-15" style="background: url('img/svg/ellipse.svg') no-repeat;">
            <div>
              <img src="{{ asset('img/concept/users/etyga_will_be_performing_for_the_sunburn_arena_on_november_29_at_mmrda_bkc__1.png') }}" alt="">
            </div>            
          </div> 
        </div>
      </div>
      <div class="project-content d-flex">

        {{-- item --}}
        <div class="item col-12 col-md-6 border-b-1 border-r-1">
          <div class="item-img">
            <img src="{{ asset('img/concept/ongoing-project/1.png') }}" alt="Ongoing project">
          </div>
          <div class="item-body">
            <div class="tool-bar">
              <a href="#" class="btn btn-primary">#streetart</a>
              <div class="social-buttons">
                <a href="" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
                </a>
                <a href="#" class="btn btn-primary btn-social">
                   <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
                </a>
                <a href="#" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
                </a>
                <a href="#" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
                </a>
              </div>
            </div> 
            <div class="item-content">
              <p>
                A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live music, food
              </p>  
            </div>           
          </div>
        </div>
        {{-- end item --}}

        {{-- item --}}
        <div class="item col-12 col-md-6 border-b-1">
          <div class="item-img">
            <img src="{{ asset('img/concept/ongoing-project/2.png') }}" alt="Ongoing project">
          </div>
          <div class="item-body">
            <div class="tool-bar">
              <a href="#" class="btn btn-primary">#music</a>
              <div class="social-buttons">
                <a href="" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
                </a>
                <a href="#" class="btn btn-primary btn-social">
                   <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
                </a>
                <a href="#" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
                </a>
                <a href="#" class="btn btn-primary btn-social">
                  <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
                </a>
              </div>
            </div> 
            <div class="item-content">
              <p>
                A massive art fair featuring exhibitions from over 160 artists, plus workshops
              </p>  
            </div>           
          </div>
        </div>
        {{-- end item --}}
        
      </div>
    </div>  

    {{-- End Ongoing Projects --}}

  </div>

  <div class="h-on-going-project border-b-1">
    <div class="col-12 col-md-5 p-4">
      <div class="tool-bar">
        <a href="#" class="btn btn-primary">#streetart</a>
        <div class="social-buttons">
          <a href="" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
          </a>
          <a href="#" class="btn btn-primary btn-social">
             <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
          </a>
        </div>
      </div> 
      <div class="item-content">
        <p>
          A massive art fair featuring exhibitions from over 160 artists, plus workshops
        </p>  
      </div> 
    </div>
    <div class="item-img col-12 col-md-7">
      <img src="{{ asset('img/concept/news/1.png') }}" alt="">
    </div>
  </div>

  <div class="stream-text">
    <marquee scrollamount="10" loop="infinite">
      <h1>#JOIN THE MOVEMENT</h1>
    </marquee>
  </div>
</section>

{{-- Shop --}}
<section class="shop-section border-b-1">
  <div class="w-100 p-3 px-md-5">
    <h3>Shop</h3>
    <div class="row">
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/1.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/2.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/3.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/4.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/3.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/2.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/4.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
        <div class="product">
          <div class="item-img">
            <img src="{{ asset('img/concept/product/1.png') }}" alt="">
          </div>
          <p class="summary">G.IA T-Shirt unisex</p>
          <h4 class="price">$69</h4>
        </div>
      </div>
      {{-- end product --}}
    </div>
    <div class="view-more my-5">
      <a href="{{ url('/shop') }}" class="btn btn-more">view all products</a>
    </div>
  </div>
</section>
{{-- End Shop --}}

{{-- Popular --}}
<section class="popular-section">
  <div class="popular-1 col-md-5 md-border-r-1 border-b-1">
    <h3 class="section-title border-b-1 px-3 px-md-5">Popular</h3>
    <div class="social-description p-4">
      <div class="tool-bar">
        <a href="#" class="btn btn-primary">#music</a>
        <div class="social-buttons">
          <a href="" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
          </a>
          <a href="#" class="btn btn-primary btn-social">
             <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
          </a>
        </div>
      </div> 
      <div class="item-content">
        <p>
          ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23
        </p>  
      </div> 
    </div>
    <div class="item-img">
      <img src="{{ asset('img/concept/popular-1.png') }}" alt="">
    </div>
  </div>
  <div class="col-md-7">
    <div class="w-full d-flex">
      {{-- Pop 2 --}}
      <div class="col-12 col-md-6 border-b-1 md-border-r-1">
        <div class="item-img" style="height: 293px;">
          <img src="{{ asset('img/concept/popular-2.png') }}" alt="">
        </div>
        <div class="social-description p-4">
          <div class="tool-bar">
            <a href="#" class="btn btn-primary">#music</a>
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
          <div class="item-content">
            <p>
              Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer Prize winners
            </p>  
          </div> 
        </div>
      </div>
      {{-- End pop 2 --}}
      {{-- Pop 3 --}}
      <div class="col-12 col-md-6 border-b-1">
        <div class="item-img" style="height: 293px;">
          <img src="{{ asset('img/concept/popular-3.png') }}" alt="">
        </div>
        <div class="social-description p-4">
          <div class="tool-bar">
            <a href="#" class="btn btn-primary">#streetart</a>
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
          <div class="item-content">
            <p>
              A massive art fair featuring exhibitions from over 160 artists, plus workshops
            </p>  
          </div> 
        </div>
      </div>
      {{-- End pop 3 --}}
    </div>
    <div class="w-100 d-flex">
      <div class="col-md-6 border-b-1">
        <div class="social-description p-4">
          <div class="tool-bar">
            <a href="#" class="btn btn-primary">#culture</a>
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
          <div class="item-content">
            <p>
              On Friday, J-Hope, the K-pop group's rapper will be releasing "Chicken Noodle Soup" featuring the songstress, as well 
            </p>  
          </div> 
        </div>
      </div>
      <div class="col-md-6 border-b-1">
        <div class="item-img" style="height: 187px;">
          <img src="{{ asset('img/concept/popular-4.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="stream-text border-b-1">
    <marquee scrollamount="10" loop="infinite">
      <h1>#find the g spot</h1>
    </marquee>
  </div>
</section>
{{-- End Popular --}}

{{-- Street art --}}
<section class="street-art-section">

  <div class="col-md-7 md-border-r-1">
    <h3 class="section-title border-b-1 px-3 px-md-5">Street art</h3>
    <div class="w-100 d-flex">
      {{-- art 1 --}}
      <div class="col-12 col-md-6 border-b-1 md-border-r-1">
        <div class="item-img" style="height: 293px;">
          <img src="{{ asset('img/concept/art-1.png') }}" alt="">
        </div>
        <div class="social-description p-4">          
          <div class="item-content">
            <p>
              Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer Prize winners
            </p>  
          </div> 
          <div class="tool-bar">
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
        </div>
      </div>
      {{-- end art 1 --}}
      {{-- art 2 --}}
      <div class="col-12 col-md-6 border-b-1">
        <div class="item-img" style="height: 293px;">
          <img src="{{ asset('img/concept/art-2.png') }}" alt="">
        </div>
        <div class="social-description p-4">          
          <div class="item-content">
            <p>
              A massive art fair featuring exhibitions from over 160 artists, plus workshops
            </p>  
          </div> 
          <div class="tool-bar">
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
        </div>
      </div>
      {{-- end art 2 --}}
    </div>    
  </div>
  {{-- art 3 --}}
  <div class="col-md-5 border-b-1">    
    <div class="social-description p-4">      
      <div class="item-content">
        <p>
          ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23
        </p>  
      </div> 
      <div class="tool-bar">
        <div class="social-buttons">
          <a href="" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
          </a>
          <a href="#" class="btn btn-primary btn-social">
             <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
          </a>
          <a href="#" class="btn btn-primary btn-social">
            <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
          </a>
        </div>
      </div> 
    </div>
    <div class="item-img" style="height: 350px;">
      <img src="{{ asset('img/concept/art-3.png') }}" alt="">
    </div>
  </div>
  {{-- end art 3 --}}

  {{-- art 4 --}}
  <div class="w-100 d-flex">
    <div class="col-md-7 border-b-1">
      <div class="item-img" style="height: 187px;">
        <img src="{{ asset('img/concept/art-4.png') }}" alt="">
      </div>
    </div>
    <div class="col-md-5 border-b-1">
      <div class="social-description p-4">        
        <div class="item-content">
          <p>
            A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live. A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live
          </p>  
        </div> 
        <div class="tool-bar">
          <div class="social-buttons">
            <a href="" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
            </a>
            <a href="#" class="btn btn-primary btn-social">
               <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
            </a>
          </div>
        </div> 
      </div>
    </div>    
  </div>
  {{-- end art 4 --}}
  
</section>
{{-- End Street art --}}

{{-- Music --}}
<section class="music-section">
  <h3 class="section-title px-3 px-md-5 border-b-1">Music</h3>
  <div class="w-100 d-flex">
    {{-- music 1 --}}
    <div class="col-md-5 md-border-r-1 border-b-1">
      <div class="item-img" style="height: 293px;">
        <img src="{{ asset('img/concept/music-1.png') }}" alt="">
      </div>
      <div class="social-description p-4">          
        <div class="item-content">
          <p>
            A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live. A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live
          </p>  
        </div> 
        <div class="tool-bar">
          <div class="social-buttons">
            <a href="" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
            </a>
            <a href="#" class="btn btn-primary btn-social">
               <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
            </a>
          </div>
        </div> 
      </div>
    </div>
    {{-- end music 1 --}}
    {{-- music 2 --}}
    <div class="col-md-7 d-flex">
      <div class="col-md-6 border-b-1">
        <div class="social-description p-4">          
          <div class="item-content">
            <p>
              Tyla Yaweh and Post Malone have just released the video for their “Tommy Lee” track where they can be seen riding on four-wheelers through a pastoral setting.
              <br />
              <br>
              Watch the visual above. Adding another layer to the celebration of the Mötley Crüe drummer, Tommy Lee also plays the drums heard on the track. The distinct drumline in the background is accented by strings and choice chimes that serve as a base for emotive verses from Tyla and Post. Aside from outlining the positive tied to their respective “rockstar” personas, the two also touch on the tribulations of their position
            </p>  
          </div> 
          <div class="tool-bar">
            <div class="social-buttons">
              <a href="" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
              </a>
              <a href="#" class="btn btn-primary btn-social">
                 <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
              </a>
              <a href="#" class="btn btn-primary btn-social">
                <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
              </a>
            </div>
          </div> 
        </div> 
      </div>
      <div class="col-md-6 border-b-1">
        <div class="item-img" style="height: 537px;">
          <img src="{{ asset('img/concept/music-2.png') }}" alt="">
        </div>
      </div>
      
    </div>
    {{-- end music 2 --}}    
  </div>
  {{-- music 3 --}}
  <div class="w-100 d-flex">
    <div class="col-md-5 border-b-1">
      <div class="social-description p-4">
        <div class="tool-bar">
          <a href="#" class="btn btn-primary">#music</a>
          <div class="social-buttons">
            <a href="" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/twitter.svg') }}" alt="Twitter">                           
            </a>
            <a href="#" class="btn btn-primary btn-social">
               <img src="{{ asset('img/svg/facebook.svg') }}" alt="facebook">                  
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/mail.svg') }}" alt="mail">                
            </a>
            <a href="#" class="btn btn-primary btn-social">
              <img src="{{ asset('img/svg/linkedin.svg') }}" alt="linkedin"> 
            </a>
          </div>
        </div> 
        <div class="item-content">
          <p>
            Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer Prize winners
          </p>  
        </div> 
      </div>
    </div>
    <div class="col-md-7 border-b-1">
      <div class="item-img" style="height: 187px;">
        <img src="{{ asset('img/concept/music-3.png') }}" alt="">
      </div>
    </div>
  </div>
  {{-- end music 3 --}}
</section>
{{-- End Music --}}

{{-- Comission Section --}}
<section class="comission-section">      
    <div class="w-100 d-flex position-relative">
      <div class="line position-absolute bottom-0 end-0">
        <img src="{{ asset('img/concept/comission/line.png') }}" alt="Line">
      </div>
      <div class="col-md-5 d-flex justify-content-center align-items-center py-md-5">
        <img src="{{ asset('img/concept/comission/light.png') }}" alt="Light">
      </div>
      <div class="col-md-7 d-flex justify-content-start align-items-center py-md-5 flex-wrap">
        <div class="col-md-6">
          <h3 class="w-100 text-uppercase">Have an idea for the creative project?</h3>
          <p class="w-100">Tell us about the project in 60 seconds</p>
          <a href="" class="btn btn-secondary">Comission a project</a>
        </div>
      </div>
    </div>
</section>
{{-- End Comission Section --}}
@endsection

@section('script')
<script>
    $(document).on('click', '.item-img', () => {
        location.href = "/news/details";
    });  
</script>    
@endsection

@section('footer')
  @include('layouts.footer')    
@endsection