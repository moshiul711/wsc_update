

<?php $__env->startSection('main-content'); ?>

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Sub Category Edit Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('sub-category.update',$subCategory->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <p>Sub Category Name</p>
                            <input type="text" class="form-control" id="inputName" value="<?php echo e($subCategory->name); ?>" name="name" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <p>Choose Category Name:</p>
                            <select name="category_id" id="" class="form-control">
                                <option value="">Select Category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $subCategory->category_id ? 'selected':''); ?>><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <p>Choose Sub Category Status</p>
                            <select name="status" id="" class="form-control">
                                <option value="active"<?php echo e($subCategory->status == 'active' ? 'selected':''); ?>>Active</option>
                                <option value="inactive" <?php echo e($subCategory->status == 'inactive' ? 'selected':''); ?>>In Active</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Update Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/admin/sub_category/edit.blade.php ENDPATH**/ ?>