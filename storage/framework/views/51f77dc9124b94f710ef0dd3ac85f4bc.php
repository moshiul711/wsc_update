

<?php $__env->startSection('main-content'); ?>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Orders</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('customer')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Order Number</th>
                                <th class="wd-15p border-bottom-0">Total</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Amount</th>
                                <th class="wd-20p border-bottom-0">Method</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->order_number); ?></td>
                                    <td><?php echo e($order->order_total); ?></td>
                                    <td><?php echo e($order->order_date); ?></td>
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
                                    <td><?php echo e($order->payment_amount); ?></td>
                                    <td>
                                        <?php if($order->payment_method=='cod'): ?>
                                        <?php echo e('Cash On Delivery'); ?>

                                        <?php else: ?>
                                        <?php echo e('Online Payment'); ?>

                                            <?php endif; ?>
                                    </td>
                                    <td><?php echo e($order->payment_status); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('customer.order.detail', $order->order_number )); ?>" class="btn btn-success-gradient">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/customer/home/orders.blade.php ENDPATH**/ ?>