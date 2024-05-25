

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid py-5">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title text-center">Product Detail information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset($product->image)); ?>" height="300" width="300" alt="No Image Found">
                                <p class="text-muted text-center">Fig: <?php echo e($product->name); ?></p>

                                <?php $__currentLoopData = $product->otherImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset($otherImage->image)); ?>" class="p-2" alt="" height="100" width="100"/>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <p class="text-muted text-center">Fig: Other Images</p>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom">
                                        <tr>
                                            <th>Product ID</th>
                                            <td><?php echo e($product->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Name</th>
                                            <td><?php echo e($product->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Code</th>
                                            <td><?php echo e($product->code); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Category</th>
                                            <td><?php echo e($product->category->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Sub Category</th>
                                            <td><?php echo e($product->subCategory->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Brand</th>
                                            <td><?php echo e($product->brand->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Price</th>
                                            <td> <b>Regular Price</b> <?php echo e($product->regular_price); ?> , <b>Offer Price</b> <?php echo e($product->offer_price); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Stock Amount</th>
                                            <td><?php echo e($product->stock); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Status</th>
                                            <td>
                                                <?php if($product->status==1): ?>
                                                    <button class="btn btn-success btn-sm">Active</button>
                                                <?php else: ?>
                                                    <button class="btn btn-danger btn-sm">InActive</button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Product Sales Count</th>
                                            <td><?php echo e($product->sales_count); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Total View</th>
                                            <td><?php echo e($product->hit_count); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Short Description</th>
                                            <td><?php echo e($product->short_description); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Product Long Description</th>
                                            <td><?php echo $product->long_description; ?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/admin/product/detail.blade.php ENDPATH**/ ?>