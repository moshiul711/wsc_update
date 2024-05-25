<div class="modal" id="cart_modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="table-responsive" id="cart_modal_products">
                    <table class="table table-vcenter text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th>Preview</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="<?php echo e(route('cart.update',$item->rowId)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo e(asset($item->options->image)); ?>" alt="" class="cart-img">
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('product.detail',[$item->id,$item->name])); ?>" style="color: black">
                                            <?php echo e(substr($item->name,0,30)); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e($item->price); ?></td>
                                    <td>
                                        <input id="updateCartQty" data-id="<?php echo e($item->rowId); ?>" type="number" required name="qty" min="1" max="<?php echo e($item->options->max); ?>" class="form-control text-center" value="<?php echo e($item->qty); ?>" >
                                    </td>
                                    <td>
                                        <?php echo e(round($item->qty * $item->price)); ?>

                                    </td>
                                    <td>
                                        
                                        <a id="remove_cart_product" data-id="<?php echo e($item->rowId); ?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Continue Shopping</button>
                <a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/website/cartModal.blade.php ENDPATH**/ ?>