
<?php $__env->startSection('title'); ?>
    Checkout - Workstation Communication
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Checkout</li>
            </ol>
        </nav>
    </div>
    <!-- PAGE-HEADER END -->
    <?php if(Cart::Count()>0): ?>
        <form action="<?php echo e(route('order-place')); ?>" method="post">
            <?php echo csrf_field(); ?>
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-7 col-md-7">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Billing Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name <span class="text-red">*</span></label>
                                    <?php if(isset($customer->first_name)): ?>
                                    <input type="text" class="form-control" required value="<?php echo e($customer->first_name); ?>" placeholder="First name" name="first_name">
                                    <?php else: ?>
                                    <input type="text" class="form-control" required  placeholder="First name" name="first_name">
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                                
                                    
                                    
                                        
                                    
                                        
                                    
                                
                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email address <span class="text-red">*</span></label>
                                    <?php if(isset($customer->email)): ?>
                                    <input type="email" class="form-control" required placeholder="Email" name="email" value="<?php echo e($customer->email); ?>">
                                    <?php else: ?>
                                        <input type="email" class="form-control" required placeholder="Email" name="email">
                                        <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone <span class="text-red">*</span></label>
                                    <?php if(isset($customer->phone)): ?>
                                        <input type="tel" value="<?php echo e($customer->phone); ?>" name="phone" required class="form-control" placeholder="Phone">
                                    <?php else: ?>
                                        <input type="tel" name="phone" required class="form-control" placeholder="Phone">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">City <span class="text-red">*</span></label>
                                    <?php if(isset($customer->city)): ?>
                                        <select name="city" class="form-control" required required onchange="deliveryFee(this.value)">
                                            <option value="">---Select City---</option>
                                            <option <?php echo e($customer->city == 'dhaka'?'selected':''); ?> value="dhaka">Dhaka</option>
                                            <option <?php echo e($customer->city == 'chittagong'?'selected':''); ?> value="chittagong">Chittagong</option>
                                            <option <?php echo e($customer->city == 'rajshahi'?'selected':''); ?> value="rajshahi">Rajshahi</option>
                                            <option <?php echo e($customer->city == 'khulna'?'selected':''); ?> value="khulna">Khulna</option>
                                            <option <?php echo e($customer->city == 'barishal'?'selected':''); ?> value="barishal">Barishal</option>
                                            <option <?php echo e($customer->city == 'mymensingh'?'selected':''); ?> value="mymensingh">Mymensingh</option>
                                            <option <?php echo e($customer->city == 'rongpur'?'selected':''); ?> value="rongpur">Rongpur</option>
                                            <option <?php echo e($customer->city == 'sylhet'?'selected':''); ?> value="sylhet">Sylhet</option>
                                        </select>
                                    <?php else: ?>
                                        <select name="city" class="form-control" required required onchange="deliveryFee(this.value)">
                                            <option value="">---Select City---</option>
                                            <option value="dhaka">Dhaka</option>
                                            <option value="chittagong">Chittagong</option>
                                            <option value="rajshahi">Rajshahi</option>
                                            <option value="khulna">Khulna</option>
                                            <option value="barishal">Barishal</option>
                                            <option value="mymensingh">Mymensingh</option>
                                            <option value="rongpur">Rongpur</option>
                                            <option value="sylhet">Sylhet</option>
                                        </select>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Delivery Address <span class="text-red">*</span></label>
                                    <?php if(isset($customer->address)): ?>
                                        <textarea class="form-control" placeholder="Home Address" name="address" required><?php echo e($customer->address); ?></textarea>
                                    <?php else: ?>
                                        <textarea class="form-control" placeholder="Home Address" name="address" required></textarea>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                                
                                    
                                    
                                
                            

                            
                                
                                    
                                    
                                
                            



                            
                                
                                    
                                    
                                
                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Additional Information</label>
                                    <textarea class="form-control" rows="2" placeholder="Any Other Additional Information" name="additional_info"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Payment Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-pay">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <label>
                                        <input name="payment" required type="radio" value="cod" checked>
                                        <img src="<?php echo e(asset('/')); ?>website/assets/icons/cod_icon.webp" alt="" >
                                    </label>
                                    <label>
                                        <input name="payment" required type="radio" value="online">
                                        <img src="<?php echo e(asset('/')); ?>website/assets/icons/cards_icon.webp" alt="" >
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-5 col-md-5">

                <div class="card cart">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Your Order(s)</h3>
                    </div>
                    <div class="card-body" >
                        <div id="checkout-cart">
                            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="d-md-flex">
                                    <div class="d-flex py-2">
                                        <img class="img-fluid avatar-xl border p-0 br-7" src="<?php echo e(asset($item->options->image)); ?>" alt="img">
                                        <div class="ms-3 mt-2">
                                            <h4 class="mb-1 fw-semibold fs-14"><a href="<?php echo e(route('product.detail',[$item->id,$item->name])); ?>"><?php echo e($item->name); ?></a></h4>
                                            <p class="fs-12 fw-300 lh-1 mb-0">Price: <span class="text-green"><?php echo e($item->price); ?></span></p>
                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: <?php echo e($item->qty); ?></span>
                                            
                                        </div>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <span class="me-4 my-auto fs-16 fw-semibold">Tk.<?php echo e($item->qty*$item->price); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <table class="table mt-5">
                                <tr>
                                    <td class="border-top-0">Sub Total</td>
                                    <td class="text-end border-top-0">Tk. <?php echo e($subTotal = round(Cart::subtotal())); ?></td>
                                </tr>
                                <tr>
                                    <td class="border-top-0">Discount</td>
                                    <?php if(Session::get('coupon')): ?>
                                        <td class="text-end border-top-0"><?php echo e($discount = Session::get('coupon')); ?></td>
                                    <?php else: ?>
                                        <td class="text-end border-top-0"><?php echo e($discount = 0); ?></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td class="border-top-0">Shipping</td>
                                    <td class="text-end border-top-0" id="deliveryCharge">Tk.
                                        <?php if(Cart::count() < 1): ?>
                                            <?php echo e($delivery = 0); ?>

                                        <?php else: ?>
                                            <?php echo e(Session('delivery') ? $delivery =Session('delivery') : $delivery = 0); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-20 border-top-0">Total</td>
                                    <?php ($total = ($subTotal)); ?>
                                    <td class="text-end fs-20 border-top-0">Tk. <?php echo e($payable = round($subTotal+$delivery - $discount)); ?></td>
                                </tr>
                            </table>
                        </div>
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                <a href="<?php echo e(route('privacy')); ?>" target="_blank">privacy policy</a>.
                            </p>

                            <input type="checkbox"  name="terms"  id="terms" required />
                            I have read and agree to the website <a href="<?php echo e(route('terms')); ?>"  target="_blank">terms and conditions</a> & <a href="<?php echo e(route('refund')); ?>"  target="_blank">Return & Refund Policy</a>
                    </div>
                    <?php
                    Session::put('order_total',$subTotal);
                    Session::put('delivery_charge',$delivery);
                    Session::put('payment_amount',$payable);
                    Session::put('discount',$discount);
                    ?>
                    <div class="card-footer text-end">
                        <button type="submit" name="place_order" value="place_order" class="btn btn-success" style="display: block;width: 100%">Place Order</button>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
        <!-- ROW-1 CLOSED -->
        </form>
    <?php else: ?>
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-center text-danger-gradient">Empty Cart ! There is no product found in the cart</p>
                        <span>
                        
                    </span>
                        <div class="text-center">
                            <a href="<?php echo e(route('home')); ?>" class="btn btn-danger-gradient">Go Back To Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mission-2023\WSC\resources\views/website/checkout/index.blade.php ENDPATH**/ ?>