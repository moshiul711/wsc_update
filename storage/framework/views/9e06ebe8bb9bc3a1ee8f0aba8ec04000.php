

<?php $__env->startSection('main-content'); ?>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    
        
            
                
                    
                        
                            
                            
                            
                                                        
                                                            
                                                            
                                
                            
                        
                        
                            
                                
                            
                        
                    
                
            
        
        
            
                
                    
                        
                            
                            
                            
                                                        
                                                            
                                                            
                                
                            
                        
                        
                            
                                
                            
                        
                    
                
            
        
        
            
                
                    
                        
                            
                            
                            
                                                        
                                                            
                                                            
                                
                            
                        
                        
                            
                                
                            
                        
                    
                
            
        
        
            
                
                    
                        
                            
                            
                            
                                                        
                                                            
                                                            
                                
                            
                        
                        
                            
                                
                            
                        
                    
                
            
        
    
    <!-- ROW-1 END-->

    <!-- ROW-4 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card product-sales-main">
                <div class="card-header border-bottom">
                    <h3 class="card-title mb-0">Order List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead class="table-head">
                            <tr>
                                <th class="wd-15p border-bottom-0">##</th>
                                <th class="wd-15p border-bottom-0">Total</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Amount</th>
                                <th class="wd-20p border-bottom-0">Payment</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($order->order_total); ?></td>
                                    <td><?php echo e($order->order_date); ?></td>
                                    <td>
                                        <?php if($order->order_status=='pending'): ?>
                                            <button class="btn btn-info-gradient">Pending</button>
                                        <?php elseif($order->order_status=='processing'): ?>
                                            <button class="btn btn-primary-gradient">Processing</button>
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
                                    <td>
                                        <a href="<?php echo e(route('customer.order.detail', $order->order_number )); ?>" class="btn btn-success-gradient">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- ROW-4 END -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/customer/home/index.blade.php ENDPATH**/ ?>