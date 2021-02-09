<ul class="contact-sidebar">
    <li class="{!! Request::path() === 'commission-a-project' ? 'active' : '' !!}"><a href="{{ url('contact-us') }}">Commission a project</a></li>
    <li class="{!! Request::path() === 'submit-artwork' ? 'active' : '' !!}"><a href="{{ url('submit-artwork') }}">Submit artwork</a></li>
    <li class="{!! Request::path() === 'about-us' ? 'active' : '' !!}"><a href="{{ url('about-us') }}">About us</a></li>
    <li class=""><a href="#our_team">Our team</a></li>
</ul>
