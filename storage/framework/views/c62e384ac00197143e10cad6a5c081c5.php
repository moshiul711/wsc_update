<?php $__env->startSection('title'); ?>
    Workstation Communication
<?php $__env->stopSection(); ?>

<?php $__env->startSection('slider'); ?>
    <div class="row mt-2">
        <div class="col-md-12 ">
            <div id="carousel-controls" class=" carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="border: 2px solid #008069">
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
    
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 d-sm-none-max mt-5">
        <div class="col" >
            <div class="card shadow-2xl">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/emi.png"></span>
                    <p class="mt-2 text-center text-bold">36 Month EMI</p>
                </div>
            </div>
        </div>

        <div class="col" >
            <div class="card shadow-2xl">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/warranty.png"></span>
                    <p class="mt-2 text-center text-bold">100% Genuine Products</p>
                </div>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-2xl">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/delivery.png"></span>
                    <p class="mt-2 text-center text-bold">24 Hour Delivery</p>
                </div>
            </div>
        </div>

        <div class="col" >
            <div class="card shadow-2xl">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/secure.png"></span>
                    <p class="mt-2 text-center text-bold">Secure Payment</p>
                </div>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-2xl">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/icons/easy.png"></span>
                    <p class="mt-2 text-center text-bold">Easy Returns</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
        
    <?php if(count($products)>0): ?>
        <div class="page-header ps-2">
            <img src="<?php echo e(asset('/')); ?>website/assets/icons/sale.png" class="align-content-center" alt="">
            <span class="page-title">Featured Products</span>
        </div>
        <div class="border border-secondary mt-2"></div>
        <div class="row my-slider ps-2">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-each">
                    <div class="card item-card">
                        <div class="product-grid6 card-body shadow">
                            <div class="product-image6 text-center">
                                <div class="p-2">
                                    <img data-bs-target="#quick-view" data-bs-toggle="modal" class="w-100 quick-view img-fluid" src="<?php echo e(asset($product->image)); ?>" id="<?php echo e($product->id); ?>" style="height: 180px;cursor: pointer; max-width:200px" alt="<?php echo e($product->name); ?>">
                                    <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                    </div>
                                </div>
                            </div>
                            <div class="product-content w-100 p-3">
                                <div class="mb-2" style="height: 40px">
                                    <h6 class="mb-1 text-normal">
                                        <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>" title="<?php echo e($product->name); ?>">
                                            <?php echo e(Str::limit($product->name,37)); ?>

                                        </a>
                                    </h6>
                                </div>
                                <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>">
                                    <p class="mb-2 text-warning">
                                            <span>
                                                <del class="text-16  ms-1" style="color: black">Tk.<?php echo e($product->regular_price); ?></del>
                                            </span>
                                        <span class="badge bg-red" style="float: right">
                                                <?php echo e(round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100)); ?>% Off
                                            </span>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0">
                                            <span class="text-20 text-black">Tk.<?php echo e($product->offer_price); ?></span>
                                        </p>
                                        <?php if($product->stock > 0): ?>
                                            <p class="mb-0 text-success-darkest">In Stock</p>
                                        <?php else: ?>
                                            <p class="mb-0 text-secondary">Stock Out</p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="p-2 text-center shadow">
                            <?php if($product->stock > 0): ?>
                                <form id="formCart" action="#" method="post">
                                    <input type="hidden" id="qty" name="qty" value="1">
                                    <button id="btnCart" data-id="<?php echo e($product->id); ?>" class="btn btn-success text-bold btn-block">
                                        Add To Cart
                                    </button>
                                </form>
                            <?php else: ?>
                                <button class="btn btn-danger btn-block text-bold" data-bs-container="body" data-bs-content="We'll re-stock it very soon." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Request Accepted">
                                    Request Stock
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
        


        
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($category->products) > 0 ): ?>
            <div class="row mt-5">
                <div class="col-8">
                    <div class="page-header" style="border-bottom: 4px solid #008069">
                        <div class="hover:bg-gray-100">
                            <a href="<?php echo e(route('product.category',['id'=>$category->id,'name'=>$category->name])); ?>"
                               class="page-title text-black ps-2">
                                <img src="<?php echo e(asset($category->icon)); ?>" alt=""><?php echo e($category->name); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="page-header" style=" border-bottom: 4px solid #008069">
                        <div class="hover:bg-gray-100 float-end">
                            <a href="<?php echo e(route('product.category',['id'=>$category->id,'name'=>$category->name])); ?>"
                               class="page-title text-black">View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mt-1">
                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-each">
                        <div class="card item-card">
                            <div class="product-grid6 card-body shadow">
                                <div class="product-image6 text-center">
                                    <div class="p-2">
                                        <img data-bs-target="#quick-view" data-bs-toggle="modal" class="w-100 quick-view img-fluid" src="<?php echo e(asset($product->image)); ?>" id="<?php echo e($product->id); ?>" style="height: 180px;cursor: pointer; max-width:200px" alt="<?php echo e($product->name); ?>">
                                        <div class="top-left" style="position: absolute;top: 2px;left: 2px;">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt="" style="height:32px; width: 32px; border: 2px solid lightskyblue; border-radius: 50%">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content w-100 p-3">
                                    <div class="mb-2" style="height: 40px">
                                        <h6 class="mb-1 text-normal">
                                            <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>" title="<?php echo e($product->name); ?>">
                                                <?php echo e(Str::limit($product->name,37)); ?>

                                            </a>
                                        </h6>
                                    </div>
                                    <a href="<?php echo e(route('product.detail',[$product->id,$product->name])); ?>">
                                        <p class="mb-2 text-warning">
                                            <span>
                                                <del class="text-16  ms-1" style="color: black">Tk.<?php echo e($product->regular_price); ?></del>
                                            </span>
                                            <span class="badge bg-red" style="float: right">
                                                <?php echo e(round($offer = (($product->regular_price - $product->offer_price )/$product->regular_price)*100)); ?>% Off
                                            </span>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="mb-0">
                                                <span class="text-20 text-black">Tk.<?php echo e($product->offer_price); ?></span>
                                            </p>
                                            <?php if($product->stock > 0): ?>
                                                <p class="mb-0 text-success-darkest">In Stock</p>
                                            <?php else: ?>
                                                <p class="mb-0 text-secondary">Stock Out</p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-2 text-center shadow">
                                <?php if($product->stock > 0): ?>
                                    <form id="formCart" action="#" method="post">
                                        <input type="hidden" id="qty" name="qty" value="1">
                                        <button id="btnCart" data-id="<?php echo e($product->id); ?>" class="btn btn-success text-bold btn-block">
                                            Add To Cart
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <button class="btn btn-danger btn-block text-bold" data-bs-container="body" data-bs-content="We'll re-stock it very soon." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Request Accepted">
                                        Request Stock
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/website/home/index.blade.php ENDPATH**/ ?>