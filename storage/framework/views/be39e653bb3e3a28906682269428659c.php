<div class="modal-body">
    <div class="col-lg-12 col-md-12">
        <div class="card productdesc">
            <div class="card-body">
                <div class="row mb-5">
                    <div class=" col-xl-6 col-lg-12 col-md-12">
                        <div class="row h-100 w-100">

                            <div class="col-xl-10">
                                <div class="product-carousel h-100">
                                    <div class="carousel slide h-100" data-bs-ride="false" id="Slider">
                                        <div class="carousel-inner h-100">
                                            <div class="carousel-item active">
                                                <img alt="<?php echo e($product->name); ?>" class="img img-thumbnail w-100 d-block "
                                                     src="<?php echo e(asset($product->image)); ?>"
                                                     style="height: 300px; width: 811px">
                                                <div class="top-left"
                                                     style="position: absolute;top: 2px;left: 2px;">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" alt=""
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
                        <hr>
                        <p class="mb-1">
                            <span class="text-dark text-22">Offer Price : Tk. <?php echo e($product->offer_price); ?></span>
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
                                                data-bs-content="We'll re-stock it very soon." data-bs-placement="top"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#cartForm').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var request = $(this).serialize();
        $.ajax({
            url: url,
            type: 'POST',
            async: false,
            data: request,
            success: function (response) {
                if (response.message) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-right',
                        iconColor: 'white',
                        customClass: {
                            popup: 'colored-toast'
                        },
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true
                    })
                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    })
                }
            }
        });
    });
</script><?php /**PATH D:\Mission-2023\WSC\resources\views/website/product/quick-view.blade.php ENDPATH**/ ?>