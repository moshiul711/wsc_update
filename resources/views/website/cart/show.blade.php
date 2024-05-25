@extends('website.master')
@section('title')
    Cart Details - Workstation Communication Limited
@endsection

@section('main-content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Cart Products</li>
            </ol>
        </nav>
    </div>
    <!-- PAGE-HEADER END -->
    @if(Cart::Count()>0)
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-8 col-md-12">
            <div class="card cart">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Shopping Cart</h3>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive" id="cart_products">
                        <table class="table table-bordered table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Preview</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach(Cart::content() as $item)
                                    <form action="{{ route('cart.update',$item->rowId) }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->options->image) }}" alt="" class="cart-img">
                                        </td>
                                        <td>
                                            <a href="{{ route('product.detail',[$item->id,$item->name]) }}" style="color: black">
                                                {{ substr($item->name,0,30) }}
                                            </a>
                                        </td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <input id="updateCartQty" data-id="{{ $item->rowId }}" type="number" required name="qty" min="1" max="{{ $item->options->max }}" class="form-control text-center" value="{{ $item->qty }}" >
                                        </td>
                                        <td>
                                            {{ round($item->qty * $item->price) }}
                                        </td>
                                        <td>
                                            {{--<button type="submit" class="btn btn-success text-bold me-1">Update</button>--}}
                                            <a id="remove_cart_product" data-id="{{ $item->rowId }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </form>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="step-footer text-end">
                        <a href="{{ route('home') }}" class="btn btn-success my-1 text-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.5,11.5H7.7069702l4.6465454-4.6464844c0.1972046-0.1932373,0.2003784-0.5097656,0.0071411-0.7069702c-0.1932983-0.1972046-0.5098267-0.2004395-0.7070312-0.0071411c-0.0023804,0.0023193-0.0047607,0.0046997-0.0071411,0.0071411l-5.5,5.5c-0.1953125,0.1950684-0.1956177,0.5113525-0.0005493,0.706665c0.0001221,0.0001831,0.0002441,0.0003052,0.0005493,0.0003052l5.5,5.5c0.1972046,0.1932373,0.5137329,0.1900635,0.7069702-0.0071411c0.1905518-0.194397,0.1905518-0.5054932,0-0.6998901L7.7069702,12.5H17.5c0.276123,0,0.5-0.223877,0.5-0.5S17.776123,11.5,17.5,11.5z"/></svg>
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card shadow">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Have coupon?</h3>
                </div>
                <div class="card-body">
                    @if(!Session::get('coupon'))
                        <form id="formCoupon">
{{--                    <form action="{{ route('coupon.apply') }}" method="post">--}}
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="myInput" name="coupon" class="form-control coupon" placeholder="Coupon code" required>
                                <span class="input-group-btn">
                                    <button id="btnCoupon" class="btn btn-success btn-apply coupon text-bold">Apply Coupon</button>
                                </span>
                            </div>
                        </div>
                    </form>
                        <p id="output" class="text-center text-danger text-bold"></p>
                    @else
                        <form id="formCoupon">
                            {{--<form action="{{ route('coupon.apply') }}" method="post">--}}
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="myInput" readonly name="coupon" class="form-control coupon" placeholder="Coupon code" required>
                                    <span class="input-group-btn">
                                    <button class="btn btn-success btn-apply coupon text-bold">Coupon Applied</button>
                                </span>
                                </div>
                            </div>
                        </form>
                        @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Price Details</h3>
                </div>
                <div class="card-body ">
                    <div class="cart-subTotal">
                        <table class="table border-top-0">
                            <tr>
                                <td class="border-top-0">Sub Total</td>
                                <td class="text-end border-top-0">Tk. {{ $subTotal = round(Cart::subtotal()) }}</td>
                            </tr>
                            <tr id="couponTest">
                                <td class="border-top-0">Discount</td>
                                @if(Session::get('coupon'))
                                    <td class="text-end border-top-0">Tk. {{ $discount = Session::get('coupon') }}</td>
                                @else
                                    <td class="text-end border-top-0">Tk. {{ $discount = 0 }}</td>
                                @endif
                            </tr>
                            {{--<tr>--}}
                            {{--<td class="border-top-0">Shipping</td>--}}
                            {{--<td class="text-end border-top-0">Tk. {{ $shipping = 110 }}</td>--}}
                            {{--</tr>--}}
                            <tr id="total">
                                <td class="fs-20 border-top-0">Total</td>

                                <td class="text-end fs-20 border-top-0">Tk.{{ $subTotal = round(Cart::subtotal())-$discount }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="step-footer text-end right">
                        {{--@if(Session::get('customer_id'))--}}
                        <a href="{{ route('checkout') }}" class="btn btn-success my-1 text-bold">
                            Checkout
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.8536377,11.6466064c-0.000061-0.000061-0.0001221-0.000061-0.0001221-0.0001221l-5.5-5.5c-0.1986084-0.1918335-0.5151367-0.1863403-0.7069702,0.0122681c-0.1871338,0.1937866-0.1871338,0.5009766,0,0.6947021L16.2930298,11.5H6.5C6.223877,11.5,6,11.723877,6,12s0.223877,0.5,0.5,0.5h9.7930298l-4.6465454,4.6464844c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702c0.1918335,0.1986694,0.5084229,0.2041626,0.7070312,0.0123291c0.0041504-0.0040283,0.0082397-0.0081177,0.0122681-0.0123291l5.5-5.5C18.0487671,12.1583252,18.0487671,11.8418579,17.8536377,11.6466064z"/></svg>
                        </a>
                        {{--@else--}}
                            {{--<a href="" data-bs-target="#smallmodal" data-bs-toggle="modal" class="btn btn-info my-1">--}}
                                {{--Checkout--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" class=" w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.8536377,11.6466064c-0.000061-0.000061-0.0001221-0.000061-0.0001221-0.0001221l-5.5-5.5c-0.1986084-0.1918335-0.5151367-0.1863403-0.7069702,0.0122681c-0.1871338,0.1937866-0.1871338,0.5009766,0,0.6947021L16.2930298,11.5H6.5C6.223877,11.5,6,11.723877,6,12s0.223877,0.5,0.5,0.5h9.7930298l-4.6465454,4.6464844c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702c0.1918335,0.1986694,0.5084229,0.2041626,0.7070312,0.0123291c0.0041504-0.0040283,0.0082397-0.0081177,0.0122681-0.0123291l5.5-5.5C18.0487671,12.1583252,18.0487671,11.8418579,17.8536377,11.6466064z"/></svg>--}}
                            {{--</a>--}}
                        {{--@endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL-END -->
    <!-- ROW-1 CLOSED -->
    @else
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body text-center m-auto">
                        <h3 class="text-bold text-danger-shadow py-5">Sorry !! No Products Found In Shopping Cart...</h3>
                        <p class="text-bold text-danger-shadow py-2">Please ! Add Some product first</p>
                        <a href="{{ route('home') }}" class="btn btn-success-gradient text-bold">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
@endsection
