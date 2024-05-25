<?php $__env->startSection('title'); ?>
    <?php echo e($_GET['search']); ?> Products - Workstation Communication Limited
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


<?php $__env->startSection('main-content'); ?>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mt-7">
            <h4 class="text-lg-bold">Search Result For <?php echo e($_GET['search']); ?>...</h4>
        </div>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-each">
                <div class="card item-card">
                    <div class="product-grid6 card-body ">
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
                    <div class="p-2 text-center">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/website/product/show.blade.php ENDPATH**/ ?>