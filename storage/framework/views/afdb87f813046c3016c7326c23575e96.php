

<!doctype html>
<html lang="en" dir="ltr"> <!-- This "custom-app.blade.php" master page is used only for "custom" page content present in "views/livewire" Ex: login, 404 -->

<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Bangladesh Technology Company</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(asset('/')); ?>admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(asset('/')); ?>admin/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/')); ?>admin/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(asset('/')); ?>admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="<?php echo e(asset('/')); ?>admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>admin/assets/switcher/demo.css" rel="stylesheet">

</head>


<body class="ltr login-img" style="background-color: white">



<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="<?php echo e(asset('/')); ?>admin/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>

<!-- Switcher Icon-->



<!-- PAGE -->
<div class="page">
    <div>
        <!-- CONTAINER OPEN -->

        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                    <div class="col col-login mx-auto text-center mb-5">
                        <a href="index.html" class="text-center">
                            <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img" alt="">
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

                    <form class="login100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>" >
                        <?php echo csrf_field(); ?>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="name" placeholder="Full name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="mdi mdi-account" aria-hidden="true"></i>
										</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
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

                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" id="" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn btn-primary" type="submit">Register</button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0">Already have account?<a href="<?php echo e(route('login')); ?>" class="text-primary ms-1">Sign In</a></p>
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
<script src="<?php echo e(asset('/')); ?>admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo e(asset('/')); ?>admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo e(asset('/')); ?>admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="<?php echo e(asset('/')); ?>admin/assets/js/sticky.js"></script>



<!-- COLOR THEME JS -->
<script src="<?php echo e(asset('/')); ?>admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="<?php echo e(asset('/')); ?>admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="<?php echo e(asset('/')); ?>admin/assets/switcher/js/switcher.js"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
</html>











































































    
        
            
        

        

        
            

            
                
                
            

            
                
                
            

            
                
                
            

            
                
                
            

            
                
                    
                        
                            

                            
                                
                                        
                                        
                                
                            
                        
                    
                
            

            
                
                    
                

                
                    
                
            
        
    

<?php /**PATH D:\Xampp\htdocs\bangladeshTechCom\resources\views/auth/register.blade.php ENDPATH**/ ?>