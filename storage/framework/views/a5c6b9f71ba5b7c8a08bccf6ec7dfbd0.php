

<?php $__env->startSection('title'); ?>
    <?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('product.category',['id'=>$product->category->id,'name'=>$product->category->name])); ?>"><?php echo e($product->category->name); ?></a>
                </li>
                <li class="breadcrumb-item active"><?php echo e($product->name); ?></li>
            </ol>
        </nav>
    </div>

    <!-- ROW-1 OPEN -->
    <div class="row">
        <!-- COL-OPEN -->
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
                                                    <li class="thumb active" data-bs-slide-to="0"
                                                        data-bs-target="#Slider">
                                                        <img alt="<?php echo e($product->name); ?>"
                                                             src="<?php echo e(asset($product->image)); ?>">
                                                    </li>
                                                    <?php $__currentLoopData = $product->otherImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="thumb" data-bs-slide-to="<?php echo e($loop->iteration); ?>"
                                                            data-bs-target="#Slider">
                                                            <img alt="<?php echo e($product->name); ?>"
                                                                 src="<?php echo e(asset($otherImage->image)); ?>">
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                    <img alt="<?php echo e($product->name); ?>"
                                                         class="img img-thumbnail w-100 d-block "
                                                         src="<?php echo e(asset($product->image)); ?>"
                                                         style="height: 300px; width: 811px">
                                                    <div class="top-left"
                                                         style="position: absolute;top: 2px;left: 2px;">
                                                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png"
                                                             alt=""
                                                             style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                    </div>
                                                </div>
                                                <?php $__currentLoopData = $product->otherImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="carousel-item">
                                                        <img alt="img" class="img img-thumbnail w-100 d-block "
                                                             src="<?php echo e(asset($otherImage->image)); ?>"
                                                             style="height: 300px; width: 811px">
                                                        <div class="top-left"
                                                             style="position: absolute;top: 2px;left: 2px;">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png"
                                                                 alt=""
                                                                 style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <h3 class="mb-2 mt-xl-0 mt-4"><?php echo e($product->name); ?></h3>
                            <div class="text-warning rating-container d-sm-flex">
                                <div class="ms-2">
                                    <span>
                                        <a style="color: #00cc00; font-size: 18px"><i
                                                    class="fa fa-line-chart"></i> <?php echo e($product->hit_count); ?> View(s)</a>
                                        <a class="px-5" style="color: darkred; font-size: 18px"><i
                                                    class="fa fa-bar-chart-o"></i> <?php echo e(count($product->reviews)); ?>

                                            Review(s)</a>
                                        <?php if($product->stock > 0): ?>
                                            <a class="px-1" style="color: #008069; font-size: 18px"><i
                                                        class=" fa fa-cubes"></i> In Stock</a>
                                        <?php else: ?><a class="px-1 text-danger" style="color: #008069; font-size: 18px"><i
                                                    class=" fa fa-cubes"></i>Out of Stock</a>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </div>
                            <p class="mb-0 text-18 mt-5">Price</p>
                            <p class="mb-1">
                                <span class="text-dark text-22">Tk. <?php echo e($product->offer_price); ?></span>
                                <span class="mx-2 text-muted text-decoration-line-through text-18">Tk. <?php echo e($product->regular_price); ?></span>
                                <span class="badge bg-red ms-2">(<?php echo e(round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100)); ?>

                                    % Off)</span>
                            </p>

                            <div class="mt-5">
                                <?php if($product->stock > 0): ?>
                                    <form id="formCart" action="#" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="number" class="form-control" required
                                                       placeholder="Enter Product Quantity" min="1"
                                                       max="<?php echo e($product->stock); ?>" id="qty" name="qty" value="1">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="submit" class="form-control btn btn-success text-bold"
                                                       value="ADD TO CART" id="btnCart" data-id="<?php echo e($product->id); ?>">
                                            </div>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="number" class="form-control" required
                                                   placeholder="Enter Product Quantity" value="1" min="1"
                                                   max="<?php echo e($product->stock); ?>" name="qty">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <button class="btn btn-danger btn-block text-bold" data-bs-container="body"
                                                    data-bs-content="We'll re-stock it very soon."
                                                    data-bs-placement="top"
                                                    data-bs-popover-color="default" data-bs-toggle="popover"
                                                    title="Out of Stock">
                                                Out of Stock
                                            </button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="mt-4 mb-4">
                                <h3 class="py-2"><u><?php echo e($product->name); ?></u></h3>
                                <h4 class="mt-2"><?php echo $product->short_description; ?> </h4>
                            </div>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading border-bottom-0">
                                    <div class="tabs-menu">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs ">
                                            <li>
                                                <a class="btn active me-2 my-sm-0 my-1 text-body text-bold"
                                                   data-bs-toggle="tab" href="#tab1">Specifications</a>
                                            </li>
                                            <li>
                                                <a class="btn me-2 my-sm-0 my-1 text-body text-bold"
                                                   data-bs-toggle="tab" href="#tab2">Description</a>
                                            </li>
                                            <li>
                                                <a class="btn text-body my-sm-0 my-1 text-bold" data-bs-toggle="tab"
                                                   href="#tab3">Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h4 class="mb-5 mt-3">General</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="row">
                                                    <div class="col-sm-3 text-muted">
                                                        Brand
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo e($product->brand->name); ?>

                                                    </div>
                                                </li>
                                                <li class=" row">
                                                    <div class="col-sm-3 text-muted">
                                                        Model Number
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo e($product->model); ?>

                                                    </div>
                                                </li>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Replacement
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo e($product->replacement); ?> Replacement Guarantee
                                                    </div>
                                                </li>

                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Service
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo e($product->service); ?> Service Warranty
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <?php echo $product->long_description; ?>

                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <ul class="comment-section-main">
                                                <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <div class="media mb-5 cnsl">
                                                            <div class=" me-3">
                                                                <a href="javascript:void(0)">
                                                                    <img alt="64x64"
                                                                         class="media-object rounded-circle thumb-sm"
                                                                         src="<?php echo e(asset($review->customer->image)); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="name-time-container d-flex">
                                                                    <h5 class="mt-0 mb-0 me-2"><?php echo e($review->customer->first_name.' '.$review->customer->last_name); ?></h5>
                                                                    <svg class="mx-2 me-1" viewbox="0 0 24 24"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"></path>
                                                                    </svg>
                                                                    <span class="time-main text-muted"><?php echo e($review->updated_at); ?></span>
                                                                </div>
                                                                <div class="text-warning mb-0">
                                                                    <i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="comment-main-action d-flex">
                                                                    <p class="font-13 text-muted mb-0 comment-main"><?php echo e($review->review); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            <?php if(Session::get('customer_id')): ?>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header border-bottom">
                                                                <h5 class="card-title mb-3">Review</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="<?php echo e(route('product.review',$product->id)); ?>"
                                                                      class="form-horizontal m-t-20" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" rows="5"
                                                                                      name="review"
                                                                                      placeholder="Share Your Experience..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <button style="float: right"
                                                                                class="btn btn-success-gradient"
                                                                                type="submit">Post Review
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
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
            <div class="row">
                <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($product->status == 1): ?>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3 product-each">
                            <div class="card item-card">
                                <div class="product-grid6 card-body">
                                    <div class="product-image6">
                                        <div class="">
                                            <img data-bs-target="#quick-view" data-bs-toggle="modal"
                                                 class="quick-view img-fluid" src="<?php echo e(asset($product->image)); ?>"
                                                 id="<?php echo e($product->id); ?>"
                                                 style="height: 150px;cursor: pointer" alt="<?php echo e($product->name); ?>">
                                            <div class="top-left"
                                                 style="position: absolute;top: 2px;left: 2px;">
                                                <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt=""
                                                     style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content w-100 p-3">
                                        <div class="mb-2">
                                            <h6 class="mb-1 text-normal">
                                                <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>"
                                                   title="<?php echo e($product->name); ?>">
                                                    <?php echo e(Str::limit($product->name,27)); ?>

                                                </a>
                                            </h6>
                                            <p class="mb-0 text-muted text-start"><?php echo e($product->brand->name); ?></p>
                                        </div>
                                        <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>">
                                            <p class="mb-2 text-warning">
                                                <span>
                                                    <del class="text-18  ms-1"
                                                         style="color: black">Tk.<?php echo e($product->regular_price); ?>

                                                    </del>
                                                </span>
                                                <span class="badge bg-red" style="float: right">
                                                        <?php echo e(round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100)); ?>

                                                    % Off
                                                    </span>
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0">
                                                    <span class="text-22 text-black text-bold">Tk.<?php echo e($product->offer_price); ?></span>
                                                </p>
                                                <?php if($product->stock > 0): ?>
                                                    <p class="mb-0 text-success-darkest">Available</p>
                                                <?php else: ?>
                                                    <p class="mb-0 text-secondary">Out of Stock</p>
                                                <?php endif; ?>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-2 text-center px-5">
                                    <?php if($product->stock > 0): ?>
                                        <form id="formCart" action="#" method="post">
                                            <input type="hidden" id="qty" name="qty" value="1">
                                            <button id="btnCart" data-id="<?php echo e($product->id); ?>"
                                                    class="btn btn-success text-bold btn-block">
                                                Add To Cart
                                            </button>
                                        </form>
                                    <?php else: ?>
                                        <button class="btn btn-danger btn-block text-bold" data-bs-container="body"
                                                data-bs-content="We'll re-stock it very soon." data-bs-placement="top"
                                                data-bs-popover-color="default" data-bs-toggle="popover"
                                                title="Out of Stock">
                                            Out of Stock
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/website/product/detail.blade.php ENDPATH**/ ?>