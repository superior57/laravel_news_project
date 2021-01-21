<ul class="contact-sidebar">
    <li class="{!! Request::path() === 'contact-us/commission-project' ? 'active' : '' !!}"><a href="{{ url('contact-us') }}">Commission a project</a></li>
    <li class="{!! Request::path() === 'contact-us/submit-artwork' ? 'active' : '' !!}"><a href="{{ url('contact-us/submit-artwork') }}">Submit artwork</a></li>
    <li class="{!! Request::path() === 'contact-us/about-us' ? 'active' : '' !!}"><a href="{{ url('contact-us/about-us') }}">About us</a></li>
    <li class=""><a href="#our_team">Our team</a></li>
</ul>
