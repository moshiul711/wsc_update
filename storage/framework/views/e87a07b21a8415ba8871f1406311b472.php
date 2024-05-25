

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Edit -> <?php echo e($order->order_number); ?></h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="card shadow-lg">
            <form action="<?php echo e(route('admin.update-order',$order->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <p class="py-2 text-lg-bold text-info-gradient">Order Information.......</p>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Order Date<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->order_date); ?>" name="order_date" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Order Status<span class="text-red">*</span></label>
                                <select name="order_status" class="form-control">
                                    <option value="">---Select Order Status---</option>
                                    <option <?php echo e($order->order_status == 'pending'?'selected':''); ?> value="pending">Pending</option>
                                    <option <?php echo e($order->order_status == 'processing'?'selected':''); ?> value="processing">Processing</option>
                                    <option <?php echo e($order->order_status == 'complete'?'selected':''); ?> value="complete">Complete</option>
                                    <option <?php echo e($order->order_status == 'cancel'?'selected':''); ?> value="cancel">Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Order Total<span class="text-red">*</span></label>
                                <input type="text" class="form-control" readonly value="<?php echo e($order->order_total); ?>" name="order_total" >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Delivery Charge<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->delivery_charge); ?>" name="delivery_charge" >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Discount<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->discount); ?>" name="discount" >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Payable Amount<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->payment_amount); ?>" name="payment_amount" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Payment_method<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->payment_method=='cod'?'Cash On Delivery':'Online Payment'); ?>" name="payment_method" readonly>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Delivery Media<span class="text-red">*</span></label>
                                <select name="courier_id" class="form-control">
                                    <option value="">---Select Delivery Media---</option>
                                    <?php $__currentLoopData = $couriers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($order->courier_id == $courier->id ? 'selected':''); ?> value="<?php echo e($courier->id); ?>"><?php echo e($courier->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <p class="py-2 text-lg-bold text-info-gradient">Delivey Information.......</p>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Customer Name<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->delivery->first_name.' '.$order->delivery->last_name); ?>" name="first_name" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->delivery->email); ?>" name="email" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone<span class="text-red">*</span></label>
                                <input type="text" class="form-control" value="<?php echo e($order->delivery->phone); ?>" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">City<span class="text-red">*</span></label>
                                <select name="city" class="form-control">
                                    <option value="">---Select City---</option>
                                    <option <?php echo e($order->delivery->city == 'dhaka'?'selected':''); ?> value="dhaka">Dhaka</option>
                                    <option <?php echo e($order->delivery->city == 'chittagong'?'selected':''); ?> value="chittagong">Chittagong</option>
                                    <option <?php echo e($order->delivery->city == 'rajshahi'?'selected':''); ?> value="rajshahi">Rajshahi</option>
                                    <option <?php echo e($order->delivery->city == 'khulna'?'selected':''); ?> value="khulna">Khulna</option>
                                    <option <?php echo e($order->delivery->city == 'barishal'?'selected':''); ?> value="barishal">Barishal</option>
                                    <option <?php echo e($order->delivery->city == 'mymensingh'?'selected':''); ?> value="mymensingh">Mymensingh</option>
                                    <option <?php echo e($order->delivery->city == 'rongpur'?'selected':''); ?> value="rongpur">Rongpur</option>
                                    <option <?php echo e($order->delivery->city == 'sylhet'?'selected':''); ?> value="sylhet">Sylhet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Delivery Address<span class="text-red">*</span></label>
                                <textarea name="address" class="form-control"><?php echo e($order->delivery->address); ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Additional Info<span class="text-red">*</span></label>
                                <textarea name="additional_info" class="form-control" placeholder="Any Other Additional Information"><?php echo e($order->delivery->additional_info); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success form-control" type="submit" style="display: block; width: 100%">Update Order Info</button>
                </div>
            </form>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/admin/order/orderEdit.blade.php ENDPATH**/ ?>