@extends('layouts.master')

@section('title')
    About us
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<div class="head px-3 px-md-5 py-5" style="margin-bottom: 0px;">            
    <div>
        <span class="path">Mane page / </span>
        <span class="current-path">Contact us </span>
    </div>
</div>

{{-- Main Section --}}
<section class="w-100 shop-section mb-5 contact-us about-us">
    <div class="w-100 p-3 px-md-5 d-block">
         <div class="mb-4">
            <h3 class="title size-lg">Contact us</h3>        
            <span class="subtitle">
                submit artwork / commision a project / about us / our team
            </span>
         </div>
         <div class="body">
            <div class="row container-lg mb-5">
                <div class="col-md-4">
                    @include('contact-us.layouts.sidebar')
                </div>     
                <div class="col-md-8">
                    <h5 class="title size-md mb-4">About us</h5>                    
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4">
                            <div class="information-item">
                                <span class="mb-1">Phone number</span>
                                <span><b>+66 80 123 4567</b></span>
                            </div>                            
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="information-item">
                                <span class="mb-1">Phone number</span>
                                <span><b>+66 80 123 4567</b></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="information-item">
                                <span class="mb-1">For any questions </span>
                                <span><b>anyquestions@gia.com</b></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="information-item">
                                <span class="mb-1">For advertising </span>
                                <span><b>advertising@gia.com</b></span>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="information-item">
                                <span class="mb-1">Location </span>
                                <span><b>KC100 10/F, 100 Kwai Cheong Road, Kwai Chung, Bangkok</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="article mb-5">
                        <span class="w-100 text-18 mb-3">We promote awareness of the androgynous society in Thailand</span>
                        <span class="mb-3">
                            With a dedicated team focused on the progression of fashion through visual inspirations and the provision of knowledge, HYPEBEAST's devotion and commitment has made it one of the premiere online destinations for editorially driven commerce and news. Spanning a comprehensive range of both styles and brands, from streetwear to high-end and from established to well-known, the HYPEBEAST editorial team has sought to make a positive contribution to one of culture's most important creative mediums.                  
                        </span>
                        <br>
                        <span>
                            HYPEBEAST's daily news section has become an important destination for those interested in the latest developments within the fashion community as well as other aspects of culturally-relevant content such as art, music, design and lifestyle. Several consistent marquee features have provided HYPEBEAST readers with a unique vantage point into the industry. Among the most prominent ongoing features include ESSENTIALS (a look into the daily essentials of several important creatives within the industry), PROCESS (an account from start to finish of how products are created) and PEN & PAPER (an intimate look into the sketchbook of an artist).
                        </span>
                    </div>
                    <h3 id="our_team" class="title mb-4">Our team</h3>
                    <div class="row our-team">
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/1.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/2.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/3.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/4.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/1.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="member">
                                <div class="item-img mb-3">
                                    <img src="{{ asset('img/members/2.png') }}" alt="Member">
                                </div>
                                <span class="role">CEO and founder</span>
                                <span class="name">Stefania Picelli</span>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>             
         </div>
    </div>
</section>
{{-- End Main Section --}}
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection