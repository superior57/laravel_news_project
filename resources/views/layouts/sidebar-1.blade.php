<div class="sidebar-back">

</div>
<div class="sidebar">
    {{-- Logo --}}
    <a href="{{ url('/') }}">
        <div class="sidebar-logo">
            <img src="{{ asset('img/logo-1.png') }}" alt="Logo">
        </div>
    </a>
    {{-- End Logo --}}

    {{-- Tha Content 1 ------------------------------------------- --}}
    <div class="Tha-content-1">
        {{-- Flag --}}
        <a href="{{ url('/tha') }}">
            <div class="flag">
                <img src="{{ asset('img/flag/tha.png') }}" alt="Tha">
            </div>
        </a>
        {{-- End Flag --}}
        {{-- Stream Text --}}
        <a href="#" onclick="showNewsLetter()">
            <div class="stream-text container py-5 btnlink">
                <h3> #JOIN THE MOVEMENT</h3>
            </div>
        </a>
        {{-- End Stream text --}}
        {{-- Comission a project --}}
        <a href="{{ url('contact-us/commission-project') }}" >
            <div class="container comission-project py-4 btnlink">
                <div class="w-100 text-center">
                    <span>
                        comission
                        <br>
                        a project
                    </span>
                </div>
                <div>
                    <img src="{{ asset('img/diamond.png') }}" alt="">
                </div>
            </div>
        </a>
        {{-- End Comission a project --}}
        {{-- Logo --}}
        <a href="{{ url('/') }}">
            <div class="sidebar-logo">
                <img src="{{ asset('img/logo-white.png') }}" alt="Logo">
            </div>
        </a>
        {{-- End Logo --}}
    </div>
    {{-- End Tha content 1 ------------------------------------------- --}}

    {{-- Tha Content 2 ----------------------------------------------- --}}
    <div class="Tha-content-2">
        {{-- Flag --}}
        <a href="{{ url('/tha') }}">
            <div class="flag">
                <img src="{{ asset('img/flag/tha.png') }}" alt="Tha">
            </div>
        </a>
        {{-- End Flag --}}
        {{-- Icon Button Group --}}
        <div class="icon-btn-group">
            <a href="{{ url('artists') }}">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/smile.png') }}" alt="">
                </div>
            </a>
            <a href="{{ url('projects') }}">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/light.png') }}" alt="">
                </div>
            </a>
            <a href="{{ url('shop') }}">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/key.png') }}" alt="">
                </div>
            </a>
            <a href="{{ url('contact-us') }}">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/mail.png') }}" alt="">
                </div>
            </a>
        </div>
        {{-- End Icon Button Group --}}
        {{-- Comission a project --}}
        <a href="{{ url('contact-us/commission-project') }}" >
            <div class="container comission-project py-4 btnlink">
                <div class="w-100 text-center">
                    <span>
                        comission
                        <br>
                        a project
                    </span>
                </div>
                <div>
                    <img src="{{ asset('img/diamond.png') }}" alt="">
                </div>
            </div>
        </a>
        {{-- End Comission a project --}}
        {{-- Logo --}}
        <a href="{{ url('/') }}">
            <div class="sidebar-logo">
                <img src="{{ asset('img/logo-white.png') }}" alt="Logo">
            </div>
        </a>
        {{-- End Logo --}}
    </div>
    {{-- End Tha Content 2 ------------------------------------------- --}}
    
</div>