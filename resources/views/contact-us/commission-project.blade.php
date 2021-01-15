@extends('layouts.master')

@section('title')
    Commission Project
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
<section class="w-100 shop-section mb-5 contact-us">
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
                    <h5 class="title size-md">Have an idea for the <br>creative project?</h5>
                    <span class="text-gray mb-4">Tell us about the project in 60 seconds</span>
                    <form id="commission_project" action="">
                        <div class="form-group mb-3">
                            <label for="name">Your name or company name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Your email*</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="w-100 mb-3">
                            <a type="submit" onclick="$('#commission_project').submit();">
                                <div class="btn-layout">
                                    <svg viewBox="0 0 236 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H230V61H1V1Z" class="stroke" stroke="black" stroke-width="2"/>
                                        <path class="no-stroke" d="M5 5H236V67H5V5Z" fill="black"/>
                                    </svg>
                                    <div>
                                        <span>
                                            Send message
                                        </span>    
                                    </div>
                                </div>
                            </a>
                        </div>
                        <span>
                            By submiting the form, you agree to our <br>
                            <a href="" class="go-to">Terms & Conditions</a> and <a href="" class="go-to">Privacy Policy</a>
                        </span>
                    </form>
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