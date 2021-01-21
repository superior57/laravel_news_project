@extends('layouts.master')

@section('title')
    Artists
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')
<section class="artist-details" style="background-image: url('{{ asset('img/artists/main.png') }}')">
{{-- <section class="artist-details"> --}}
    <div class="w-100 d-flex body">
        <div class="w-100 d-flex">
            <div class="main-body">
                <div>
                    <div class="w-100 mb-4 p-3">
                        <a href="{{ url('/artists') }}" class="btn-back">Back to all artists</a>
                    </div>
                    <div class="w-100 mb-2">
                        <p class="user-name">Mattia Baldi</p>                    
                    </div>    
                    <div class="w-100 mb-4">
                        <p class="user-role">Photographer</p>
                    </div>
                </div>
                <div class="w-100 scroll-down-show position-relative">
                    <a href="">
                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 20.0358L12 32L-3.50317e-06 20.0358L2.20711 17.8353L10.4394 26.043L10.4394 1.82528e-06L13.5606 2.37101e-06L13.5606 26.043L21.7929 17.8353L24 20.0358Z" fill="white"/>
                        </svg>     
                    </a>                       
                </div>
            </div>         
        </div>      
        <div class="w-100 scroll-wrap">
            <p>
                scroll down
                <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7147 0.500001L21.5 6.5L15.7147 12.5L14.6506 11.3964L18.6195 7.28031H0.5V5.71969H18.6195L14.6506 1.60356L15.7147 0.500001Z" fill="white"/>
                </svg>                    
            </p>    
        </div>  
    </div>
</section>
<div>
    {{-- main iamge --}}
    <div class="main vidbackground" onclick="storeClick()">
        <img onclick="storeClick()" class="nutsnbolts" src="{{ asset('img/artists/main2.png') }}" alt="NUTS&BOLTS" />
    </div>
    {{-- End main image --}}
  
    {{-- Image gallery --}}
        {{-- image item --}}
        <div class="midscreen homepic">
            <svg id="pic1" width="100%" height="100%" style="opacity: 0;">
                <defs>
                <clipPath id="angle1">
                    <path d="M 0 0 L 0 0 L 0 0 L 3000 0 Z" />
                </clipPath>
                </defs>
                <image id="picfield1" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset('img/artists/main1.png') }}" href="{{ asset('img/artists/main1.png') }}"
                width="100%" height="100%" clip-path="url(#angle1)" ></image>
            </svg>
        </div>
        {{-- end image item --}}
        {{-- image item --}}
        {{-- <div class="midscreen homepic">
            <svg id="pic1" width="100%" height="100%" style="opacity: 0;">
                <defs>
                <clipPath id="angle1">
                    <path d="M 0 0 L 0 0 L 0 0 L 3000 0 Z" />
                </clipPath>
                </defs>
                <image id="picfield1" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset('img/artists/main1.png') }}" href="{{ asset('img/artists/main1.png') }}"
                width="100%" height="100%" clip-path="url(#angle1)" ></image>
            </svg>
        </div> --}}
        {{-- end image item --}}
    {{-- End Image gallery --}}

    <div id="scrollBar">    
    </div>
    <div class="scroll-content">
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/plugin-scroll/twnlte.js') }}"></script>
<script src="{{ asset('js/plugin-scroll/tmlne.js') }}"></script>
<script src="{{ asset('js/plugin-scroll/scrlmgc.js') }}"></script>
<script src="{{ asset('js/plugin-scroll/gsap.js') }}"></script>
<script>
    $(".sidebar").css('position', "fixed");
</script>
<script>
$(function () {
  var controller = new ScrollMagic.Controller();

  var pic1 = document.getElementById("pic1");
  var theHt = pic1.clientHeight;
  var scrollbar = document.getElementById("scrollBar");
  var $angle1 = $("#angle1 path");

  var path1 = {
    sm: 2 * theHt,
    md: -theHt * 17,
    lg: theHt * 6
  };

  var tlClip1 = new TimelineMax()
    .add(
      TweenLite.to(
        path1,
        2, {
          sm: -theHt * 10,
          md: theHt,
          lg: theHt * 100,
          onUpdate: function () {
            var pathD = $angle1.attr('d'),
              pathArr = pathD.split(" "),
              pathArrNew = pathArr.map(function (val, i) {
                if (i === 1) {
                  var smNew = path1.sm;
                  return smNew;
                } else if (i === 8) {
                  var mdNew = path1.md;
                  return mdNew;
                } else if (i === 11) {
                  var lgNew = path1.lg;
                  return lgNew;
                } else {
                  return val;
                }
              });
            $angle1.attr('d', pathArrNew.join(" "));
          },
          ease: Linear.easeNone
        }
      )
    );

  function updateBox0(e) {
    console.log(e);
    if (e.type == "progress") {
      scrollbar.style.width = (e.progress * 100).toString() + '%';

    } else if (e.type == "enter") {

    } else if (e.type == "end") {

    }
  }

  var scene0 = new ScrollMagic.Scene({
      duration: 1800,
    })
    .on("progress enter end", updateBox0)
    .addTo(controller);

  var scenehalf = new ScrollMagic.Scene({
      duration: 1400
    })
    .setPin('.scroll-content')
    .addTo(controller);

  function updateBox1(e) {
    if (e.type == "enter") {
      pic1.setAttribute("style", "opacity: 1;");
    } else if (e.type == "leave") {
      pic1.setAttribute("style", "opacity: 0;");
    }
  }

  var scene1 = new ScrollMagic.Scene({
      duration: 1400,
      tweenChanges: true
    })
    .setPin('.scroll-content')
    .setTween(tlClip1)
    .on("enter leave", updateBox1)
    .addTo(controller);
  controller.addScene(scene0);

});
</script>    
@endsection
