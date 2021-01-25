@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<div class="head px-3 px-md-5 py-5" style="margin-bottom: 0px;">            
    <div>
        <span class="path">Main page / </span>
        <span class="current-path">Cart </span>
    </div>
</div>

{{-- Main Section --}}
<section class="w-100 shop-section mb-5">
    <div class="w-100 p-3 px-md-5 d-block">
         <div class="mb-4">
            <h3 class="title size-lg">Your cart</h3>        
         </div>
         <div class="body">
             <div class="row cart container-lg">
                 <div class="col-md-8 mb-5">
                     <div class="w-100 paper p-3 p-md-4 bag">
                         <h5 class="title mb-0 pb-3">My bag</h5>
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
                                <div class="remove">
                                    <a href="#" class="btn">
                                        <i>
                                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.23852 0H12.2385V2.5H17.077L18.477 6H16.6938L15.1938 22H3.2832L1.7832 6H0L1.4 2.5H6.23852V0ZM7.23852 2.5H11.2385V1H7.23852V2.5ZM2.78758 6L4.19383 21H14.2832L15.6894 6H2.78758ZM2.07703 3.5L1.47703 5H17L16.4 3.5H2.07703ZM5.73679 7.45848L6.73679 19.4585L5.74024 19.5415L4.74024 7.54152L5.73679 7.45848ZM13.7368 7.54152L12.7368 19.5415L11.7402 19.4585L12.7402 7.45848L13.7368 7.54152ZM8.73852 19.5V7.5H9.73852V19.5H8.73852Z" fill="#808080"/>
                                        </svg>                                            
                                        </i>
                                    </a>
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
                                <div class="remove">
                                    <a href="#" class="btn">
                                        <i>
                                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.23852 0H12.2385V2.5H17.077L18.477 6H16.6938L15.1938 22H3.2832L1.7832 6H0L1.4 2.5H6.23852V0ZM7.23852 2.5H11.2385V1H7.23852V2.5ZM2.78758 6L4.19383 21H14.2832L15.6894 6H2.78758ZM2.07703 3.5L1.47703 5H17L16.4 3.5H2.07703ZM5.73679 7.45848L6.73679 19.4585L5.74024 19.5415L4.74024 7.54152L5.73679 7.45848ZM13.7368 7.54152L12.7368 19.5415L11.7402 19.4585L12.7402 7.45848L13.7368 7.54152ZM8.73852 19.5V7.5H9.73852V19.5H8.73852Z" fill="#808080"/>
                                        </svg>                                            
                                        </i>
                                    </a>
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
                     <div class="paper p-3 p-md-4 total">
                        <h5 class="title mb-0 pb-3">Total</h5>
                        <div class="body pt-4">
                            <h5 class="subtitle mb-3">
                                Subtotal
                                <span>$94</span>
                            </h5>
                            <h5 class="subtitle mb-4">
                                Delivery
                                <span></span>
                            </h5>
                            <select class="w-100 mb-4" name="" id="">
                                <option value="">Express Delivery ($15)</option>
                                <option value="">Credit Card Delivery ($5)</option>
                                <option value="">Direct Delivery ($20)</option>
                            </select>
                            <a href="{{ url('cart/checkout') }}" class="btn btn-secondary w-100 btn-size-md mb-4">CHECKOUT</a>
                            <a href="{{ url('shop') }}" class="btn btn-secondary w-100 btn-size-md mb-4">CONTINUE SHOPPING</a>
                            <h5 class="subtitle mb-4">
                                We accept
                            </h5>
                            <div class="d-flex">
                                <span class="accept-payment-item">
                                    <img src="{{ asset('img/accept-payments/visa.svg') }}" alt="Visa">
                                </span>
                                <span class="accept-payment-item">
                                    <img src="{{ asset('img/accept-payments/mastercard.svg') }}" alt="MasterCard">
                                </span>
                                <span class="accept-payment-item">
                                    <img src="{{ asset('img/accept-payments/paypal.svg') }}" alt="Paypal">
                                </span>
                                <span class="accept-payment-item">
                                    <img src="{{ asset('img/accept-payments/scb.svg') }}" alt="SCB">
                                </span>
                                <span class="accept-payment-item">
                                    <img src="{{ asset('img/accept-payments/bank.png') }}" width="29" alt="bank">
                                </span>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
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