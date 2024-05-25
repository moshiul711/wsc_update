

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Order Details</li>
            </ol>
        </nav>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-success text-bold">Ordered Product(S) Info</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#.</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $order->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><img src="<?php echo e(asset($detail->product_image)); ?>" height="60" width="80" alt=""></td>
                                    <td><?php echo e($detail->product_name); ?></td>
                                    <td><?php echo e($detail->product_price); ?></td>
                                    <td><?php echo e($detail->product_quantity); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-success text-bold">Order Details</h6>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">
                        <?php echo e(Session('message')); ?>

                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Delivery</th>
                                <th>Discount</th>
                                <th>Payable</th>
                                <th>Status</th>
                                <th>Method</th>

                            </tr>
                            <tr>
                                <td><?php echo e($order->order_date); ?></td>
                                <td><?php echo e($order->order_total); ?></td>
                                <td><?php echo e($order->delivery_charge); ?></td>
                                <td><?php echo e($order->discount); ?></td>
                                <td><?php echo e($order->payment_amount); ?></td>

                                <td>
                                    <?php if($order->order_status=='pending'): ?>
                                        <button class="btn btn-info-gradient">Pending</button>
                                    <?php elseif($order->order_status=='processing'): ?>
                                        <button class="btn btn-info-gradient">Pending</button>
                                    <?php elseif($order->order_status=='complete'): ?>
                                        <button class="btn btn-success-gradient">Complete</button>
                                    <?php else: ?>
                                        <button class="btn btn-danger-gradient">Cancel</button>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($order->payment_method == 'cod'): ?>
                                        Cash On Delivery
                                    <?php else: ?>
                                        Online Payment
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-bold text-success">Delivery Info.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Additional Info.</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td><?php echo e($order->delivery->first_name); ?></td>
                                <td><?php echo e($order->delivery->phone); ?></td>
                                <td><?php echo e($order->delivery->email); ?></td>
                                <td><?php echo e($order->delivery->address); ?></td>
                                <td><?php echo e($order->delivery->additional_info); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/customer/home/orderDetail.blade.php ENDPATH**/ ?>