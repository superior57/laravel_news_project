@extends('layouts.master')

@section('title')
    Event | 
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<section class="hero" style="background-image: url('img/events/details-back.png');">
    <div class="hero-content py-5 px-3 px-md-5">
        <div class="mb-4">
            <a href="{{ url('/events') }}" class="btn-back">Back to all events</a>
        </div>
        <div class="head" style="margin-bottom: 121px;">            
            <div>
                <span class="path">Mane page / Events /</span>
                <span class="current-path">Tyler The Creator x GOLF WANG Tour 2020 </span>
            </div>
        </div>

        <h5 class="title mb-4"> 
            Tyler The Creator x <br>
            GOLF WANG Tour 2020
        </h5>
        <span class="sub-title mb-4">"Can't Smile Without You" - Martin Andersen's <br> book between terrace and casual</span>

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
</section>

{{-- Article Section --}}
<section class="w-100 py-5 px-3 px-md-5 article-section details">
    <div class="w-100 d-flex">
         {{-- social button group  --}}
         <ul class="social-button">
            <li class="wow animated fadeInLeft"><a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="wow animated fadeInLeft" style="animation-delay: .2s"><a href=""><i class="fa fa-instagram"></i></a></li>
            <li class="wow animated fadeInLeft" style="animation-delay: .4s"><a href=""><i class="fa fa-twitter"></i></a></li>
            <li class="wow animated fadeInLeft" style="animation-delay: .6s">
                <a href="">
                    <i class="ico">
                        <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                        </svg>    
                    </i>
                </a>
            </li class="wow animated fadeInLeft" style="animation-delay: .8s">
            <li class="wow animated fadeInLeft" style="animation-delay: 1s">
                <a href="">
                    <i class="ico">
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
        <div class="body mx-3 mx-md-5">
            <div class="w-100">
                <div class="top-infomation mb-50">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <h5>When</h5>
                                <span>
                                    8 - 12 PM, Saturday, 24 June, 2020
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h5>When</h5>
                                <span>
                                    8 - 12 PM, Saturday, 24 June, 2020
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h5>When</h5>
                                <span>
                                    8 - 12 PM, Saturday, 24 June, 2020
                                </span>
                            </div>
                        </div>
                    </div>                                            
                </div>

                {{-- Article 2 --}}
                <h3 class="mb-3">Horseferry Check by Burberry and Stone Island</h3>
                <p class="mb-4">The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. 
                    Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans, 
                    as well as the casual style that has always codified the imaginary</p>

                
                    <div class="article-image mb-50 wow animated fadeInUp">
                        <div class="item-img mb-2">
                            <img src="{{ asset('img/events/art-2.png') }}" alt="Article">
                        </div>
                        <p class="brief">
                            <span class="">Photographer </span>
                            <span class="">Rosario Rex</span>
                        </p>
                    </div>

                <p class="mb-50">
                    The fascination for the ultras world comes from the English terrace and from the supporters that follow the religious way that connects the pub, 
                    the stadium, another pub and maybe another one.
                    For over a decade the Danish photographer Martin Andersen has experienced this world, following with his lens the Tottenham Hotspur fans, 
                    narrating in black and white, with irony and realism, the hooligans habits. Thus was born the photo book "Can't Smile Without You", which takes its 
                    name from the song by Bary Manilow used as a hymn by Tottenham fans. The photographs were taken from 2013 to 2017, during more than one hundred home and 
                    away matches, including the latest historic one at White Heart Lane
                </p>
                {{-- End Article 2 --}}

                
                {{-- Hashtag --}}
                <div class="d-flex">
                    <div class="mr-30">
                        <a href="#" class="btn btn-primary">#streetart</a>
                    </div>
                    <div class="mr-30">
                        <a href="#" class="btn btn-primary">#kendricklamar</a>
                    </div>
                    <div class="mr-30">
                        <a href="#" class="btn btn-primary">#billboard</a>
                    </div>
                    <div class="mr-30">
                        <a href="#" class="btn btn-primary">#kendricklamar</a>
                    </div>
                </div>
                {{-- End Hashtag --}}
            </div>
        </div>
    </div>
</section>
{{-- End Article Section --}}

<section class="topevent-section mb-50" style="margin-left: -30px;">
    <div class="w-100 py-3 px-3 px-md-5" >
        <div class="row">
            {{-- Topevent Item --}}
            <div class="col-md-3">
                <div class="item">
                    <span class="date">
                        10 July 2020
                    </span>
                    <h5 class="title">
                        Tyler The Creator x GOLF WANG Tour
                    </h5>
                    <div class="d-flex">
                        <div class="arrow-right">
                            <a href="" class="btn mx-0 px-0">
                                <svg width="44" height="25" viewBox="0 0 44 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.1459 13.6257L0.5 13.6257V11.3744L39.1459 11.3744L30.3454 2.29911L31.8784 0.718262L43.3035 12.5L31.8784 24.2818L30.3454 22.701L39.1459 13.6257Z" fill="black"/>
                                    </svg>      
                            </a>                  
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Topevent Item --}}
            {{-- Topevent Item --}}
            <div class="col-md-3">
                <div class="item">
                    <span class="date">
                        10 July 2020
                    </span>
                    <h5 class="title">
                        Massive art fair exhibitions
                    </h5>
                    <div class="d-flex">
                        <div class="arrow-right">
                            <a href="" class="btn mx-0 px-0">
                                <svg width="44" height="25" viewBox="0 0 44 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.1459 13.6257L0.5 13.6257V11.3744L39.1459 11.3744L30.3454 2.29911L31.8784 0.718262L43.3035 12.5L31.8784 24.2818L30.3454 22.701L39.1459 13.6257Z" fill="black"/>
                                    </svg>      
                            </a>                  
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Topevent Item --}}
            {{-- Topevent Item --}}
            <div class="col-md-3">
                <div class="item">
                    <span class="date">
                        10 July 2020
                    </span>
                    <h5 class="title">
                        Tyler The Creator x GOLF WANG Tour
                    </h5>
                    <div class="d-flex">
                        <div class="arrow-right">
                            <a href="" class="btn mx-0 px-0">
                                <svg width="44" height="25" viewBox="0 0 44 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.1459 13.6257L0.5 13.6257V11.3744L39.1459 11.3744L30.3454 2.29911L31.8784 0.718262L43.3035 12.5L31.8784 24.2818L30.3454 22.701L39.1459 13.6257Z" fill="black"/>
                                    </svg>      
                            </a>                  
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Topevent Item --}}
            {{-- Topevent Item --}}
            <div class="col-md-3">
                <div class="item bg-img" style="background: url({{ asset('img/events/event-back.png') }})">
                    <span class="date">
                        10 July 2020
                    </span>
                    <h5 class="title">
                        Massive art fair exhibitions
                    </h5>
                    <div class="d-flex">
                        <div class="arrow-right">
                            <a href="" class="btn mx-0 px-0">
                                <svg width="44" height="25" viewBox="0 0 44 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.1459 13.6257L0.5 13.6257V11.3744L39.1459 11.3744L30.3454 2.29911L31.8784 0.718262L43.3035 12.5L31.8784 24.2818L30.3454 22.701L39.1459 13.6257Z" fill="black"/>
                                </svg>      
                            </a>                  
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Topevent Item --}}
            
        </div>  
    </div>  
</section>

@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection