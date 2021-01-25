<ul class="contact-sidebar">
    <li class="{!! Request::path() === 'privacy-policy' ? 'active' : '' !!}"><a href="{{ url('privacy-policy') }}">Privacy policy</a></li>
    <li class="{!! Request::path() === 'store-terms' ? 'active' : '' !!}"><a href="{{ url('store-terms') }}">Store terms</a></li>
    <li class="{!! Request::path() === 'terms-conditions' ? 'active' : '' !!}"><a href="{{ url('terms-conditions') }}">Terms conditions</a></li>
</ul>
