

<?php $__env->startSection('main-content'); ?>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title"><?php echo e($customer->first_name.' '.$customer->last_name); ?> Profile</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('customer.profile')); ?>"><?php echo e(Session('customer_name')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <form action="<?php echo e(route('customer.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo e($customer->first_name); ?>" placeholder="First name" name="first_name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo e($customer->last_name); ?>" name="last_name" placeholder="Last name">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email address <span class="text-red">*</span></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e($customer->email); ?>">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone <span class="text-red">*</span></label>
                                    <input type="tel" value="<?php echo e($customer->phone); ?>" name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address <span class="text-red">*</span></label>
                                    <textarea class="form-control" placeholder="Home Address" name="address"><?php echo e($customer->address); ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">City <span class="text-red">*</span></label>
                                    <select name="city" class="form-control">
                                        <option value="">---Select City---</option>
                                        <option <?php echo e($customer->city == 'dhaka'?'selected':''); ?> value="dhaka">Dhaka</option>
                                        <option <?php echo e($customer->city == 'chittagong'?'selected':''); ?> value="chittagong">Chittagong</option>
                                        <option <?php echo e($customer->city == 'rajshahi'?'selected':''); ?> value="rajshahi">Rajshahi</option>
                                        <option <?php echo e($customer->city == 'khulna'?'selected':''); ?> value="khulna">Khulna</option>
                                        <option <?php echo e($customer->city == 'barishal'?'selected':''); ?> value="barishal">Barishal</option>
                                        <option <?php echo e($customer->city == 'mymensingh'?'selected':''); ?> value="mymensingh">Mymensingh</option>
                                        <option <?php echo e($customer->city == 'rongpur'?'selected':''); ?> value="rongpur">Rongpur</option>
                                        <option <?php echo e($customer->city == 'sylhet'?'selected':''); ?> value="sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Postal Code <span class="text-red">*</span></label>
                                    <input type="number" value="<?php echo e($customer->postal_code); ?>" name="postal_code" class="form-control" placeholder="Post Code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success" style="display: block;width: 100%"><h5>Update Profile</h5></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ROW-1 END-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/customer/home/profile.blade.php ENDPATH**/ ?>