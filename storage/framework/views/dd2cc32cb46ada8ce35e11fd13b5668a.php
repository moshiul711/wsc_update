

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
    <title>New Password</title>

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
                        <a href="<?php echo e(route('home')); ?>" class="text-center">
                            <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img" alt="">
                        </a>
                    </div>
                    <form action="<?php echo e(route('customer.login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="email" name="email" placeholder="Email" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                <input class="input100" type="password" name="password" placeholder="Password" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>
                            </div>
                            <div class="text-end pt-1">
                                <p class="mb-0"><a href="<?php echo e(route('forgot-password')); ?>" class="text-primary ms-1">Forgot Password?</a></p>
                            </div>

                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="#" data-bs-target="#registration" data-bs-toggle="modal" class="text-primary ms-1">Create an Account</a></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-primary" type="submit" style="display: block; width: 100%">Login</button>
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
<?php /**PATH D:\Xampp\htdocs\bdTechCom\resources\views/website/home/login.blade.php ENDPATH**/ ?>