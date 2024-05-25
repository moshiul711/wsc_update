
<?php $__env->startSection('title'); ?>
    Complete Order - Workstation Communication Limited
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
<div class="row mt-5">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success"><i class="fa fa-check-circle"></i> Thank You for Your Order.</h2>
                <h4 class="text-center py-3">We Will Contact You Very Soon.</h4>
                <h4 class="text-center pb-5">Your order number is <?php echo e($orderNumber); ?></h4>
                <h2 class="text-center">Ordered Products</h2>
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset($detail['product_image'])); ?>" class="img-thumbnail" height="40" width="60" alt="">
                            </td>
                            <td><?php echo e($detail['product_name']); ?></td>
                            <td><?php echo e($detail['product_quantity']); ?></td>
                            <td><?php echo e($detail['product_price']); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10"><h4 class="text-center">To track the delivery of your order, go to My Account > My Order</h4></div>
                    <div class="col-md-2">
                        <a href="<?php echo e(route('customer.order')); ?>" class="btn btn-success">View Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/website/checkout/order-complete.blade.php ENDPATH**/ ?>