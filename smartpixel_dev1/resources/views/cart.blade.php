@extends('layouts.app2')

@section('title', __('African Stock Images'))
@section('content_new')

<section class="main-content-wrapper">
    @include('sweet::alert')
    <div class="cart-table-area">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-8">
                    @if (Cart::session(Auth::id())->isEmpty())
                        <div class="cart-title mt-50">
                            <h4>Your shopping cart is empty.</h4>
                        </div>
                    @else
                        <div class="cart-title mt-50">
                            <h4>Your Assets ({{Cart::session(Auth::id())->getContent()->count()}} @if(Cart::session(Auth::id())->getContent()->count() == 1) item)@else items) @endif </h4>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::session(Auth::id())->getContent() as $item)
                            <tr>
                                <td class="cart_product_img">

                                    <a href="#"><img id="url" src="{{$item->attributes->url}}" class="img-fluid" alt="Product"></a>

                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ Str::words($item->name,20) }}</h5>
                                </td>
                                <td class="price">
                                    <p class="my-0">{{number_format ($item->price,2)}}</p>
                                    <p class="mb-0"><a href="{{ route('checkout.cart.remove', $item->id) }}"
                                                       class="pixel-color small"><i class="fa fa-trash"></i> Remove</a>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" role="form">
                            {{csrf_field ()}}
                            <script src="https://js.paystack.co/v1/inline.js"></script>
                            <ul class="summary-table">
                                <li><span>Subtotal:</span> <span>{{__('₦')}}{{ number_format (Cart::getSubTotal(),2) }}</span></li>
                                <li><span>Tax:</span>
                                    <span>{{__('₦')}}{{ number_format ($tax =  Cart::getSubTotal() * 0.075,2) }} @if (Cart::session(Auth::id())->getContent()->count() >= 1) (7.5%) @endif</span></li>
                                <li><span>Total:</span>
                                    <span>{{__('₦')}}{{ number_format ($total = Cart::getSubTotal() + $tax,2) }}</span></li>
                                {{session ()->put('total', $total*100)}}
                                <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                <input type="hidden" name="amount" value="{{ $total = Cart::getSubTotal() + $tax }}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="reference" value="{{ $ref = \Paystack::genTranxRef() }}"> {{-- required --}}
                                {{session ()->put('ref', $ref)}}
                            </ul>
                            <div class="cart-btn mt-100">
                                <button class="btn btn-pixel w-100" type="submit" onclick="" @if (Cart::session(Auth::id())->isEmpty())disabled @endif>Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
