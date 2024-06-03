@extends('website.master')

@section('title') {{ $product->name }} @endsection
@section('description') {{ $product->long_description }} @endsection
@section('image') {{ asset($product->image) }} @endsection
@section('url') {{ route('product.detail',[$product->id,$product->name]) }} @endsection
@section('type') {{ $product->category->name }} @endsection

@section('main-content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('product.category',['id'=>$product->category->id,'name'=>$product->category->name]) }}">{{ $product->category->name }}</a>
                </li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card productdesc">
                <div class="card-body">
                    <div class="row mb-5">
                        <div class=" col-xl-6 col-lg-12 col-md-12">
                            <div class="row h-100">
                                <div class="col-xl-2">
                                    <div class="clearfix carousel-slider h-100">
                                        <div class="carousel slide h-100" data-bs-interval="t" id="thumbcarousel">
                                            <div class="carousel-inner h-100">
                                                <ul class="carousel-item active d-flex h-100">
                                                    <li class="thumb active" data-bs-slide-to="0" data-bs-target="#Slider">
                                                        <img alt="{{ $product->name }}" src="{{ asset($product->image) }}">
                                                    </li>
                                                    @foreach($product->otherImages as $otherImage)
                                                        <li class="thumb" data-bs-slide-to="{{ $loop->iteration }}" data-bs-target="#Slider">
                                                            <img alt="{{ $product->name }}" src="{{ asset($otherImage->image) }}">
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-10">
                                    <div class="product-carousel h-100">
                                        <div class="carousel slide h-100" data-bs-ride="false" id="Slider">
                                            <div class="carousel-inner h-100">
                                                <div class="carousel-item active">
                                                    <img alt="{{ $product->name }}" class="img img-thumbnail w-100 d-block " src="{{ asset($product->image) }}" style="height: 300px; width: 811px">
                                                    <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                                        <img src="{{ asset('/') }}website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                    </div>
                                                </div>
                                                @foreach($product->otherImages as $otherImage)
                                                    <div class="carousel-item">
                                                        <img alt="img" class="img img-thumbnail w-100 d-block " src="{{ asset($otherImage->image) }}" style="height: 300px; width: 811px">
                                                        <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                                            <img src="{{ asset('/') }}website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <h3 class="mb-2 mt-xl-0 mt-4">{{ $product->name }}</h3>
                            <div class="text-warning rating-container d-sm-flex">
                                <div class="ms-2">
                                    <span>
                                        <a style="color: #00cc00; font-size: 18px"><i class="fa fa-line-chart"></i> {{ $product->hit_count }} View(s)</a>
                                        <a class="px-5" style="color: darkred; font-size: 18px"><i class="fa fa-bar-chart-o"></i> {{ count($product->reviews) }}Review(s)</a>
                                        @if($product->stock > 0)
                                            <a class="px-1" style="color: #008069; font-size: 18px"><i class=" fa fa-cubes"></i> In Stock</a>
                                        @else
                                            <a class="px-1 text-danger" style="color: #008069; font-size: 18px"><i class=" fa fa-cubes"></i>Out of Stock</a>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <p class="mb-0 text-18 mt-5">Price</p>
                            <p class="mb-1">
                                <span class="text-dark text-22">Tk. {{ $product->offer_price }}</span>
                                <span class="mx-2 text-muted text-decoration-line-through text-18">Tk. {{ $product->regular_price }}</span>
                                <span class="badge bg-red ms-2">({{ round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100) }}% Off)</span>
                            </p>
                            <div class="mt-5">
                                @if($product->stock > 0)
                                    <form id="formCart" action="#" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="number" class="form-control" required placeholder="Enter Product Quantity" min="1" max="{{ $product->stock }}" id="qty" name="qty" value="1">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="submit" class="form-control btn btn-success text-bold" value="ADD TO CART" id="btnCart" data-id="{{ $product->id }}">
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="number" class="form-control" required placeholder="Enter Product Quantity" value="1" min="1" max="{{ $product->stock }}" name="qty">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <button class="btn btn-danger btn-block text-bold" data-bs-container="body" data-bs-content="We'll re-stock it very soon." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Out of Stock">
                                                Out of Stock
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="mt-4 mb-4">
                                <h3 class="py-2"><u>{{ $product->name }}</u></h3>
                                <h4 class="mt-2">{!! $product->short_description !!} </h4>
                            </div>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading border-bottom-0">
                                    <div class="tabs-menu">
                                        <ul class="nav panel-tabs ">
                                            <li>
                                                <a class="btn active me-2 my-sm-0 my-1 text-body text-bold" data-bs-toggle="tab" href="#tab2">Description</a>
                                            </li>
                                            <li>
                                                <a class="btn  me-2 my-sm-0 my-1 text-body text-bold" data-bs-toggle="tab" href="#tab1">Specifications</a>
                                            </li>
                                            <li>
                                                <a class="btn text-body my-sm-0 my-1 text-bold" data-bs-toggle="tab" href="#tab3">Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane " id="tab1">
                                            <h4 class="mb-5 mt-3">General</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="row">
                                                    <div class="col-sm-3 text-muted">
                                                        Brand
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->brand->name }}
                                                    </div>
                                                </li>
                                                <li class=" row">
                                                    <div class="col-sm-3 text-muted">
                                                        Model Number
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->model }}
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Replacement
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->replacement }} Replacement Guarantee
                                                    </div>
                                                </li>

                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Service
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->service }} Service Warranty
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane active" id="tab2">
                                            {!! $product->long_description !!}
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <ul class="comment-section-main">
                                                @foreach($product->reviews as $review)
                                                    <li>
                                                        <div class="media mb-5 cnsl">
                                                            <div class=" me-3">
                                                                <a href="javascript:void(0)">
                                                                    <img alt="64x64" class="media-object rounded-circle thumb-sm" src="{{ asset($review->customer->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="name-time-container d-flex">
                                                                    <h5 class="mt-0 mb-0 me-2">{{ $review->customer->first_name.' '.$review->customer->last_name }}</h5>
                                                                    <svg class="mx-2 me-1" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"></path></svg>
                                                                    <span class="time-main text-muted">{{ $review->updated_at }}</span>
                                                                </div>
                                                                <div class="text-warning mb-0">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="comment-main-action d-flex">
                                                                    <p class="font-13 text-muted mb-0 comment-main">{{ $review->review }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @if(Session::get('customer_id'))
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header border-bottom">
                                                                <h5 class="card-title mb-3">Review</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="{{ route('product.review',$product->id) }}" class="form-horizontal m-t-20" method="post">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" rows="5" name="review" placeholder="Share Your Experience..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <button style="float: right" class="btn btn-success-gradient" type="submit">Post Review</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->

    </div>

    <!-- ROW-2 OPEN -->
    <div class="row ">
        <div class="col-md-12">
            <div class="title">
                <h3>
                    Related Products
                </h3>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
                @foreach($relatedProducts as $product)
                    @if($product->status == 1)
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
                                    <div class="mb-2" style="height: 40px">
                                        <h6 class="mb-1 text-normal">
                                            <a href="{{ route('product.detail',[$product->id,$product->name]) }}" title="{{ $product->name }}">
                                                {{ Str::limit($product->name,37) }}
                                            </a>
                                        </h6>
                                    </div>
                                    <a href="{{ route('product.detail',[$product->id,$product->name]) }}">
                                        <p class="mb-2 text-warning">
                                            <span>
                                                <del class="text-16  ms-1" style="color: black">Tk.{{ $product->regular_price }}</del>
                                            </span>
                                            <span class="badge bg-red" style="float: right">
                                                {{ round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100) }}% Off
                                            </span>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="mb-0">
                                                <span class="text-20 text-black">Tk.{{ $product->offer_price }}</span>
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
        </div>
    </div>
@endsection
