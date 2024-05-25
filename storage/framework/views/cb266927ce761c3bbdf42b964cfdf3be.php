

<?php $__env->startSection('main-content'); ?>

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Unit Edit Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('unit.update',$unit->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <p>Unit Name: </p>
                            <input type="text" class="form-control" id="inputName" value="<?php echo e($unit->name); ?>" name="name" placeholder="Unit Name">
                        </div>

                        <div class="form-group">
                            <p>Select Unit Status: </p>
                            <select name="status" id="" class="form-control">
                                <option value="active"<?php echo e($unit->status == 'active' ? 'selected':''); ?>>Active</option>
                                <option value="inactive" <?php echo e($unit->status == 'inactive' ? 'selected':''); ?>>In Active</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Update Unit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/admin/unit/edit.blade.php ENDPATH**/ ?>