

<?php $__env->startSection('main-content'); ?>

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Coupon</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Coupon Create Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('coupon.update',$coupon->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <p>Coupon Code:</p>
                            <input type="text" value="<?php echo e($coupon->code); ?>" class="form-control" id="inputName" name="code" placeholder="Coupon Code">
                        </div>

                        <div class="form-group">
                            <p>Coupon Amount:</p>
                            <input type="number" value="<?php echo e($coupon->amount); ?>" class="form-control" name="amount" placeholder="Discount Amount">
                        </div>

                        <div class="form-group">
                            <p>Order Amount:</p>
                            <input type="number" value="<?php echo e($coupon->order_amount); ?>" class="form-control" name="order_amount" placeholder="Limit Order Amount">
                        </div>

                        <div class="form-group">
                            <p>Coupon Name:</p>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Coupon Status</option>
                                <option <?php echo e($coupon->status == 1 ? 'selected' : ''); ?> value="1">Active</option>
                                <option <?php echo e($coupon->status == 0 ? 'selected' : ''); ?> value="0">Disable</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Create New Coupon</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/admin/coupon/edit.blade.php ENDPATH**/ ?>