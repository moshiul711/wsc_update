

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
            </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Update Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('product.update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value)">
                                    <option value=""> -- Select Product Category -- </option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($product->category_id == $category->id?'selected':''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?> <?php echo e('('.count($category->subCategories).' Sub Category)'); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select name="sub_category_id" class="form-control" id="subCategoryId">
                                    <option value=""> -- Select Sub Product Category -- </option>
                                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($product->sub_category_id == $sub_category->id ? 'selected' :''); ?> value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->name); ?> </option>
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
                                        <option <?php echo e($product->brand_id == $brand->id ? 'selected' :''); ?> value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
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
                                        <option <?php echo e($product->unit_id == $unit->id ? 'selected' :''); ?> value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="<?php echo e($product->name); ?>" id="firstName" name="name" placeholder="Product Name" type="text">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Model</label>
                            <div class="col-md-9">
                                <input class="form-control" value="<?php echo e($product->model); ?>" name="model" placeholder="Product Model" type="text">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Replacement Warranty</label>
                            <div class="col-md-9">
                                <select name="replacement" id="" class="form-control">
                                    <option value="">----Product Warranty Period----</option>
                                    <option <?php echo e($product->replacement == '6 Month' ?'selected':''); ?> value="6 Month">6 Month</option>
                                    <option <?php echo e($product->replacement == '1 Year' ?'selected':''); ?> value="1 Year">1 Year</option>
                                    <option <?php echo e($product->replacement == '1.5 Year' ?'selected':''); ?> value="1.5 Year">1.5 Year</option>
                                    <option <?php echo e($product->replacement == '2 Year' ?'selected':''); ?> value="2 Year">2 Year</option>
                                    <option <?php echo e($product->replacement == 'No' ?'selected':''); ?> value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Service Warranty</label>
                            <div class="col-md-9">
                                <select name="service" id="" class="form-control">
                                    <option value="">----Product Service Period----</option>
                                    <option <?php echo e($product->service == '6 Month' ?'selected':''); ?> value="6 Month">6 Month</option>
                                    <option <?php echo e($product->service == '1 Year' ?'selected':''); ?> value="1 Year">1 Year</option>
                                    <option <?php echo e($product->service == '1.5 Year' ?'selected':''); ?> value="1.5 Year">1.5 Year</option>
                                    <option <?php echo e($product->service == '2 Year' ?'selected':''); ?> value="2 Year">2 Year</option>
                                    <option <?php echo e($product->service == 'No' ?'selected':''); ?> value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Status</label>
                            <div class="col-md-9">
                                <select name="status" class="form-control">
                                    <option> -- Select Product Status -- </option>
                                    <option <?php echo e($product->status == 1 ?'selected':''); ?> value="1">Active</option>
                                    <option <?php echo e($product->status == 0 ?'selected':''); ?> value="0">InActive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Featured Status</label>
                            <div class="col-md-9">
                                <select name="featured_status" class="form-control">
                                    <option> -- Select Featured Status -- </option>
                                    <option <?php echo e($product->featured_status == 1 ?'selected':''); ?> value="1">Active</option>
                                    <option <?php echo e($product->featured_status == 0 ?'selected':''); ?> value="0">InActive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Stock</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" name="stock" value="<?php echo e($product->stock); ?>" placeholder="Product Stock" type="int">
                                <input class="form-control" id="" name="code" value="<?php echo e($product->code); ?>" placeholder="Product Code" type="hidden">
                                
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" value="<?php echo e($product->cost); ?>" name="costing_price" placeholder="Costing Price" type="number">
                                    <input class="form-control" value="<?php echo e($product->regular_price); ?>" name="regular_price" placeholder="Regular Price" type="number">
                                    <input class="form-control" value="<?php echo e($product->offer_price); ?>" name="offer_price" placeholder="Offer Price" type="number">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" name="short_description" placeholder="Category Description"><?php echo e($product->short_description); ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="summernote" name="long_description" placeholder="Category Description"><?php echo e($product->long_description); ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Feature Image</label>

                            <div class="col-md-9">
                                <img src="<?php echo e(asset($product->image)); ?>" height="150" width="180" style="padding: 5px" alt="">
                                <input class="form-control" id="email" name="image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Other Image</label>
                            <div class="col-md-9">
                                <?php $__currentLoopData = $product->otherImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset($otherImage->image)); ?>" height="80" width="100" class="img img-thumbnail" alt="No Image Found">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <input class="form-control" id="" multiple name="other_image[]" type="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" style="float: right" type="submit">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wsc\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>