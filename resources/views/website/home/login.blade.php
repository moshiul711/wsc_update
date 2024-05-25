

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
    <title>New Password</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('/') }}admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('/') }}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('/') }}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/switcher/demo.css" rel="stylesheet">

</head>


<body class="ltr login-img" style="background-color: white">



<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}admin/assets/images/loader.svg" class="loader-img" alt="Loader">
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
                        <a href="{{ route('home') }}" class="text-center">
                            <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img" alt="">
                        </a>
                    </div>
                    <form action="{{ route('customer.login') }}" method="post">
                        @csrf
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
                                <p class="mb-0"><a href="{{ route('forgot-password') }}" class="text-primary ms-1">Forgot Password?</a></p>
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
<script src="{{ asset('/') }}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}admin/assets/js/sticky.js"></script>



<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}admin/assets/switcher/js/switcher.js"></script>

</body>

</html>
