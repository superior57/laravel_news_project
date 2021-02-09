@extends('layouts.master')

@section('title')
    Project
@endsection


@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<section class="hero" style="background-image: url('{{ asset('img/projects/back.png') }}');">
    <div class="hero-content py-5 px-3 px-md-5">
        <div class="mb-4">
            <a href="{{ url('projects') }}" class="btn-back">Back to all projects</a>
        </div>
        <div class="head">            
            <div>
                <span class="path"><a href="{{ url('/') }}">Main page</a> / <a href="{{ url('projects') }}">Projects</a> /</span>
                <span class="current-path">The photographic journey through the Tottenham </span>
            </div>
        </div>

        <span class="hashtag-date mb-3">#streetart / 24 June 2020</span>
        <h5 class="title mb-4"> 
            THE PHOTOGRAPHIC JOURNEY <br>
            THROUGH THE TOTTENHAM
        </h5>
        <span class="sub-title">"Can't Smile Without You" - Martin Andersen's book between terrace and casual</span>
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
                <p class="mb-50">
                    The fascination for the ultras world comes from the English terrace and from the supporters
                    that follow the religious way that connects the pub, the stadium, another pub and maybe another one.
                    For over a decade the Danish photographer Martin Andersen has experienced this world, following with 
                    his lens the Tottenham Hotspur fans, narrating in black and white, with irony and realism, the hooligans habits. 
                    Thus was born the photo book "Can't Smile Without You", which takes its name from the song by Bary Manilow used as a hymn by Tottenham fans. 
                    The photographs were taken from 2013 to 2017, during more than one hundred home and away matches, including the latest historic one at White Heart Lane. 
                </p>
                <div class="review mb-50">
                    <div class="body">
                        <span class="feedback">One thing is being a football fan, another is to be part of the different groups of people you are actually photographing  that follow the religious way that connects</span>
                        <div class="name">
                            <span >Kendrick Lamar</span>       
                        </div>    
                    </div>                             
                </div>
                <p class="mb-50">
                    The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. 
                    Difficult to recognize a precise year in the photos, which want to highlight 
                    the obsession and loyalty of the Spurs fans, as well as the casual style that has always codified the imaginary ultras.
                    Harrington Jacket by Baracuta, Polo, overshirt and caps Fred Perry, Trifoil on the Gazelle adidas, Horseferry Check by Burberry 
                    and Stone Island, all that makes the supporter ultras also as style phenomenon. The photographer's point of view made it possible to take 
                    rough and biting images, with the taste of beer and cigarettes. Difficult 
                    to recognize a precise year in the photos, which want to highlight
                </p>

                <div class="article-image mb-50 wow animated fadeInUp">
                    <div class="item-img mb-2">
                        <img src="{{ asset('img/article/1.png') }}" alt="Article">
                    </div>
                    <p class="brief">
                        <span class="">Photographer </span>
                        <span class="">Rosario Rex</span>
                    </p>
                </div>

                {{-- Article 2 --}}
                <h3 class="mb-3">Horseferry Check by Burberry and Stone Island</h3>
                <p class="mb-4">The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. 
                    Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans, 
                    as well as the casual style that has always codified the imaginary</p>

                <h3 class="mb-3">Fun facts:</h3>
                <div class="dot-list mb-50">
                    <p><img src="{{ asset('img/svg/dot.svg') }}" alt="">Les Vêtements De Football - The Remade issue</p>
                    <p><img src="{{ asset('img/svg/dot.svg') }}" alt="">Football, Culture, Life' - nss sports</p>
                    <p><img src="{{ asset('img/svg/dot.svg') }}" alt="">The Chinese street style goes towards a more in-depth research 
                        of garments and brand that leaves room for experimentation and custom</p>
                    <p><img src="{{ asset('img/svg/dot.svg') }}" alt="">Les Vêtements De Football - The Remade issue</p>
                </div>

                <p class="mb-50">The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. Difficult to recognize a precise year in the photos, which want to highlight</p>

                <div class="article-image mb-50 wow animated fadeInUp">
                    <div class="item-img mb-2">
                        <img src="{{ asset('img/article/2.png') }}" alt="Article">
                    </div>
                    <span>
                        The fascination for the ultras world comes from the English terrace and from the supporters that follow the religious way that connects the pub, 
                        the stadium, another pub and maybe another one.
                    </span>
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

                <div class="article-information mb-50">
                    <p>
                        <span>Date </span>
                        <span>24 June 2020</span>
                    </p>
                    <p>
                        <span>Author </span>
                        <span>G.IA Authors</span>
                    </p>
                    <p>
                        <span>Photographer </span>
                        <span>Rosario Rex</span>
                    </p>
                </div>

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

{{-- Article list Section --}}
<section class="article-list-section">
    <div class="w-100 d-flex">
        {{-- article --}}
        <div class="col-md-3">
            <div class="article-item p-3 wow animated fadeInUp">
                <div class="item-img" style="height: 220px;">
                    <img src="{{ asset('img/article/article1.png') }}" alt="article">
                </div>
                <div class="item-content">
                    <span class="w-100">
                        Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer Prize winners
                    </span>
                    <a href="" class="btn btn-more">Read more</a>
                </div>
            </div>
        </div>
        {{-- end article  --}}
        {{-- article --}}
        <div class="col-md-3">
            <div class="article-item p-3 wow animated fadeInUp" style="animation-delay: .2s">
                <div class="item-img" style="height: 220px;">
                    <img src="{{ asset('img/article/article2.png') }}" alt="article">
                </div>
                <div class="item-content">
                    <span class="w-100">
                        The photographs were taken from 2013 to 2017, during more than one hundred home
                    </span>
                    <a href="" class="btn btn-more">Read more</a>
                </div>
            </div>
        </div>
        {{-- end article  --}}
        {{-- article --}}
        <div class="col-md-3">
            <div class="article-item p-3 wow animated fadeInUp" style="animation-delay: .4s">
                <div class="item-img" style="height: 220px;">
                    <img src="{{ asset('img/article/article3.png') }}" alt="article">
                </div>
                <div class="item-content">
                    <span class="w-100">
                        Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer winners
                    </span>
                    <a href="" class="btn btn-more">Read more</a>
                </div>
            </div>
        </div>
        {{-- end article  --}}
        {{-- article --}}
        <div class="col-md-3">
            <div class="article-item p-3 wow animated fadeInUp" style="animation-delay: .6s">
                <div class="item-img" style="height: 220px;">
                    <img src="{{ asset('img/article/article1.png') }}" alt="article">
                </div>
                <div class="item-content">
                    <span class="w-100">
                        Kendrick Lamar has joined William Faulkner and Robert Frost in the pantheon of Pulitzer Prize winners and Robert Frost in the 
                    </span>
                    <a href="" class="btn btn-more">Read more</a>
                </div>
            </div>
        </div>
        {{-- end article  --}}
    </div>    
</section>
{{-- End Article list section --}}

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

@section('footer')
  @include('layouts.footer-1')    
@endsection