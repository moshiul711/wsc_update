<div class="modal" id="cart_modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="table-responsive" id="cart_modal_products">
                    <table class="table table-vcenter text-nowrap mb-0">
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
                        <tbody>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Continue Shopping</button>
                <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div>