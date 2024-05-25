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
    <title>Workstation Communication Limited</title>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .colored-toast.swal2-icon-success {
            background-color: #a5dc86 !important;
        }

        .colored-toast.swal2-icon-error {
            background-color: #f27474 !important;
        }

        .colored-toast.swal2-icon-warning {
            background-color: #f8bb86 !important;
        }

        .colored-toast.swal2-icon-info {
            background-color: #3fc3ee !important;
        }

        .colored-toast.swal2-icon-question {
            background-color: #87adbd !important;
        }

        .colored-toast .swal2-title {
            color: white;
        }

        .colored-toast .swal2-close {
            color: white;
        }

        .colored-toast .swal2-html-container {
            color: white;
        }

    </style>

</head>

<body class="ltr app sidebar-mini">



<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}website/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="{{ route('home') }}">
                        <img src="{{ asset('/') }}website/assets/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('/') }}website/assets/images/logo.png" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->
                    <div class="dropdown d-sm-block d-md-none d-xl-block d-none  d-flex shopping-cart">
                        <a href="#">
                            @if(!Session::get('customer_id'))
                                <h6 class="text-white">
                                    <i class="fa fa-location-arrow"></i> Deliver To <br><b>Bangladesh</b>
                                </h6>
                            @else
                                <h6 class="text-white">
                                    <i class="fa fa-location-arrow"></i> Deliver To <br><b>{{ Session('customer_city') }}</b>
                                </h6>
                            @endif
                        </a>
                    </div>

                    <div class="main-header-center ms-3 d-none d-xl-block">
                        <form action="{{ route('product.search') }}" style="text-align: center">
                            @csrf
                            <input class="form-control" name="search" placeholder="Search for results..." type="search">
                            <button class="btn" type="submit">
                                <img src="{{ asset('/') }}website/assets/icons/search-btn.png" height="25px" width="25px" alt="">
                            </button>
                        </form>
                    </div>

                    {{--Medium Search--}}
                    <div class="d-flex order-lg-2 ms-auto header-right-icons" style="text-align: center">
                        <div class="dropdown d-xl-none d-md-block d-none" style="text-align: center">
                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                <img src="{{ asset('/') }}website/assets/icons/search-btn.png" height="25px" width="25px" alt="">                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-start" style="text-align: center">
                                <div class=" header-search dropdown-menu-start">
                                    <form action="{{ route('product.search') }}">
                                        @csrf
                                        <div class="input-group w-100 p-2">
                                            <input type="text" class="form-control" name="search" placeholder="Search Product" required>
                                            <button class="input-group-text btn btn-success" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        {{--shopping cart--}}
                        <div class="dropdown  d-flex shopping-cart pe-3">
                            <a href="javascript:void(0);" class="nav-link icon text-center"  data-bs-toggle="dropdown" aria-expanded="false">

                                <i class="fa fa-shopping-cart text-white"></i>

                                {{--<img src="{{ asset('/') }}website/assets/icons/cart.png" alt="">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C11,18.8954468,10.1045532,18,9,18z M9,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C10,20.5523071,9.5523071,21,9,21z M17,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C19,18.8954468,18.1045532,18,17,18z M17,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C18,20.5523071,17.5523071,21,17,21z M19.4985352,12.0502319l1.9848633-7.4213257c0.0111694-0.0419312,0.0167847-0.085083,0.0167847-0.128479C21.5002441,4.2241211,21.2763062,4.000061,21,4H5.9198608L5.4835205,2.371582C5.4249268,2.1530151,5.2268677,2.0009766,5.0005493,2.0009766H3.5048218C3.5031128,2.0009766,3.501709,2,3.5,2C3.223877,2,3,2.223877,3,2.5S3.223877,3,3.5,3v0.0009766L4.6162109,3l2.579834,9.6288452C7.2546387,12.8477783,7.453064,13,7.6796875,13H11h6.8603516H19c0.8284302,0,1.5,0.6715698,1.5,1.5S19.8284302,16,19,16H5c-0.276123,0-0.5,0.223877-0.5,0.5S4.723877,17,5,17h14c1.3807373,0,2.5-1.1192627,2.5-2.5C21.5,13.2900391,20.6403809,12.2813721,19.4985352,12.0502319z M18.4761963,12h-0.6158447H11H8.0634766L6.1878052,5h14.1608276L18.4761963,12z"/></svg>--}}
                                <span class="badge bg-info header-badge bg-red" >{{ Cart::count() }}</span>
                            </a>
                            @if(Cart::count() >0)
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-15 text-dark">Shopping Cart</h6>
                                            <div class="ms-auto">
                                                <span class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill"> <a href="{{ route('cart.destroy') }}" class="showall-text text-white">Remove All</a> </span>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach(Cart::content() as $item)
                                        <div class="header-dropdown-list cart-menu ps4 overflow-hidden">
                                            <a class="dropdown-item d-flex p-4" href="">
                                                <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="{{ asset($item->options->image) }}"></span>
                                                <div class="wp-60 cart-desc mt-1">
                                                    <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">{{ $item->name }}</p>
                                                    <p class="fs-12 fw-300 lh-1 mb-0">Price: <span class="text-green">{{ $item->price }}</span></p>
                                                    <span class="fs-12 fw-300 lh-1 mb-0">Quantity: {{ $item->qty }}</span>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                {{ round($item->price*$item->qty) }}
                                            </span>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    <div class="dropdown-divider m-0"></div>
                                    
                                    <div class="dropdown-divider m-0"></div>
                                    <div class="text-center p-3">
                                        <a href="{{ route('cart.show') }}" class="btn btn-primary">
                                            <img src="{{ asset('/') }}website/assets/icons/cart.png" alt="">
                                            View Cart
                                        </a>
                                        @if(Session::get('customer_id'))
                                            <a href="{{ route('checkout') }}" class="btn btn-danger right">
                                                <img src="{{ asset('/') }}website/assets/icons/checkout.png" alt="">
                                                Checkout
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>


                        <!-- SEARCH -->
                        <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="dropdown d-md-none d-flex">
                                        {{--<a href="#" class="nav-link icon" data-bs-toggle="dropdown">--}}
                                        {{--<img src="{{ asset('/') }}website/assets/icons/search-btn.png" alt="">                                        </a>--}}
                                        <div class=" header-search dropdown-menu-start">
                                            <form action="{{ route('product.search') }}">
                                                @csrf
                                                <div class="input-group w-75 p-2">
                                                    <input type="text" class="form-control" name="search" placeholder="Search Product" required>
                                                    <button class="input-group-text btn btn-success" type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="dropdown  d-flex shopping-cart pe-5 py-2">
                                        <a href="#" data-bs-target="#refer" data-bs-toggle="modal">
                                            <h6 class="text-white">Refer <br><b>& Win</b> </h6>
                                        </a>
                                    </div>

                                    @if(!Session::get('customer_id'))
                                        <div class="dropdown d-md-flex profile-1 pe-5">
                                            <a href="#" data-bs-target="#smallmodal" data-bs-toggle="modal">
                                                <h6 class="text-white">Hello <br><b>User</b> </h6>
                                                {{--<span>--}}
                                                {{--<img src="{{ asset('/') }}website/assets/icons/profile.png" alt="profile-user" class="avatar  profile-user brround cover-image">--}}
                                                {{--</span>--}}
                                            </a>
                                        </div>
                                    @else
                                        {{--with login--}}

                                        <div class="dropdown d-md-flex profile-1" >
                                            <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">

                                                <h6 class="text-white">Hello <br><b>{{ Str::limit(Session('customer_name'),8) }}</b> </h6>
                                                <div class="text-center p-1 d-flex d-lg-none-max">
                                                    <h6 class="mb-0 text-bold text-white" id="profile-heading"></h6>
                                                </div>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('customer.profile') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z"/></svg>
                                                    {{Session('customer_name')}}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('customer') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/></svg>
                                                    DashBoard
                                                </a>
                                                <a class="dropdown-item" href="{{ route('customer.logout') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z"/></svg>
                                                    Log out
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Profile -->
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="sticky" >
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header" >
                    <a class="header-brand1" href="{{ route('home') }}">
                        <img src="{{ asset('/') }}website/assets/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('/') }}website/assets/images/logo1.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="{{ asset('/') }}website/assets/images/logo1.png" class="header-brand-img light-logo" alt="logo">
                        <img src="{{ asset('/') }}website/assets/images/logo.png" class="header-brand-img light-logo1" alt="logo">
                    </a><!-- LOGO -->
                </div>

                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                        </svg>
                    </div>
                    <ul class="side-menu">
                        <li class="slide">
                            <a class="side-menu__item"  href="{{ route('customer') }}" title="Dashboard">
                                <img src="{{ asset('/')}}website/assets/icons/dash.png " alt="">
                                <span class="side-menu__label px-2">Dashboard</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  href="{{ route('customer.profile') }}" title="Profile">
                                <img src="{{ asset('/')}}website/assets/icons/pp.png " alt="">
                                <span class="side-menu__label px-2">Profile</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  href="{{ route('customer.order') }}" title="Orders">
                                {{--{{ route('customer.order') }}--}}
                                <img src="{{ asset('/')}}website/assets/icons/order.png " alt="">
                                <span class="side-menu__label px-2">Orders</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  href="{{ route('customer.reviews') }}" title="Reviews">
                                <img src="{{ asset('/')}}website/assets/icons/review.png " alt="">
                                <span class="side-menu__label px-2">Reviews</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  href="{{ route('customer.change.password') }}" title="Change Password">
                                <img src="{{ asset('/')}}website/assets/icons/password.png " alt="">
                                <span class="side-menu__label px-2">Change Password</span>
                            </a>
                        </li>
                </div>
            </div>


        </div>
        <!--/APP-SIDEBAR-->
        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container">
                    <!--slider-->
                    @if (session('message'))
                        <script>
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-right',
                                iconColor: 'white',
                                customClass: {
                                    popup: 'colored-toast'
                                },
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true
                            })
                            Toast.fire({
                                icon: 'success',
                                title: "{{ session('message') }}"
                            })
                        </script>

                    @elseif(session('logout'))
                        <script>
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-right',
                                iconColor: 'white',
                                customClass: {
                                    popup: 'colored-toast'
                                },
                                showConfirmButton: false,
                                timer: 5000,
                                timerProgressBar: true
                            })
                            Toast.fire({
                                icon: 'error',
                                title: "{{ session('logout') }}"
                            })
                        </script>

                        @elseif(session('error'))
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Something went wrong!",
                                footer: '<a href="#">Why do I have this issue?</a>'
                            })
                        </script>

                    @endif

                @yield('main-content')
                <!--products-->

                    <div class="row">
                        <div class="col-12">
                            {{--<iframe defer src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.1391864629985!2d90.39105636953198!3d23.869868725058065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41bbb5acb1f%3A0xeb8a49fa5d1d1637!2sWorkstation%20Communication!5e0!3m2!1sen!2sbd!4v1702115489464!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

                            <div class="card">
                                <div class="card-body">
                                    <div class="top-footer">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <h6>About</h6>
                                                <p>
                                                    Workstation Communication Limited has 5 years professional experience in selling Cisco, MikroTik, Juniper, Netgear and others ISP grade hardware, offering better pre-sale and after-sale support, solutions, which attracted more than 500+ Buyers internet service provider, IIG, IGW and call center all over the Bangladesh
                                                </p>
                                                <ul class="footer-social-list" style="text-align: center">
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="{{ asset('/') }}website/assets/icons/facebook.png" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="{{ asset('/') }}website/assets/icons/instagram.png" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="{{ asset('/') }}website/assets/icons/youtube.png" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="{{ asset('/') }}website/assets/icons/linkedin.png" alt="">
                                                        </a>
                                                    </li>


                                                    {{--<li>--}}
                                                    {{--<a href="javascript:void(0);" class="social-icon">--}}
                                                    {{--<img src="{{ asset('/') }}website/assets/icons/linkedin.png" alt="">--}}
                                                    {{--</a>--}}
                                                    {{--</li>--}}
                                                </ul>
                                            </div>
                                            <div class="col-6 col-lg-2 col-md-12">
                                                <h6>Pages</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('contact-us')}}">Contact Us</a></li>
                                                    <li><a href="{{ route('privacy')}}">Privacy Policy</a></li>
                                                    <li><a href="{{ route('refund') }}">Return & Refund Policy</a></li>
                                                    <li><a href="{{ route('refer-earn') }}">Refer & Win</a></li>
                                                    {{--<li><a href="javascript:void(0);">Tables</a></li>--}}
                                                    {{--<li><a href="javascript:void(0);">Other Pages</a></li>--}}
                                                </ul>
                                            </div>
                                            <div class="col-6 col-lg-2 col-md-6 col-sm-6">
                                                <h6>Information</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li>
                                                        <a href="#" data-bs-target="#smallmodal" data-bs-toggle="modal">
                                                            Login
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-bs-target="#registration" data-bs-toggle="modal">Registration</a>
                                                    </li>
                                                    <li><a href="{{ route('delivery') }}">Delivery Policy</a></li>
                                                    {{--<li><a href="javascript:void(0);">Blog</a></li>--}}
                                                    {{--<li><a href="javascript:void(0);">Terms and Services</a></li>--}}
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <h6>Location</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li><a href="javascript:void(0);">House #02, Road #03, Sector #13</a></li>
                                                    <li><a href="javascript:void(0);">Uttara, Dhaka, Bangladesh</a></li>
                                                    <li><a href="javascript:void(0);">Phone 1 : +01977699801</a></li>
                                                    <li><a href="javascript:void(0);">Phone 2 : +01977699806</a></li>
                                                    <li><a href="javascript:void(0);">Mail: info@workstation.com.bd</a></li>
                                                    {{--<li><a href="javascript:void(0);">Mail2: infodomain@gmail.com</a></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{--<img src="{{ asset('/') }}website/assets/icons/ssl.png" alt="">--}}
                                                <img src="{{ asset('/') }}website/assets/icons/ssl1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="main-footer ps-3 pe-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 footer1 text-center text-lg-bold">
                                                Copyright © {{ date('Y') }}. All Rights Reserved By<a href="{{ route('home') }}"> Workstation Communication Limited</a>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('/') }}website/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}website/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{ asset('/') }}website/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}website/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}website/assets/js/sticky.js"></script>


<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('/') }}website/assets/plugins/select2/select2.full.min.js"></script>
<script src="{{ asset('/') }}website/assets/js/select2.js"></script>

<!-- PRODUCTS JS -->
<script src="{{ asset('/') }}website/assets/js/products.js"></script>


<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}website/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}website/assets/switcher/js/switcher.js"></script>

<script src="{{ asset('/') }}website/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>

<script src="{{ asset('/') }}website/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}website/assets/js/table-data.js"></script>

<script src="{{ asset('/') }}website/assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="{{ asset('/') }}website/assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

<script>
    $(window).load(function(){
        setTimeout(function(){ $('.alert-success').fadeOut() }, 5000);
    });
</script>
</body>

</html>
