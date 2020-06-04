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
                        <form>
                            {{csrf_field ()}}
                            <script src="https://js.paystack.co/v1/inline.js"></script>
                            <ul class="summary-table">
                                <li><span>Subtotal:</span> <span>{{__('₦')}}{{ \Cart::getSubTotal(),2 }}</span></li>
                                <li><span>Tax:</span>
                                    <span>{{__('₦')}}{{ $tax =  \Cart::getSubTotal() * 0.075 }} (7.5%)</span></li>
                                <li><span>Total:</span>
                                    <span>{{__('₦')}}{{ $total = \Cart::getSubTotal() + $tax }}</span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <button class="btn btn-pixel w-100" onclick="payWithPaystack()">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
<script>
    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: 'pk_test_d5f88794a1e4b9f67cc4310209661bde496118dc',
            email: '{{Auth::user()->email}}',
            amount: {{$total * 100}},
            currency: "NGN",
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: 'Stephen',
            lastname: 'King',
            // label: "Optional string that replaces customer email"
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function (response) {
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function () {
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>