@extends('layouts.master')

@section('title')
    Event
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

@php
    $cur_time = \Carbon\Carbon::now();
    $event_time = \Carbon\Carbon::create($event->time);   
    // $left_days = $cur_time->diffInDays($event_time);
    // $left_hours = $cur_time->diffInHours($event_time->subDays($left_days));
    // $left_minutes = $cur_time->diffInMinutes($event_time->subHours($left_hours));
    $left_seconds = $cur_time->diffInSeconds($event_time);
    $is_past = $event_time->isPast();
@endphp


<section class="hero" style="background-image: url('{{ asset('img/events/details-back.png') }}');">
    <div class="hero-content py-5 px-3 px-md-5">
        <div class="mb-4">
            <a href="{{ url('/events') }}" class="btn-back">Back to all events</a>
        </div>
        <div class="head" style="margin-bottom: 121px;">            
            <div>
                <span class="path"><a href="{{ url('/') }}">Main page</a> / <a href="{{ url('events') }}">Events</a> /</span>
                <span class="current-path">{!! strip_tags($event->title) !!} </span>
            </div>
        </div>

        <h5 class="title mb-4"> 
            {!! $event->title !!}
        </h5>
        <span class="sub-title mb-4">{!! $event->description !!}</span>

        <div class="date-time-item d-flex">
            <div class="time-item">
              <div class="d-flex">
                <p id="left_days">00</p>
                <p class="time-point">:</p>
              </div>
              days
            </div>
            <div class="time-item">
              <div class="d-flex">
                <p id="left_hours">00</p>
                <p class="time-point">:</p>
              </div>
              hours
            </div>
            <div class="time-item">
              <div class="d-flex">
                <p id="left_minutes">00</p>
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
        <social-buttons :url="'{{ urlencode(Request::url()) }}'"></social-buttons>
         {{-- end social button group --}}
        <div class="body mx-3 mx-md-5 container-md">
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
                                <h5>Where</h5>
                                <span>
                                    Thailand, Bangkok, Thunder Dome
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h5>Why</h5>
                                <span>
                                    Place for the fun description (͡° ͜ʖ ͡°) 
                                </span>
                            </div>
                        </div>
                    </div>                                            
                </div>

                {!! $event->article !!}
                {{-- Article 2 --}}
                {{-- <h3 class="mb-3">Horseferry Check by Burberry and Stone Island</h3>
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
                </p> --}}
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

@section('script')
<script>
    let left_seconds = "{{ $left_seconds }}";
    let is_past = "{{ $is_past }}";

    let lefttime_minute_interval = setInterval(() => {
        if(!is_past) {
            if(left_seconds % 2 == 0) {
                $('.time-point').css('color', "#FFF");
            } else {
                $('.time-point').css('color', "transparent");
            }
            const { days, hours, minutes, seconds } = getDateTimeAttrFromSeconds(left_seconds);
            $('#left_days').text(days);
            $('#left_hours').text(hours);
            $('#left_minutes').text(minutes);
            left_seconds --;
        }      
    }, 1000);
</script>
@endsection