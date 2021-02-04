@extends('layouts.master')

@section('title')
    Cart | Confirmation
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<div class="head px-3 px-md-5 py-5" style="margin-bottom: 0px;">            
    <div>
        <span class="path"><a href="{{ url('/') }}">Main page</a> / <a href="{{ url('cart') }}">Cart</a> / <a href="{{ url('cart/checkout') }}">Checkout</a> /</span>
        <span class="current-path">Order confirmation </span>
    </div>
</div>

{{-- Main Section --}}
<section class="w-100 shop-section mb-5">
    <div class="w-100 p-3 px-md-5 d-block">
         <div class="mb-4">
            <h3 class="title size-lg">Thank You!</h3>        
            <span class="subtitle">
                We’ve recived your order <b>#1937525</b> <br>
                Detailed information has been sent to <b>your@email.com</b>
            </span>
         </div>
         <div class="body">
             <div class="row cart container-lg">
                 <div class="col-12">
                     {{-- Detailed information --}}
                    <div class="paper w-100 p-3 p-md-4 mb-4">
                        <h5 class="title mb-0 pb-3">Detailed Information</h5>
                        <div class="body mt-3 w-100">
                            <form id="detailed_information" action="">
                                <div class="row">                                
                                    <div class="col-md-4">
                                        <div class="information-item mb-3">
                                            <span class="head">Name</span>
                                            <span name="name" class="brief text-gray">John Wick</span>
                                        </div>
                                        <div class="information-item mb-3">
                                            <span class="head">Email</span>
                                            <span name="email" class="brief text-gray">your@email.com</span>
                                        </div>
                                        <div class="information-item mb-3">
                                            <span class="head">Phone number</span>
                                            <span name="phone_num" class="brief text-gray">+66 80 239 568 87</span>
                                        </div>
                                    </div>      
                                    <div class="col-md-4">
                                        <div class="information-item mb-3">
                                            <span class="head">Address</span>
                                            <span name="address" class="brief text-gray">
                                                Thailand, Bangkok, 574 576 Yaowarat Rd, Khwaeng Samphanthawong, Samphanthawong, Bangkok 10100
                                            </span>
                                        </div>
                                        <div class="information-item mb-3">
                                            <span class="head">Postcode</span>
                                            <span name="postcode" class="brief text-gray">62647149</span>
                                        </div>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class="information-item mb-3">
                                            <span class="head">Delivery type</span>
                                            <span name="delivery_type" class="brief text-gray">
                                                Express delivery
                                            </span>
                                        </div>
                                        <div class="information-item mb-3">
                                            <span class="head">Payment method</span>
                                            <span name="payment_method" class="brief text-gray">Mastercard ****2467</span>
                                        </div>
                                    </div>             
                                </div>    
                            </form>                                                                               
                        </div>
                    </div>
                    {{-- end Detailed information --}}
                 </div>
                 <div class="col-md-8 mb-5">
                     <div class="w-100 paper p-3 p-md-4 bag">
                         <h5 class="title mb-0 pb-3">Order summary</h5>
                         <div class="w-100 bag-list">
                             {{-- Cart Item --}}
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('img/shop/1.png') }}" alt="Cart">
                                </div>
                                <div class="item-details">
                                    <span class="price">$79</span>
                                    <span class="name">G.IA T-Shirt unisex</span>
                                    <div class="d-flex size-qty">
                                        <div class="size">
                                            <span>Size: </span>
                                            <select name="size-selector" id="">
                                            <option value="L">L</option>
                                            <option value="M">M</option>
                                            <option value="X">X</option>
                                        </select>
                                        </div>
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <span name="quantity">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Cart Item --}}
                            {{-- Cart Item --}}
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('img/shop/1.png') }}" alt="Cart">
                                </div>
                                <div class="item-details">
                                    <span class="price">$79</span>
                                    <span class="name">G.IA T-Shirt unisex</span>
                                    <div class="d-flex size-qty">
                                        <div class="size">
                                            <span>Size: </span>
                                            <select name="size-selector" id="">
                                            <option value="L">L</option>
                                            <option value="M">M</option>
                                            <option value="X">X</option>
                                        </select>
                                        </div>
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <span name="quantity">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Cart Item --}}
                         </div>
                         <div class="bag-foot">
                             <h5 class="subtitle">Subtotal <span name="cart_total_price">$79</span></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="w-100 paper p-3 p-md-4 bag mb-4">
                        <h5 class="title mb-0 pb-3 mb-4">Total</h5>
                        <div class="bag-foot total">
                            <h5 class="text-16 mb-3">
                                Subtotal
                                <span>$123</span>
                            </h5>
                            <h5 class="text-16 mb-4">
                                Delivery
                                <span>$15</span>
                            </h5>
                            <h5 class="subtitle">Total to pay <span name="cart_total_price">$144</span></h5>
                        </div>
                    </div>
                    <span class="text-16">
                        Feel free to contact us with any questions regarding your purchases. For information about returns read our <a href="" class="go-to text-gray">Return Policy</a>. <br> We hope you will enjoy your new purchase!
                    </span>
                 </div>
             </div>
         </div>
         <div class="foot w-100 d-flex justify-content-center">
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
</section>
{{-- End Main Section --}}
@endsection

@section('script')
<script>
    $(document).on('ready', function() {
        let body = $('body');
        body.css('background-color', '#E5E5E5');
    })
</script>
    
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection