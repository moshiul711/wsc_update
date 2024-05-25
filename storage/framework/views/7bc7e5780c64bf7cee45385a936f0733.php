
<?php $__env->startSection('title'); ?>
    Oops! Some error has occured, Requested page not found!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="page-content error-page error2">
                    <div class="container text-center">
                        <div class="error-template">
                            <h2 class="text-center mb-2 text-danger">404<span class="fs-20">error</span></h2>
                            <h5 class="error-details text-center text-danger">
                                Oops! Some error has occured, <b>Requested product not found!</b>
                            </h5>
                            <div class="text-center">
                                <a class="btn btn-success mt-5 mb-5" href="<?php echo e(route('home')); ?>"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/website/home/error.blade.php ENDPATH**/ ?>