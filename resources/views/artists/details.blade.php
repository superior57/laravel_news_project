@extends('layouts.master')

@section('title')
    Artists
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')
<section class="artist-details" style="background-image: url('{{ asset('img/artists/main-1.png') }}')">
    <div class="w-100 d-flex body">
        <div class="w-100 d-flex">
            <div class="main-body">
                <div class="w-100 mb-4 p-3">
                    <a href="{{ url('/artists') }}" class="btn-back">Back to all artists</a>
                </div>
                <div class="w-100 mb-2">
                    <p class="user-name">Mattia Baldi</p>                    
                </div>    
                <div class="w-100 mb-4">
                    <p class="user-role">Photographer</p>
                </div>
                <div class="w-100 artist-images mb-4">
                    <div class="artist-img-item img-back">
                        <img src="{{ asset('img/artists/main2.png') }}" alt="Artist">
                    </div>
                    <div class="artist-img-item img-clip">
                        <img src="{{ asset('img/artists/main1.png') }}" alt="Artist">
                    </div>
                </div>
                <div class="w-100 scroll-down-show">
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
@endsection

@section('script')
<script>
    // $(document).on('ready', function() {
    //     let body = $('body');
    //     body.css('background-color', '#141414');
    // })
</script>    
@endsection


@section('footer')
  
@endsection