

<?php $__env->startSection('main-content'); ?>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Reviews</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('customer')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Reviews</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Product</th>
                                <th class="wd-20p border-bottom-0">Review</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img src="<?php echo e(asset($review->product->image)); ?>" alt="">
                                </td>
                                <td><?php echo e($review->product->name); ?></td>
                                <td><?php echo e($review->review); ?></td>
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
<?php echo $__env->make('customer.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/customer/home/review.blade.php ENDPATH**/ ?>