@extends('layouts.master')

@section('title')
    404
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')
<section class="w-100 h-100 d-flex no_page_section">
    <div class="m-auto text-center container-md body">
        <h1 class="title">404</h1>
        <div class="m-auto" style="max-width: 280px;">
            <p class="subtitle">Lost in space</p>
            <p class="description">
                You have reached the edge of universe. The page you requested could not be found. Dont worry and return to the home page
            </p>
            <div class="w-100 d-flex justify-content-center">
                <a href="{{ url('/') }}">
                    <div class="btn-layout">
                        <svg viewBox="0 0 236 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H230V61H1V1Z" class="stroke" stroke="black" stroke-width="2"/>
                            <path class="no-stroke" d="M5 5H236V67H5V5Z" fill="black"/>
                        </svg>
                        <div>
                            <span>
                                Back to home
                            </span>    
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection