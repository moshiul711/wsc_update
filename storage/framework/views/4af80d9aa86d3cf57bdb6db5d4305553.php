<?php $__env->startSection('title'); ?>
Workstation Communication
<?php $__env->stopSection(); ?>

<?php $__env->startSection('slider'); ?>
    <div class="row mt-2">
        <div class="col-md-12 ">
            <div id="carousel-controls" class=" carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="border: 1px solid #80bc5b">
                    
                        
                             
                    
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($slider->id ==1): ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="" src="<?php echo e(asset($slider->image)); ?>" data-bs-holder-rendered="true">
                        </div>
                        <?php else: ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" alt="" src="<?php echo e(asset($slider->image)); ?>" data-bs-holder-rendered="true">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php if(count($coupons) > 0 ): ?>
<?php $__env->startSection('discount'); ?>
    <div class="row mt-2">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
            <div class="btn btn-success btn-block">
                <marquee direction="left">
                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="mx-6 text-bold">Apply Code <b><?php echo e($coupon->code); ?></b> To Get Taka <b><?php echo e($coupon->amount); ?></b>
                            Discount. Minimum Order Tk. <b><?php echo e($coupon->order_amount); ?></b>.
                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </marquee>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('after-slider'); ?>
    <div class="row mt-2 after-slider d-sm-none-max">
        <div class="col-3 col-lg-6 col-sm-12 col-md-6 col-xl-3 ">
            <div class="card " style="background:linear-gradient(158deg, rgba(175, 147, 252, 0.00) 2.71%, #B094FF 85.56%)">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image"
                          data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/ship.png"></span>
                    <h4 class="h4 mb-0 mt-1 text-center text-bold">Home Delivery</h4>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card " style="background:linear-gradient(158deg, rgba(175, 147, 252, 0.00) 2.71%, #FF9C9C 85.56%)">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image"
                          data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/operator.png"></span>
                    <h4 class="h4 mb-0 mt-1 text-center text-bold">Online Support</h4>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card " style="background:linear-gradient(158deg, rgba(175, 147, 252, 0.00) 2.71%, #5CD163 85.56%)">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image"
                          data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/box.png"></span>
                    <h4 class="h4 mb-0 mt-1 text-center text-bold">Quality Products</h4>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card " style="background:linear-gradient(158deg, rgba(175, 147, 252, 0.00) 2.71%, #44C8D6 85.56%)">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image"
                          data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/wrench.png"></span>
                    <h4 class="h4 mb-0 mt-1 text-center text-bold">Service Center</h4>
                    
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <?php if(count($products)>0): ?>
        <div class="page-header" style="border-bottom: 4px solid #008069">
            <div class="hover:bg-gray-100">
                <a href="" class="page-title text-black">
                    Featured Products
                </a>
            </div>
        </div>
        <div class="row row-cards">
            <div class="col-xl-12 col-lg-12">
                <div class="row products-main">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-4 col-sm-6 col-lg-3 col-xl-3 col-xxl-2 product-each">
                                <div class="card item-card">
                                    <div class="product-grid6 card-body ">
                                        <div class="product-image6">
                                            <div class="p-2">
                                                <img data-bs-target="#quick-view" data-bs-toggle="modal" class="w-100 quick-view img-fluid" src="<?php echo e(asset($product->image)); ?>" id="<?php echo e($product->id); ?>"
                                                     style="height: 180px; cursor: pointer" alt="<?php echo e($product->name); ?>">
                                                <div class="top-left"
                                                     style="position: absolute;top: 2px;left: 2px;">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content w-100 p-3">
                                            <div class="mb-2">
                                                <h6 class="mb-1 text-thin">
                                                    <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>" title="<?php echo e($product->name); ?>">
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
                                                <button id="btnCart" data-id="<?php echo e($product->id); ?>" class="btn btn-success text-bold btn-block">
                                                    Add To Cart
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <button class="btn btn-danger btn-block text-bold" data-bs-container="body"
                                                    data-bs-content="We'll re-stock it very soon." data-bs-placement="top"
                                                    data-bs-popover-color="default" data-bs-toggle="popover" title="Out of Stock" >
                                                Out of Stock
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div><!-- COL-END -->
        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($category->products) > 0 ): ?>
            <div class="row">
                <div class="col-8" >
                    <div class="page-header" style="border-bottom: 4px solid #008069">
                        <div class="hover:bg-gray-100" >
                            <a href="<?php echo e(route('product.category',['id'=>$category->id,'name'=>$category->name])); ?>" class="page-title text-black">
                                <?php echo e($category->name); ?>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="page-header" style=" border-bottom: 4px solid #008069">
                        <div class="hover:bg-gray-100 float-end">
                            <a href="<?php echo e(route('product.category',['id'=>$category->id,'name'=>$category->name])); ?>"
                               class="page-title text-black">View All</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cards">
                <div class="col-xl-12 col-lg-12">
                    <div class="row products-main">
                        <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->status == 1): ?>
                                <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3 col-xxl product-each">
                                    <div class="card item-card">
                                        <div class="product-grid6 card-body ">
                                            <div class="product-image6">
                                                <div class="p-2">
                                                    <img data-bs-target="#quick-view" data-bs-toggle="modal" class="quick-view img-fluid" src="<?php echo e(asset($product->image)); ?>" id="<?php echo e($product->id); ?>" style="height: 180px;cursor: pointer" alt="<?php echo e($product->name); ?>">
                                                    <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content w-100 p-3">
                                                <div class="mb-2">
                                                    <h6 class="mb-1 text-normal">
                                                        <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>" title="<?php echo e($product->name); ?>">
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
                                                    <button id="btnCart" data-id="<?php echo e($product->id); ?>" class="btn btn-success text-bold btn-block">
                                                        Add To Cart
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button class="btn btn-danger btn-block text-bold" data-bs-container="body"
                                                        data-bs-content="We'll re-stock it very soon." data-bs-placement="top"
                                                        data-bs-popover-color="default" data-bs-toggle="popover" title="Out of Stock" >
                                                    Out of Stock
                                                </button>
                                                
                                                    
                                                
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div><!-- COL-END -->
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Modal -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moshi\Downloads\New folder\wsc\resources\views/website/home/index.blade.php ENDPATH**/ ?>