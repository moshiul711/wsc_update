

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Details</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Create</li>
            </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Create Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value)">
                                    <option value=""> -- Select Product Category -- </option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?> <?php echo e('('.count($category->subCategories).' Sub Category)'); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select name="sub_category_id" class="form-control" id="subCategoryId">
                                    <option value=""> -- Select Sub Product Category -- </option>
                                    <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select name="brand_id" class="form-control">
                                    <option value=""> -- Select Product Brand -- </option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select name="unit_id" class="form-control">
                                    <option value=""> -- Select Product Unit -- </option>
                                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" name="name" placeholder="Product Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Model</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" name="model" placeholder="Product Code" type="text">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Replacement Warranty</label>
                            <div class="col-md-9">
                                <select name="replacement" id="" class="form-control">
                                    <option value="">----Product Warranty Period----</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="1.5 Year">1.5 Year</option>
                                    <option value="2 Year">2 Year</option>
                                    <option value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Service Warranty</label>
                            <div class="col-md-9">
                                <select name="service" id="" class="form-control">
                                    <option value="">----Product Service Period----</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="1.5 Year">1.5 Year</option>
                                    <option value="2 Year">2 Year</option>
                                    <option value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" name="costing_price" placeholder="Costing Price" type="number">
                                    <input class="form-control" name="regular_price" placeholder="Regular Price" type="number">
                                    <input class="form-control" name="offer_price" placeholder="Offer Price" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" name="stock" placeholder="Stock Amount" type="number">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Status</label>
                            <div class="col-md-9">
                                <select name="status" class="form-control">
                                    <option> -- Select Product Status -- </option>
                                    <option value="1">Active</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Featured Status</label>
                            <div class="col-md-9">
                                <select name="featured_status" class="form-control">
                                    <option> -- Select Featured Status -- </option>
                                    <option value="1">Active</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" name="short_description" placeholder="Category Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="summernote" name="long_description" placeholder="Category Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Feature Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" name="image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Other Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" multiple name="other_image[]" type="file">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mission-2023\WSC\resources\views/admin/product/create.blade.php ENDPATH**/ ?>