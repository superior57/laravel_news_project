@extends('layouts.master')

@section('title')
Checkout | G.IA Culture
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<div class="head px-3 px-md-5 py-5" style="margin-bottom: 0px;">            
    <div>
        <span class="path"><a href="{{ url('/') }}">Main page</a> / <a href="{{ url('cart') }}">Cart</a> / </span>
        <span class="current-path">Checkout </span>
    </div>
</div>

{{-- Main Section --}}
<section class="w-100 shop-section mb-5">
    <div class="w-100 p-3 px-md-5 d-block">
         <div class="mb-4">
            <h3 class="title size-lg">Checkout</h3>        
         </div>
         <div class="body">
             <div class="row cart container-lg">
                 <div class="col-md-8 mb-5">
                     {{-- form contact information --}}
                     <div class="paper w-100 p-3 p-md-4 mb-3">
                        <h5 class="title mb-0 pb-3">Contact information</h5>
                        <div class="body mt-3 w-100">
                           <form id="contact_information" action="">
                               <div class="row">
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="f_name">First name*</label>
                                       <input name="f_name" type="text" class="form-control" required>
                                   </div>
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="l_name">Last name*</label>
                                       <input name="l_name" type="text" class="form-control" required>
                                   </div>
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="email">Your email*</label>
                                       <input name="email" type="text" class="form-control" required>
                                   </div>
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="phone_num">Phone number*</label>
                                       <input name="phone_num" type="text" class="form-control" required>
                                   </div>
                               </div>
                           </form>                             
                        </div>
                    </div>
                     {{-- end form contact information --}}
                     {{-- form DELIVERY ADDRESS --}}
                     <div class="paper w-100 p-3 p-md-4 mb-3">
                        <h5 class="title mb-0 pb-3">DELIVERY ADDRESS</h5>
                        <div class="body mt-3 w-100">
                           <form id="delivery_address" action="">
                               <div class="row">
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="country">Country*</label>
                                       <select name="country" id="" class="form-control">
                                            <option value="">Thailand</option>
                                            <option value="">United Kingdom</option>
                                            <option value="">United Stats</option>
                                        </select>
                                   </div>
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="city">City*</label>
                                        <select name="city" id="" class="form-control">
                                            <option value="">Choose your city</option>
                                            <option value="">Thailand</option>
                                            <option value="">United Kingdom</option>
                                            <option value="">United Stats</option>
                                        </select>
                                   </div>
                                   <div class="form-group mb-3 col-md-12">
                                       <label for="address">Address*</label>
                                       <input name="address" type="text" class="form-control" required>
                                   </div>
                                   <div class="form-group mb-3 col-md-6">
                                       <label for="postcode">Postcode*</label>
                                       <input name="postcode" type="text" class="form-control" required>
                                   </div>
                               </div>
                           </form>                             
                        </div>
                    </div>
                     {{-- end form DELIVERY ADDRESS --}}
                     {{-- form delivery options --}}
                     <div class="paper w-100 p-3 p-md-4 mb-3">
                        <h5 class="title mb-0 pb-3">DELIVERY OPTIONS</h5>
                        <div class="body mt-3 w-100">
                            <form id="delivery_option" action="">
                                <div class="form-check mb-3 col-md-6">
                                    <input name="delivery" id="express" class="form-check-input" type="radio">
                                    <label for="express">
                                        <div class="delivery-option d-flex flex-wrap px-3">
                                            <span class="mb-2"><b class="mr-15">$15</b>Express delivery</span>          
                                            <span class="text-16 text-gray">
                                                Delivery is within 2 working days <br> (Monday-Friday), excluding public holidays
                                            </span>                                  
                                        </div>
                                    </label>
                                </div>     
                                <div class="form-check mb-3 col-md-6">
                                    <input name="delivery" id="standard" class="form-check-input" type="radio">
                                    <label for="standard">
                                        <div class="delivery-option d-flex flex-wrap px-3">
                                            <span class="mb-2"><b class="mr-15">Free</b>Standart delivery</span>                                      
                                        </div>
                                    </label>
                                </div>
                            </form>                                   
                        </div>
                    </div>
                     {{-- end form delivery options --}}
                     {{-- form Payment --}}
                     <div class="paper w-100 p-3 p-md-4 mb-4">
                        <h5 class="title mb-0 pb-3">PAYMENT</h5>
                        <div class="body mt-3 w-100">
                            <form id="payment" action="">
                                <div class="w-100 d-flex mb-4">
                                    <a href="" class="btn-payment d-flex credit-card btn-size-md">
                                        <span class="">
                                            <img src="{{ asset('img/accept-payments/card.svg') }}" width="30" alt="Card">
                                        </span>
                                        
                                        Add credit / debit card                                        
                                    </a>      
                                    <span class="text-gray px-3 m-auto">or</span>    
                                    <a href="" class="btn-payment d-flex paypal btn-size-md">
                                        <span class="accept-payment-item">
                                            <img src="{{ asset('img/accept-payments/paypal.svg') }}" alt="Paypal">
                                        </span>
                                        Paypal                                    
                                    </a>   
                                </div>                      
                            </form>          
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
                     {{-- end form Payment --}}
                     {{-- place order --}}
                     <div class="w-100 mb-3">
                        <div class="body mt-3 w-100">
                            <a href="{{ url('checkout-confirmation') }}" class="w-100 btn btn-secondary btn-size-md mb-4">Place order</a>    
                            <span class="text-16">
                                By placing your order you agree to our <a href="" class="go-to text-gray">Terms & Conditions</a>, <a href="" class="go-to text-gray">privacy and returns policies</a> . <br>
                                You also consent to some of your data being stored by G.IA, which may be used to make <br> 
                                future shopping experiences better for you    
                            </span>                    
                        </div>
                    </div>
                     {{-- end place order --}}
                 </div>
                 <div class="col-md-4">
                     <div class="w-100 paper p-3 p-md-4 bag">
                        <h5 class="title mb-0 pb-3">3 items</h5>
                        <div class="w-100 bag-list size-small mb-4">
                            <div class="scrollbox" style="max-height: 209px;">
                                {{-- Cart Item --}}
                                <div class="item">
                                    <div class="item-img" style="min-width: 70px;">
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
                                    <div class="item-img" style="min-width: 70px;">
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
                                    <div class="item-img" style="min-width: 70px;">
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
                        </div>
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