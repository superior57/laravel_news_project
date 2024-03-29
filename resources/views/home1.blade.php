@extends('layouts.master')

@section('title')
About Thai Culture, Music, & Arts Today. Thai News Online - G.IA Culture
@endsection

@section('keywords')
thai culture,about thai culture,thai music,thai news,thai news online,thai arts
@endsection

@section('sidebar')
  @include('layouts.sidebar-1')
@endsection

@section('content')

<!-- News section 1-->
<section class="news-section-1">
  {{-- Main News --}}
  <div class="col-12 col-md-5">
    <div class="news-item main-item overaly border-b-1 border-r-1">
      <img src="{{ asset($settings->news_img) }}" alt="Main news">
      <div id="news_video_wrap" class="back-video-item">
        <video id="news_video" src="{{ asset($settings->news_video) }}"></video>
      </div>
      <div class="news-item-content flex-wrap px-3 px-md-5">
        <div class="w-100">
          <h5>"Find the G Spot"</h5>
          <p>online platform</p>
        </div>
        <div class="px-md5 w-100">
          <h3>We promote <br> awareness of <br> the androgynous <br> society in Thailand</h3>
        </div>
        <div class="mb-5 w-100">
          {{-- paly button --}}
          <a href="#" class="btnvideo newsplay" onclick="videoPlay('news_video');">
            <div class="btn-video-play" >
              <div class="d-flex m-auto mb-2">
                <div class="d-flex justify-content-between align-items-center play-icon">
                  <i class="fa fa-play"></i>
                </div>
                <div class="">
                  <span>Play video</span>
                  <span>2:30</span>
                </div>
              </div>
            </div>
          </a>    
          {{-- end play button --}}
          {{-- pause button --}}
          <a href="#" class="btnvideo newspause" onclick="videoPause('news_video');">
            <div class="btn-video-play pause" >
              <div class="d-flex m-auto mb-2">
                <div class="d-flex justify-content-between align-items-center play-icon">
                  <i class="fa fa-pause"></i>
                </div>
                <div class="">
                  <span>Pause video</span>
                  <span></span>
                </div>
              </div>
            </div>
          </a>   
          {{-- end pause button --}}
        </div>
      </div>
    </div>
  </div>

  {{-- Videos ... --}}
  <div class="col-12 col-md-7">
    <div class="videos">
      <a href="{{ url('artists') }}">
        <div class="news-item overaly video-item border-b-1 animated fadeInRight">
          {{-- <video src="{{ asset('uploads/video/artist long1.mp4') }}" autoplay muted loop></video> --}}
          <img src="{{ asset($settings->artist_img) }}" alt="">
          <div class="back-video-item">
            <video src="{{ asset($settings->artist_video) }}" muted autoplay loop></video>
          </div>
          <div class="news-item-content">
            <div class="d-flex justify-content-between align-items-center px-3 px-md-5 w-100">
              <div>
                <h3>ATOMIC GURU$</h3>
                <p>street art / music / photo / video</p>
              </div>
              <div class="right-arrow">
                <img src="{{ asset('img/ico/right-arrow.svg') }}" alt="Right arrow">              
              </div>
            </div>
          </div>
        </div> 
      </a>

      <a href="{{ url('projects') }}">
        <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .2s;">        
          <img src="{{ asset($settings->project_img) }}" alt="">
          <div class="back-video-item">
            <video src="{{ asset($settings->project_video) }}" muted autoplay loop></video>
          </div>
          <div class="news-item-content">
            <div class="d-flex justify-content-between align-items-center px-3 px-md-5 w-100">
              <div>
                <h3>RICE BOWLS</h3>
                <p>art events / meetups</p>
              </div>
              <div class="right-arrow">
                <img src="{{ asset('img/ico/right-arrow.svg') }}" alt="Right arrow">              
              </div>
            </div>
          </div>
        </div>    
      </a>
      <a href="{{ url('shop') }}">
        <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .4s;">        
          <img src="{{ asset($settings->shop_img) }}" alt="">
          <div class="back-video-item">
            <video src="{{ asset($settings->shop_video) }}" muted autoplay loop></video>
          </div>
          <div class="news-item-content">
            <div class="d-flex justify-content-between align-items-center px-3 px-md-5 w-100">
              <div>
                <h3>CANDY SHOP</h3>
                <p>products designed in-house by GIA</p>
              </div>
              <div class="right-arrow">
                <img src="{{ asset('img/ico/right-arrow.svg') }}" alt="Right arrow">              
              </div>
            </div>
          </div>
        </div>   
      </a>
      <a href="{{ url('contact-us') }}">
        <div class="news-item overaly video-item border-b-1 animated fadeInRight" style="animation-delay: .6s;">        
          <img src="{{ asset($settings->contact_us_img) }}" alt="">
          <div class="back-video-item">
            <video src="{{ asset($settings->contact_us_video) }}" muted autoplay loop></video>
          </div>
          <div class="news-item-content">
            <div class="d-flex justify-content-between align-items-center px-3 px-md-5 w-100">
              <div>
                <h3>CYBERSEX</h3>
                <p>submit artwork  / comission a project</p>
              </div>
              <div class="right-arrow">
                <img src="{{ asset('img/ico/right-arrow.svg') }}" alt="Right arrow">              
              </div>
            </div>
          </div>
        </div>
      </a>      
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
              <social-buttons-small :url="'{{ urlencode(asset('img/concept/ongoing-project/1.png')) }}'" :text="'A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live music, food'"></social-buttons-small>
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
              <social-buttons-small :url="'{{ urlencode(asset('img/concept/ongoing-project/2.png')) }}'" :text="'A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live music, food'"></social-buttons-small>
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
        <social-buttons-small :url="'{{ urlencode(asset('img/concept/news/1.png')) }}'" :text="'A massive art fair featuring exhibitions from over 160 artists, plus workshops, activities, live music, food'"></social-buttons-small>
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
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/1.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/2.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/3.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
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
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/3.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/2.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/4.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
      </div>
      {{-- end product --}}
      {{-- product --}}
      <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
        <a href="{{ url('shop/details') }}">
          <div class="product">
            <div class="item-img">
              <img src="{{ asset('img/concept/product/1.png') }}" alt="">
            </div>
            <p class="summary">G.IA T-Shirt unisex</p>
            <h4 class="price">$69</h4>
          </div>
        </a>
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
        <social-buttons-small :url="'{{ urlencode(asset('img/concept/popular-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/popular-2.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/popular-3.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/popular-4.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
        <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
          <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
          <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
            <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
          <social-buttons-small :url="'{{ urlencode(asset('img/concept/art-1.png')) }}'" :text="'ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23'"></social-buttons-small>
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
<section class="comission-section mb-50">      
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
          <p class="w-100">Tell us about the project</p>
          <div class="w-100 d-flex">
            <a href="{{ url('commission-a-project') }}">
                <div class="btn-layout">
                    <svg viewBox="0 0 236 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H230V61H1V1Z" class="stroke" stroke="black" stroke-width="2"/>
                        <path class="no-stroke" d="M5 5H236V67H5V5Z" fill="black"/>
                    </svg>
                    <div>
                        <span>
                            Commission a project
                        </span>    
                    </div>
                </div>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
{{-- End Comission Section --}}


@endsection

@section('script')
<script>

    // toggle button class on click
    $('.btnvideo').on('click', function() {
        console.log('123');
        $('.newsplay, .newspause').toggle();
    });
    // toggle button class when finished
    $('#news_video')[0].onended = function(e) {
      console.log('123');
        $('.newsplay, .newspause').toggle();
    };
</script>    
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection