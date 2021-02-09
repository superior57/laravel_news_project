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

    {{-- Tha Content 2 ----------------------------------------------- --}}
    <div class="Tha-content-2">
        {{-- Flag --}}
        <a href="{{ url('/uk') }}">
            <div class="flag">
                <img src="{{ asset('img/flag/uk.png') }}" alt="UK">
            </div>
        </a>
        {{-- End Flag --}}
        {{-- Icon Button Group --}}
        <div class="icon-btn-group">
            <a href="">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/smile.png') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/light.png') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/key.png') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="btn-item">
                    <img src="{{ asset('img/ico/mail.png') }}" alt="">
                </div>
            </a>
        </div>
        {{-- End Icon Button Group --}}
        {{-- Comission a project --}}
        <a href="{{ url('commission-a-project') }}" >
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
    </div>
    {{-- End Tha Content 2 ------------------------------------------- --}}
    
</div>