

<?php $__env->startSection('main-content'); ?>

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Slider Image Update Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('slider.update',$slider->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <img src="<?php echo e(asset($slider->image)); ?>" class=" img img-thumbnail" height="300" width="300" alt="">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control"  name="image" >
                        </div>

                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">update Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/admin/slider/edit.blade.php ENDPATH**/ ?>