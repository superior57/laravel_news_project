@extends('layouts.master')

@section('title')
    Projects
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<section class="hero hero-sm" style="background-image: url('img/projects/back.png');">
    <div class="hero-content py-5 px-3 px-md-5">
        <div class="head">            
            <div>
                <span class="path"><a href="{{ url('/') }}">Main page</a> / </span>
                <span class="current-path">Projects </span>
            </div>
        </div>

       
        <h5 class="title mb-4">
            Projects
        </h5>
        <span class="hashtag-date mb-3">art events / meetups</span>
    </div>
</section>

{{-- Top events --}}
<section class="project-section">
    <div class="row">
        {{-- project Item --}}
        <div class="project-item">
            <div class="item-brief">
                <div class="w-100 p-3 px-md-5 m-auto">
                    <span class="text-gray mb-2">18 July 2020</span>
                    <h3 class="title mb-3">
                        The photographic journey <br>
                        through the Tottenham 
                    </h3>
                    <span class="mb-5">
                        The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans
                    </span>
                    <a href="{{ url('project/details') }}" class="btn btn-more"><span>Read more</span></a>
                </div>
            </div>
            <div class="item-img">
                <img src="{{ asset('img/projects/1.png') }}" alt="Project">
            </div>            
        </div>
        {{-- end project item --}}
        {{-- project Item --}}
        <div class="project-item">
            <div class="item-img">
                <img src="{{ asset('img/projects/2.png') }}" alt="Project">
            </div>   
            <div class="item-brief">
                <div class="w-100 p-3 px-md-5 m-auto">
                    <span class="text-gray mb-2">18 July 2020</span>
                    <h3 class="title mb-3">
                        The photographic journey <br>
                        through the Tottenham 
                    </h3>
                    <span class="mb-5">
                        The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans
                    </span>
                    <a href="{{ url('project/details') }}" class="btn btn-more"><span>Read more</span></a>
                </div>
            </div>         
        </div>
        {{-- end project item --}}
        {{-- project Item --}}
        <div class="project-item">
            <div class="item-brief">
                <div class="w-100 p-3 px-md-5 m-auto">
                    <span class="text-gray mb-2">18 July 2020</span>
                    <h3 class="title mb-3">
                        The photographic journey <br>
                        through the Tottenham 
                    </h3>
                    <span class="mb-5">
                        The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans
                    </span>
                    <a href="{{ url('project/details') }}" class="btn btn-more"><span>Read more</span></a>
                </div>
            </div>
            <div class="item-img">
                <img src="{{ asset('img/projects/3.png') }}" alt="Project">
            </div>            
        </div>
        {{-- end project item --}}
        {{-- project Item --}}
        <div class="project-item">
            <div class="item-img">
                <img src="{{ asset('img/projects/4.png') }}" alt="Project">
            </div> 
            <div class="item-brief">
                <div class="w-100 p-3 px-md-5 m-auto">
                    <span class="text-gray mb-2">18 July 2020</span>
                    <h3 class="title mb-3">
                        The photographic journey <br>
                        through the Tottenham 
                    </h3>
                    <span class="mb-5">
                        The photographer's point of view made it possible to take rough and biting images, with the taste of beer and cigarettes. Difficult to recognize a precise year in the photos, which want to highlight the obsession and loyalty of the Spurs fans
                    </span>
                    <a href="{{ url('project/details') }}" class="btn btn-more"><span>Read more</span></a>
                </div>
            </div>           
        </div>
        {{-- end project item --}}
    </div>     
</section>
{{-- End Top events --}}
@endsection

@section('script')
<script>
    $(document).on('click', '.item-img', () => {
        location.href = "/project/details";
    });  
</script>    
@endsection


@section('footer')
  @include('layouts.footer-1')    
@endsection