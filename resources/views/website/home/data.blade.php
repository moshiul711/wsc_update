@foreach($categories as $category)
    @if(count($category->products)  > 0 )
        <div class="row mt-5">
            <div class="col-8">
                <div class="page-header" style="border-bottom: 4px solid #008069">
                    <div class="hover:bg-gray-100">
                        <a href="{{ route('product.category',['name'=>$category->name]) }}" class="page-title text-black ps-2"><img src="{{ asset($category->icon) }}" alt="">{{ $category->name }}</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="page-header" style=" border-bottom: 4px solid #008069">
                    <div class="hover:bg-gray-100 float-end"><a href="{{ route('product.category',['name'=>$category->name]) }}" class="page-title text-black">View All</a></div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mt-1">
            @foreach ($products as $product)
                @if ($product->category_id === $category->id)
                    <div class="product-each">
                        <div class="card item-card">
                            <div class="product-grid6 card-body shadow">
                                <div class="product-image6 text-center">
                                    <div class="p-2">
                                        <img data-bs-target="#quick-view" data-bs-toggle="modal" class="w-100 quick-view img-fluid" src="{{ asset($product->image) }}" id="{{ $product->id }}" style="height: 180px;cursor: pointer; max-width:200px" alt="{{ $product->name }}">
                                        <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                            <img src="{{ asset('/') }}website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content w-100 p-3">
                                    <div class="mb-2" style="height: 40px"><h6 class="mb-1 text-normal"><a href="{{ route('product.detail',[$product->id,$product->name]) }}" title="{{ $product->name }}">{{ Str::limit($product->name,37) }}</a></h6></div>
                                    <a href="{{ route('product.detail',[$product->id,$product->name]) }}">
                                        <p class="mb-2 text-warning">
                                            <span><del class="text-16  ms-1" style="color: black">Tk.{{ $product->regular_price }}</del></span>

                                            <span class="badge bg-red" style="float: right">{{ round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100) }}% Off</span>
                                        </p>

                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="mb-0">
                                                <span class="text-20 text-black"> Tk.{{ $product->offer_price }}</span>
                                            </p>
                                            @if($product->stock > 0)
                                                <p class="mb-0 text-success-darkest">In Stock</p>
                                            @else
                                                <p class="mb-0 text-secondary">Stock Out</p>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-2 text-center shadow">
                                @if($product->stock > 0)
                                    <form id="formCart" action="#" method="post">
                                        <input type="hidden" id="qty" name="qty" value="1">
                                        <button id="btnCart" data-id="{{ $product->id }}" class="btn btn-success text-bold btn-block">
                                            Add To Cart
                                        </button>
                                    </form>
                                @else
                                    <button class="btn btn-danger btn-block text-bold" data-bs-container="body" data-bs-content="We'll re-stock it very soon." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Request Accepted">
                                        Request Stock
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endforeach
