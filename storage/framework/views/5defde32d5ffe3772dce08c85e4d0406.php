

<!doctype html>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- TITLE -->
    <title>Workstation communication Limited</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(asset('/')); ?>website/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/')); ?>website/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(asset('/')); ?>website/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="<?php echo e(asset('/')); ?>website/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>website/assets/switcher/demo.css" rel="stylesheet">

</head>


<body class="ltr login-img" style="background-color: white">



<!-- GLOBAL-LOADER -->

    


<!-- Switcher Icon-->



<!-- PAGE -->
<div class="page">
    <div>
        <!-- CONTAINER OPEN -->

        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                    <div class="col col-login mx-auto text-center mb-5">
                        <a href="<?php echo e(route('home')); ?>" class="text-center">
                            <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" class="header-brand-img" alt="">
                        </a>
                    </div>

                    <div class="text-center text-danger" >
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>

                    <form class="login100-form validate-form" action="<?php echo e(route('login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="email" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
                        </div>
                        
                        
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn btn-primary" type="submit">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                
                    
                        
                            
                        
                        
                            
                        
                        
                            
                        
                    
                
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
<!-- End PAGE -->


<!-- JQUERY JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/sticky.js"></script>



<!-- COLOR THEME JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/switcher/js/switcher.js"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
</html>
<?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/auth/login.blade.php ENDPATH**/ ?>