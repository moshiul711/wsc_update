

<?php $__env->startSection('main-content'); ?>
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Courier Lists</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Sl.</th>
                                <th class="wd-15p border-bottom-0">Courier Name</th>
                                <th class="wd-15p border-bottom-0">Courier Charge</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $couriers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($courier->name); ?></td>
                                    <td><?php echo e($courier->charge); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('courier.edit',$courier->id)); ?>" class="btn btn-info" title="Sub Category Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?php echo e(route('courier.delete',$courier->id)); ?>" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Courier Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/admin/courier/manage.blade.php ENDPATH**/ ?>