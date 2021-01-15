@extends('layouts.master')

@section('title')
    Submit Artwork
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
                    <h5 class="title size-md">Are you creative artist <br> and want to get featured?</h5>
                    <span class="text-gray mb-4">Submit your artwork and get featured</span>
                    <form id="submit_artwork" action="">
                        <div class="form-group mb-3">
                            <label for="name">Your name or company name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Your email*</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <div id="my-files" class="dropzone">
                            </div>
                        </div>
                        <div class="w-100 mb-3">
                            <a type="submit" onclick="$('#submit_artwork').submit();">
                                <div class="btn-layout">
                                    <svg viewBox="0 0 236 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H230V61H1V1Z" class="stroke" stroke="black" stroke-width="2"/>
                                        <path class="no-stroke" d="M5 5H236V67H5V5Z" fill="black"/>
                                    </svg>
                                    <div>
                                        <span>
                                            Submit Artwork
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

@section('script')
<script>
    Dropzone.autoDiscover = false;
    $("div#my-files").dropzone({ 
        url: "/file/post",
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
            done(file.name);
        },
        dictDefaultMessage: `<span style="color: #FF7BC9;">
                                Choose a file
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.69559 12.1513L11.0908 5.10097L11.8452 5.92374L5.44898 12.9752C4.20277 14.3416 2.18167 14.3416 0.934713 12.975C-0.311421 11.608 -0.311421 9.39185 0.933816 8.02643L7.51833 0.768485C8.45279 -0.256162 9.96845 -0.256162 10.9036 0.768485C11.8386 1.79373 11.8386 3.45578 10.9036 4.48102L5.45107 10.4598L5.44908 10.4622C4.82581 11.1456 3.81544 11.1456 3.19219 10.4622C2.56893 9.7788 2.56893 8.67091 3.19214 7.98755L5.82504 5.09999L6.57748 5.92489L3.94456 8.8125C3.73683 9.04028 3.73683 9.40946 3.94456 9.63723C4.15195 9.86463 4.48778 9.86493 4.69559 9.63833L4.69658 9.63712L10.1512 3.6561C10.6707 3.08646 10.6707 2.16313 10.1514 1.59365C9.63187 1.02446 8.7897 1.02446 8.2717 1.59242L1.68718 8.85032C0.856459 9.76121 0.856459 11.2388 1.68708 12.1501C2.51833 13.0611 3.86589 13.0611 4.69559 12.1513Z" fill="#FF7BC9"/>
                                </svg>
                            </span> <br>
                            or drag and drop it here`
     });
</script>    
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection