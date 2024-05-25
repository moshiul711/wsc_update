

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
    <title>Forget Password</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/assets/images/logo1.png" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('/') }}website/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('/') }}website/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}website/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('/') }}website/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('/') }}website/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('/') }}website/assets/switcher/demo.css" rel="stylesheet">

</head>


<body class="ltr login-img" style="background-color: white">



<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}website/assets/images/loader.svg" class="loader-img" alt="Loader">
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
                            <img src="{{ asset('/') }}website/assets/images/logo1.png" class="header-brand-img" alt="">
                        </a>
                    </div>



                    <div class="text-center text-danger" >
                        <p class="text-lg text-bold">{{ Session('message') }}</p>
                    </div>

                    <form class="login100-form validate-form" action="{{ route('forgot-password') }}" method="post">
                        @csrf
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email_phone" placeholder="Enter Your Email/Phone" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn btn-primary" type="submit">
                                Check Information
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
<script src="{{ asset('/') }}website/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}website/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}website/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}website/assets/js/sticky.js"></script>



<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}website/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}website/assets/switcher/js/switcher.js"></script>

</body>

</html>
