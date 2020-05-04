@extends('layouts.app2')

@section('content_new')

<section class="main-content-wrapper">
    @include('sweet::alert')
    <div class="cart-table-area">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-8">
                    @if (\Cart::session(Auth::id())->isEmpty())
                        <div class="cart-title mt-50">
                            <h4>Your shopping cart is empty.</h4>
                        </div>
                    @else
                    <div class="cart-title mt-50">
                        <h4>Your Assets ({{\Cart::session(Auth::id())->getContent()->count()}} items)</h4>
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
                            @foreach(\Cart::session(Auth::id())->getContent() as $item)
                            <tr>
                                <td class="cart_product_img">

                                    <a href="#"><img id="url" src="{{$item->attributes->url}}" class="img-fluid" alt="Product"></a>

                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ Str::words($item->name,20) }}</h5>
                                </td>
                                <td class="price">
                                    <p class="my-0">{{$item->price}}</p>
                                    <p class="mb-0"><a href="{{ route('checkout.cart.remove', $item->id) }}" class="pixel-color small"><i class="fa fa-trash"></i> Remove</a></p>
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
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>₦{{\Cart::getSubTotal() }}</span></li>
                            <li><span>Tax:</span> <span>₦{{$tax =  \Cart::getSubTotal() * 0.075 }} (7.5%)</span></li>
                            <li><span>total:</span> <span>₦{{\Cart::getSubTotal() + $tax }}</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <button class="btn btn-pixel w-100">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection