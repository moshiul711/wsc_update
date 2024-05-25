

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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/assets/images/logo1.png" />

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
                            <img src="{{ asset('/') }}website/assets/images/logo1.png" class="header-brand-img" alt="">
                        </a>
                    </div>



                    <div class="text-center text-danger" >
                        <x-validation-errors class="mb-4" />
                    </div>

                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" >
                        @csrf
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
                            <p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}" class="text-primary ms-1">Sign In</a></p>
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










































































{{--<x-guest-layout>--}}
    {{--<x-authentication-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<x-authentication-card-logo />--}}
        {{--</x-slot>--}}

        {{--<x-validation-errors class="mb-4" />--}}

        {{--<form method="POST" action="{{ route('register') }}">--}}
            {{--@csrf--}}

            {{--<div>--}}
                {{--<x-label for="name" value="{{ __('Name') }}" />--}}
                {{--<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
            {{--</div>--}}

            {{--<div class="mt-4">--}}
                {{--<x-label for="email" value="{{ __('Email') }}" />--}}
                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
            {{--</div>--}}

            {{--<div class="mt-4">--}}
                {{--<x-label for="password" value="{{ __('Password') }}" />--}}
                {{--<x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
            {{--</div>--}}

            {{--<div class="mt-4">--}}
                {{--<x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
                {{--<x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
            {{--</div>--}}

            {{--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
                {{--<div class="mt-4">--}}
                    {{--<x-label for="terms">--}}
                        {{--<div class="flex items-center">--}}
                            {{--<x-checkbox name="terms" id="terms" required />--}}

                            {{--<div class="ms-2">--}}
                                {{--{!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
                                        {{--'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',--}}
                                        {{--'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',--}}
                                {{--]) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</x-label>--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
                    {{--{{ __('Already registered?') }}--}}
                {{--</a>--}}

                {{--<x-button class="ms-4">--}}
                    {{--{{ __('Register') }}--}}
                {{--</x-button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</x-authentication-card>--}}
{{--</x-guest-layout>--}}
