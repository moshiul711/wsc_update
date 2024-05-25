

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <div>
            <h1 class="page-title">Order List(S)</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Order</th>
                                <th class="wd-15p border-bottom-0">Order Number</th>
                                <th class="wd-20p border-bottom-0">Date</th>
                                <th class="wd-15p border-bottom-0">Customer</th>
                                <th class="wd-20p border-bottom-0">Status</th>

                                <th class="wd-20p border-bottom-0">Payment</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->order_number); ?></td>
                                    <td><?php echo e($order->order_date); ?></td>
                                    <td><?php echo e($order->customer->first_name.'('. $order->customer->phone.')'); ?></td>
                                    <td>
                                        <?php if($order->order_status=='pending'): ?>
                                            <button class="btn btn-info-gradient">Pending</button>
                                        <?php elseif($order->order_status=='processing'): ?>
                                            <button class="btn btn-info-gradient">Processing</button>
                                        <?php elseif($order->order_status=='complete'): ?>
                                            <button class="btn btn-success-gradient">Complete</button>
                                        <?php else: ?>
                                            <button class="btn btn-danger-gradient">Cancel</button>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($order->payment_method=='cod'): ?>
                                            <?php echo e('Cash On Delivery'); ?>

                                        <?php else: ?>
                                            <?php echo e('Online Payment'); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.order-detail', ['id' => $order->order_number])); ?>" class="btn btn-success btn-sm" title="Order Detail Info">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="<?php echo e(route('admin.order-edit', ['id' => $order->order_number])); ?>" class="btn btn-info btn-sm <?php echo e($order->order_status == 'complete' ? 'disabled' : ''); ?>" title="Edit Order">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?php echo e(route('admin.order-invoice', ['id' => $order->order_number])); ?>" target="_blank" class="btn btn-warning btn-sm" title="Order Invoice">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="<?php echo e(route('admin.order-download-order-invoice', ['id' => $order->order_number])); ?>" target="_blank" class="btn btn-primary btn-sm" title="Print Invoice">
                                            <i class="fa fa-print"></i>
                                        </a>
                                        <a href="<?php echo e(route('admin.order-delete', ['id' => $order->order_number])); ?>"  title="Order Delete" class="<?php echo e($order->order_status == 'cancel' ? 'btn btn-danger btn-sm': 'disabled btn btn-danger btn-sm'); ?>" onclick="return confirm('Are you sure to delete this?')" >
                                            <i class="fa fa-trash"></i>
                                        </a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/admin/order/index.blade.php ENDPATH**/ ?>