@extends('layouts.master')

@section('title')
    All news
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<section class="hero hero-sm" style="background-image: url('img/news/back.png');">
    <div class="hero-content py-5 px-3 px-md-5">
        <div class="head">            
            <div>
                <span class="path">Main page / </span>
                <span class="current-path">News </span>
            </div>
        </div>

       
        <h5 class="title mb-4">
            News
        </h5>
        <span class="hashtag-date mb-3">art events / music</span>
    </div>
</section>

{{-- main Section --}}
<section class="w-100 shop-section">
  <div class="w-100 py-3 d-block">
       <div class="body">
           <div class="tab">
              <ul class="tab-bar">
                  <li class="active"><a href="#" class="tab-item px-3 px-md-5" data-t-id="allnews" >All news</a></li>
                  <li><a href="#" class="tab-item" data-t-id="popular" >Popular</a></li>
                  <li><a href="#" class="tab-item" data-t-id="streetart" >Street art</a></li>
                  <li><a href="#" class="tab-item" data-t-id="culture" >Culture</a></li>
                  <li><a href="#" class="tab-item" data-t-id="music" >Music</a></li>
              </ul>
              <div class="tab-content">
                  {{-- tab all news --}}
                  <div class="tab-pane" id="allnews" style="display: block;">
                    <div class="w-100 d-flex flex-wrap">
                      {{-- news item 1 --}}
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
                              {{-- social button group  --}}
                              <ul class="social-button d-flex">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="">
                                        <i class="fa ico">
                                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                            </svg>    
                                        </i>                      
                                    </a>
                                </li>
                                <li>
                                  <a href="">
                                      <i class="fa ico">
                                        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                        </svg>      
                                      </i>
                                  </a>
                                </li>
                              </ul> 
                              {{-- end social button group --}}            
                            </div>
                            <a href="#" class="btn btn-primary">#culture</a>
                          </div> 
                        </div>
                      </div>
                      {{-- end news item 1 --}}
                      {{-- news item 2 --}}
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
                                {{-- social button group  --}}
                                <ul class="social-button d-flex">
                                  <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                  <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                  <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                  <li>
                                      <a href="">
                                          <i class="fa ico">
                                              <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                              </svg>    
                                          </i>                      
                                      </a>
                                  </li>
                                  <li>
                                    <a href="">
                                        <i class="fa ico">
                                          <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                              <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                              <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                          </svg>      
                                        </i>
                                    </a>
                                  </li>
                                </ul> 
                                {{-- end social button group --}}            
                              </div>
                              <a href="#" class="btn btn-primary">#culture</a>
                            </div> 
                          </div> 
                        </div>
                        <div class="col-md-6 border-b-1">
                          <div class="item-img" style="height: 537px;">
                            <img src="{{ asset('img/concept/music-2.png') }}" alt="">
                          </div>
                        </div>      
                      </div>
                      {{-- end news item 2 --}}
                  
                      {{-- news item 3 htype --}}
                      <div class="col-md-5 border-b-1">
                        <div class="social-description p-4">
                          <div class="tool-bar">
                            <a href="#" class="btn btn-primary">#music</a>
                            <div class="social-buttons">
                              {{-- social button group  --}}
                              <ul class="social-button d-flex">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="">
                                        <i class="fa ico">
                                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                            </svg>    
                                        </i>                      
                                    </a>
                                </li>
                                <li>
                                  <a href="">
                                      <i class="fa ico">
                                        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                        </svg>      
                                      </i>
                                  </a>
                                </li>
                              </ul> 
                              {{-- end social button group --}}            
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
                      {{-- end news item 3 htype --}}
                  
                      {{-- news item 4 --}}
                      <div class="col-md-5 md-border-r-1 border-b-1">
                        <div class="item-img" style="max-height: 348px;">
                          <img src="{{ asset('img/events/art-2.png') }}" alt="">
                        </div>
                        <div class="social-description p-4">
                          <div class="item-content">
                            <p>
                              ARIS, FRANCE - JANUARY 23: (L-R) Rapper ASAP Rocky and Fashion designer Kris Van Assche pose Backstage after the Dior Homme Menswear Fall/Winter 2016-2017 show as part of Paris Fashion Week on January 23
                            </p>  
                          </div> 
                          <div class="tool-bar">
                            <div class="social-buttons">
                              {{-- social button group  --}}
                              <ul class="social-button d-flex">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="">
                                        <i class="fa ico">
                                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                            </svg>    
                                        </i>                      
                                    </a>
                                </li>
                                <li>
                                  <a href="">
                                      <i class="fa ico">
                                        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                        </svg>      
                                      </i>
                                  </a>
                                </li>
                              </ul> 
                              {{-- end social button group --}}            
                            </div>  
                            <a href="#" class="btn btn-primary">#culture</a>        
                          </div> 
                        </div>    
                      </div>
                      {{-- end news item 4 --}}
                  
                      <div class="col-md-7">
                          {{-- news item 5 htype --}}
                          <div class="w-100 d-flex">
                            <div class="col-md-6 border-b-1">
                              <div class="social-description p-4">
                                <div class="tool-bar">
                                  <a href="#" class="btn btn-primary">#culture</a> 
                                  <div class="social-buttons">
                                    {{-- social button group  --}}
                                    <ul class="social-button d-flex">
                                      <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li>
                                          <a href="">
                                              <i class="fa ico">
                                                  <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                                  </svg>    
                                              </i>                      
                                          </a>
                                      </li>
                                      <li>
                                        <a href="">
                                            <i class="fa ico">
                                              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                              </svg>      
                                            </i>
                                        </a>
                                      </li>
                                    </ul> 
                                    {{-- end social button group --}}            
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
                              <div class="item-img" style="height: 194px;">
                                <img src="{{ asset('img/concept/popular-4.png') }}" alt="">
                              </div>
                            </div>
                          </div>
                          {{-- end news item 5 htype --}}
                  
                          {{-- news item 6 htype --}}
                          <div class="w-100 d-flex">
                            <div class="col-md-6 border-b-1">
                              <div class="item-img" style="height: 194px;">
                                <img src="{{ asset('img/concept/popular-1.png') }}" alt="">
                              </div>
                            </div>
                            <div class="col-md-6 border-b-1">
                              <div class="social-description p-4">
                                <div class="tool-bar">
                                  <a href="#" class="btn btn-primary">#culture</a> 
                                  <div class="social-buttons">
                                    {{-- social button group  --}}
                                    <ul class="social-button d-flex">
                                      <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li>
                                          <a href="">
                                              <i class="fa ico">
                                                  <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                                  </svg>    
                                              </i>                      
                                          </a>
                                      </li>
                                      <li>
                                        <a href="">
                                            <i class="fa ico">
                                              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                              </svg>      
                                            </i>
                                        </a>
                                      </li>
                                    </ul> 
                                    {{-- end social button group --}}            
                                  </div>         
                                </div> 
                                <div class="item-content">
                                  <p>
                                    On Friday, J-Hope, the K-pop group's rapper will be releasing "Chicken Noodle Soup" featuring the songstress, as well 
                                  </p>  
                                </div> 
                              </div>
                            </div>
                          </div>
                          {{-- end news item 6 htype --}}
                  
                          {{-- news item 7 htype --}}
                          <div class="w-100 d-flex">
                            <div class="col-md-6 border-b-1">
                              <div class="social-description p-4">
                                <div class="tool-bar">
                                  <a href="#" class="btn btn-primary">#culture</a> 
                                  <div class="social-buttons">
                                    {{-- social button group  --}}
                                    <ul class="social-button d-flex">
                                      <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li>
                                          <a href="">
                                              <i class="fa ico">
                                                  <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                                  </svg>    
                                              </i>                      
                                          </a>
                                      </li>
                                      <li>
                                        <a href="">
                                            <i class="fa ico">
                                              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                                  <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                              </svg>      
                                            </i>
                                        </a>
                                      </li>
                                    </ul> 
                                    {{-- end social button group --}}            
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
                              <div class="item-img" style="height: 194px;">
                                <img src="{{ asset('img/concept/ongoing-project/1.png') }}" alt="">
                              </div>
                            </div>
                          </div>
                          {{-- end news item 7 htype --}}
                      </div>    
                  
                      {{-- news item 8 htype --}}
                      <div class="col-md-5 border-b-1">
                        <div class="social-description p-4">
                          <div class="tool-bar">
                            <a href="#" class="btn btn-primary">#music</a>
                            <div class="social-buttons">
                              {{-- social button group  --}}
                              <ul class="social-button d-flex">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="">
                                        <i class="fa ico">
                                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                                            </svg>    
                                        </i>                      
                                    </a>
                                </li>
                                <li>
                                  <a href="">
                                      <i class="fa ico">
                                        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                                            <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                                        </svg>      
                                      </i>
                                  </a>
                                </li>
                              </ul> 
                              {{-- end social button group --}}            
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
                      {{-- end news item 8 htype --}}
                    </div>             
                  </div>
                  {{-- End tab all news --}}
              </div>
           </div>
       </div>
  </div>
</section>
{{-- End main Section --}}

{{-- Comission Section --}}
<section class="comission-section mb-50">      
  <div class="w-100 d-flex position-relative">
    <div class="line position-absolute bottom-0 end-0">
      <img src="{{ asset('img/concept/comission/line.png') }}" alt="Line">
    </div>
    <div class="col-md-5 d-flex justify-content-center align-items-center py-md-5">
      <img src="{{ asset('img/concept/comission/light-white.png') }}" alt="Light">
    </div>
    <div class="col-md-7 d-flex justify-content-start align-items-center py-md-5 flex-wrap">
      <div class="col-md-6">
        <h3 class="w-100 text-uppercase">Have an idea for the creative project?</h3>
        <p class="w-100">Tell us about the project</p>
        <div class="w-100 d-flex">
          <a href="{{ url('contact-us/commission-project') }}">
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
    $(document).on('click', '.item-img', () => {
        location.href = "/news/details";
    });  
</script>    
@endsection


@section('footer')
  @include('layouts.footer-1')    
@endsection