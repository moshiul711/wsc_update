
<?php $__env->startSection('title'); ?>
    Complete Order - Workstation Communication
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
<div class="row mt-5">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success"><i class="fa fa-check-circle"></i> Thank You for Your Order.</h2>
                <h4 class="text-center py-3">We Will Contact You Very Soon.</h4>
                <h4 class="text-center pb-5">Your order number is <?php echo e($order->order_number); ?></h4>
                
                
                    
                        
                        
                            
                            
                            
                            
                        
                        
                        
                        
                        
                            
                                
                            
                            
                            
                            
                        
                        
                        
                    
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10"><h4 class="text-center">To track the delivery of your order, go to My Account > My Order</h4></div>
                    <div class="col-md-2">
                        <?php if(Session::get('customer_id')): ?>
                        <a href="<?php echo e(route('customer.order')); ?>" class="btn btn-success">View Order</a>
                            <?php else: ?>
                            <a href="" data-bs-target="#smallmodal" data-bs-toggle="modal" class="btn btn-info my-1">View Order</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mission-2023\WSC\resources\views/website/checkout/order-complete.blade.php ENDPATH**/ ?>