<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->

<!-- Mirrored from laravel8.spruko.com/noa/products by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:22 GMT -->
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
    <title>Bangladesh Tech Company</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/')); ?>website/assets/images/brand/favicon.ico" />

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

<body class="ltr app sidebar-mini">



<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="<?php echo e(asset('/')); ?>website/assets/images/loader.svg" class="loader-img" alt="Loader">
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
                    <a class="logo-horizontal " href="<?php echo e(route('home')); ?>">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->


                    <div class="main-header-center ms-3 d-none d-xl-block">
                        <input class="form-control" placeholder="Search for results..." type="search">
                        <button class="btn" type="submit">
                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/search-btn.png" height="25px" width="25px" alt="">
                        </button>
                    </div>
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="dropdown d-xl-none d-md-block d-none">
                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="" d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-start">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control" placeholder="Search....">
                                    <div class="input-group-text btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                    </div>
                                </div>
                            </div>
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
                                        <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/search.png" alt="">                                        </a>
                                        <div class="dropdown-menu header-search dropdown-menu-start">
                                            <div class="input-group w-100 p-2">
                                                <input type="text" class="form-control" placeholder="Search....">
                                                <div class="input-group-text btn btn-primary">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/icons/search-btn.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COUNTRY -->

                                    <div class="dropdown  d-flex shopping-cart">
                                        <a href="<?php echo e(route('home')); ?>" class="nav-link icon text-center btn btn-success" title="Home">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/home.png" alt="">
                                        </a>
                                    </div>

                                    <div class="dropdown  d-flex shopping-cart">
                                        <a href="<?php echo e(route('contact-us')); ?>" class="nav-link icon text-center btn btn-warning" title="Contact Us">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/contact.png" alt="">
                                        </a>
                                    </div>

                                    <div class="dropdown  d-flex shopping-cart">
                                        <a href="<?php echo e(route('refer-earn')); ?>" class="nav-link icon text-center btn btn-danger" title="Refer & Earn">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/refer.png" alt="">
                                        </a>
                                    </div>
                                    <!-- SEARCH -->
                                    
                                        
                                                
                                                    
												
                                            
                                                
                                            
                                        
                                    

                                    
                                        
                                            
                                        
                                    
                                    <!-- FULL-SCREEN -->
                                    <div class="dropdown  d-flex shopping-cart">
                                        <a href="javascript:void(0);" class="nav-link icon text-center btn btn-info"  data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/cart.png" alt="">
                                            
                                            <span class="badge bg-info header-badge bg-red" >4</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading border-bottom">
                                                <div class="d-flex">
                                                    <h6 class="mt-1 mb-0 fs-15 text-dark">Shopping Cart</h6>
                                                    <div class="ms-auto">
                                                        <span class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill"> <a href="javascript:void(0);" class="showall-text text-white">Remove All</a> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-dropdown-list cart-menu ps4 overflow-hidden">
                                                <a class="dropdown-item d-flex p-4" href="cart.html">
                                                    <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/images/ecommerce/1.jpg"></span>
                                                    <div class="wp-60 cart-desc mt-1">
                                                        <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">TrueBasket Metal Single Pot</p>
                                                        <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                        <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                                    </div>
                                                    <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $129
                                                            </span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex p-4" href="cart.html">
                                                    <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/images/ecommerce/2.jpg"></span>
                                                    <div class="wp-60 cart-desc mt-1">
                                                        <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Authentic chair with Canopy</p>
                                                        <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                        <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                                    </div>
                                                    <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $99
                                                            </span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex p-4" href="cart.html">
                                                    <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/images/ecommerce/3.jpg"></span>
                                                    <div class="wp-60 cart-desc mt-1">
                                                        <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Casual Sneakers Canvas</p>
                                                        <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                        <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                                    </div>
                                                    <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $299
                                                            </span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex p-4" href="cart.html">
                                                    <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/images/ecommerce/4.jpg"></span>
                                                    <div class="wp-60 cart-desc mt-1">
                                                        <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Branded Head Phones</p>
                                                        <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-danger">No Stock</span></p>
                                                        <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                                    </div>
                                                    <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $249
                                                            </span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex p-4" href="cart.html">
                                                    <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="<?php echo e(asset('/')); ?>website/assets/images/ecommerce/5.jpg"></span>
                                                    <div class="wp-60 cart-desc mt-1">
                                                        <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">camera lens (16mm f/1.4)</p>
                                                        <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                        <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 02</span>
                                                    </div>
                                                    <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $1,279
                                                            </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <div class="text-center p-3">
                                                <a href="#" class="btn btn-primary">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/icons/cart.png" alt="">
                                                    View Cart
                                                </a>

                                                <a href="#" class="btn btn-danger right">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/icons/checkout.png" alt="">
                                                    Checkout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CART -->

                                    <div class="dropdown d-md-flex profile-1" >
                                        <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">
												<span>
													<img src="<?php echo e(asset('/')); ?>website/assets/images/faces/6.jpg" alt="profile-user"
                                                         class="avatar  profile-user brround cover-image">
												</span>
                                            
                                                
                                            
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <a class="dropdown-item" href="profile.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z"/></svg>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="mail-compose.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/></svg>
                                                My Wallet
                                                <span class="badge bg-secondary float-end">3</span>
                                            </a>
                                            <a class="dropdown-item" href="mail-inbox.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,8.5c-1.9329834,0-3.5,1.5670166-3.5,3.5s1.5670166,3.5,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5C15.5,10.0670166,13.9329834,8.5,12,8.5z M12,14.5c-1.3807373,0-2.5-1.1192627-2.5-2.5s1.1192627-2.5,2.5-2.5c1.380127,0.0014648,2.4985352,1.119873,2.5,2.5C14.5,13.3807373,13.3807373,14.5,12,14.5z M21.1582031,10.0253906l-1.8867188-0.6289062c-0.0222168-0.0074463-0.0439453-0.0164185-0.0648804-0.0268555c-0.2470093-0.12323-0.3474121-0.4234009-0.2241821-0.6704102l0.8896484-1.7783203c0.0960083-0.1925659,0.0582275-0.4248657-0.09375-0.5771484l-2.1210938-2.1220703c-0.1524658-0.1516113-0.3845215-0.1893311-0.5771484-0.09375l-1.7792969,0.8896484c-0.0209961,0.010437-0.0426636,0.0194092-0.0648804,0.0268555c-0.2618408,0.0874023-0.5449829-0.0540771-0.6323853-0.315918l-0.6289062-1.8867188C13.90625,2.6377563,13.71521,2.5001831,13.5,2.5h-3c-0.21521-0.0001221-0.40625,0.1376343-0.4741821,0.3417969L9.3969116,4.7285156C9.3518677,4.8665161,9.24823,4.9776001,9.1137085,5.0322266c-0.1335449,0.057373-0.2857666,0.052002-0.414978-0.0146484L6.9204102,4.1279297c-0.1925049-0.0960693-0.4249268-0.0583496-0.5771484,0.09375L4.2216797,6.34375c-0.1522217,0.1521606-0.1900024,0.3846436-0.09375,0.5771484l0.8896484,1.7783203c0.0107422,0.0214233,0.0198975,0.0435791,0.0274658,0.0662842c0.086792,0.2616577-0.0548706,0.5441284-0.3165283,0.6309814l-1.8867188,0.6289062C2.6377563,10.09375,2.5001831,10.28479,2.5,10.5v3c0.0001831,0.21521,0.1377563,0.40625,0.3417969,0.4746094l1.8862305,0.6289062c0.0224609,0.0074463,0.0444336,0.0165405,0.0656128,0.0270996c0.2468872,0.12323,0.347168,0.4232788,0.223938,0.670166l-0.8896484,1.7783203c-0.0962524,0.1925049-0.0584717,0.4249878,0.09375,0.5771484l2.1216431,2.1220703c0.1523438,0.1519165,0.3845825,0.1896362,0.5771484,0.09375l1.7783203-0.8896484c0.1289673-0.067627,0.2816162-0.072998,0.4150391-0.0146484c0.1344604,0.0546265,0.2380981,0.1657104,0.2831421,0.3037109l0.6289062,1.8867188C10.093811,21.3623657,10.2848511,21.500061,10.5,21.5h3c0.21521-0.0001831,0.40625-0.1378174,0.4746094-0.3418579l0.6289062-1.8867188c0.0074463-0.0222168,0.0164185-0.0438843,0.0268555-0.0648804c0.12323-0.2470093,0.4234009-0.3474121,0.6704102-0.2241821l1.7792969,0.8896484c0.192688,0.0950928,0.4244995,0.0574341,0.5771484-0.09375l2.1210938-2.1220703c0.1519775-0.1522217,0.1897583-0.3845825,0.09375-0.5771484l-0.8896484-1.7783203c-0.0651855-0.1295776-0.0705566-0.2811279-0.0146484-0.414978c0.0546265-0.1342773,0.1657715-0.2375488,0.3037109-0.2822266l1.8867188-0.6289062C21.3622437,13.90625,21.4998169,13.71521,21.5,13.5v-3C21.4998169,10.28479,21.3622437,10.09375,21.1582031,10.0253906z M20.5,13.1396484l-1.5449219,0.5146484c-0.0671997,0.0223999-0.1326904,0.0495605-0.1960449,0.0811768c-0.7410889,0.3704224-1.0415649,1.2714844-0.6711426,2.0125732l0.7285156,1.4560547l-1.6113281,1.6123047l-1.4570312-0.7285156c-0.0639648-0.0320435-0.130127-0.0594482-0.197998-0.0820312c-0.7856445-0.2613525-1.6343994,0.1636353-1.895752,0.9492188L13.1396484,20.5h-2.2792969l-0.5151978-1.5449219c-0.0223389-0.0669556-0.0493774-0.1322021-0.0809326-0.1953125c-0.3702393-0.741394-1.2714233-1.0421753-2.0128174-0.671875l-1.4559937,0.7285156l-1.6118164-1.6123047l0.7285156-1.4560547c0.0314941-0.0631104,0.0585327-0.128418,0.0808716-0.1953125c0.2622681-0.7861938-0.1623535-1.6361084-0.9485474-1.8984375L3.5,13.1396484v-2.2792969l1.5449219-0.5145874c0.0666504-0.0222778,0.1317139-0.0492554,0.1945801-0.0806274c0.7416382-0.3701782,1.0427856-1.2714844,0.6726074-2.0131226L5.1835938,6.7958984l1.6118774-1.6123047l1.4559937,0.7285156C8.3145752,5.9436646,8.3798218,5.9707031,8.4467773,5.993042c0.7860718,0.2623901,1.6359863-0.1620483,1.8984375-0.9481201L10.8603516,3.5h2.2792969l0.5147095,1.5449219c0.022583,0.0678711,0.0499878,0.1340332,0.0820312,0.197998c0.3707275,0.7403564,1.2713623,1.039917,2.0117188,0.6691895l1.4569702-0.7285156l1.6113281,1.6123657l-0.7285156,1.4560547c-0.0320435,0.0639038-0.0594482,0.1300659-0.0820312,0.197937c-0.2613525,0.7856445,0.1636353,1.6343384,0.9492188,1.895752L20.5,10.8603516V13.1396484z"/></svg>
                                                Settings
                                            </a>
                                            <a class="dropdown-item" href="faq.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.5,9c0.0001831,0,0.0003662,0,0.0006104,0C2.7765503,8.9998169,3.0001831,8.776001,3,8.5V3h5.5C8.776123,3,9,2.776123,9,2.5S8.776123,2,8.5,2h-6C2.4998169,2,2.4996338,2,2.4993896,2C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,8.7765503,2.223999,9.0001831,2.5,9z M8.5,21H3v-5.5C3,15.223877,2.776123,15,2.5,15S2,15.223877,2,15.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h6C8.776123,22,9,21.776123,9,21.5S8.776123,21,8.5,21z M21.5,2h-6C15.223877,2,15,2.223877,15,2.5S15.223877,3,15.5,3H21v5.5c0,0.0001831,0,0.0003662,0,0.0005493C21.0001831,8.7765503,21.223999,9.0001831,21.5,9c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,8.9998169,22.0001831,8.776001,22,8.5v-6c0-0.0001831,0-0.0003662,0-0.0006104C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M17,16v-4c-0.0014038-1.1040039-0.8959961-1.9985962-2-2V9c0-1.6568604-1.3431396-3-3-3S9,7.3431396,9,9v1c-1.1040039,0.0014038-1.9985962,0.8959961-2,2v4c0.0014038,1.1040039,0.8959961,1.9985962,2,2h6C16.1040039,17.9985962,16.9985962,17.1040039,17,16z M10,9c0-1.1045532,0.8954468-2,2-2s2,0.8954468,2,2v1h-4V9z M8,16v-4c0.0003662-0.552124,0.447876-0.9996338,1-1h0.5h5h0.0006104H15c0.552124,0.0003662,0.9996338,0.447876,1,1v4c-0.0003662,0.552124-0.447876,0.9996338-1,1H9C8.447876,16.9996338,8.0003662,16.552124,8,16z M21.5,15c-0.276123,0-0.5,0.223877-0.5,0.5V21h-5.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h6c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-6C22,15.223877,21.776123,15,21.5,15z"/></svg>
                                                Lock Screen
                                            </a>
                                            <a class="dropdown-item" href="login.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z"/></svg>
                                                Log out
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Profile -->
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
                    <a class="header-brand1" href="<?php echo e(route('home')); ?>">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img light-logo" alt="logo">
                        <img src="https://www.bangladeshtechcom.com/assets/uploads/logos/header_logo-BTC.png" class="header-brand-img light-logo1" alt="logo">
                    </a><!-- LOGO -->
                </div>

                <div class="main-sidemenu" >
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                        </svg>
                    </div>
                    <ul class="side-menu ">
                        <li class="slide">
                            <a class="side-menu__item" href="#" style="text-align: center">
                                <img src="<?php echo e(asset('/')); ?>website/assets/icons/category.png" alt="" width="20px">
                                <span class="side-menu__label px-2">Categories</span>
                            </a>
                        </li>
                        <hr>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#" title="<?php echo e($category->name); ?>">
                                <img src="<?php echo e(asset($category->icon)); ?>" alt="">
                                <span class="side-menu__label px-2"><?php echo e($category->name); ?></span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="background.html" class="slide-item"><?php echo e($subCategory->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        
                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        
                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        

                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        

                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        
                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        

                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        
                        
                            
                                
                                
                            
                                
                                
                                
                            
                            
                        
                        <!--<li>-->
                        <!--<h3>Pages</h3>-->
                        <!--</li>-->
                        <!--<li class="slide">-->
                        <!--<a class="side-menu__item" data-bs-toggle="slide" href="#">-->
                        <!--<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z"/></svg>-->
                        <!--<span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i>-->
                        <!--</a>-->
                        <!--<ul class="slide-menu">-->
                        <!--<li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>-->
                        <!--<li class="sub-slide">-->
                        <!--<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span-->
                        <!--class="sub-side-menu__label">Authentication</span><i-->
                        <!--class="sub-angle fa fa-angle-right"></i></a>-->
                        <!--<ul class="sub-slide-menu">-->
                        <!--<li><a class="sub-slide-item" href="login.html">Sign In</a></li>-->
                        <!--<li><a class="sub-slide-item" href="register.html">Sign Up</a></li>-->
                        <!--<li><a class="sub-slide-item" href="forgot-password.html">Forgot Password</a></li>-->
                        <!--<li><a class="sub-slide-item" href="lockscreen.html">Lockscreen</a></li>-->
                        <!--<li><a class="sub-slide-item" href="construction.html">UnderConstruction</a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li class="sub-slide">-->
                        <!--<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span-->
                        <!--class="sub-side-menu__label">Error Pages</span><i-->
                        <!--class="sub-angle fa fa-angle-right"></i></a>-->
                        <!--<ul class="sub-slide-menu">-->
                        <!--<li><a class="sub-slide-item" href="error404.html">404 Error</a></li>-->
                        <!--<li><a class="sub-slide-item" href="error500.html">500 Error</a></li>-->
                        <!--<li><a class="sub-slide-item" href="error501.html">501 Error</a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li><a href="settings.html" class="slide-item">Settings</a></li>-->
                        <!--<li><a href="profile.html" class="slide-item">Profile</a></li>-->
                        <!--<li><a href="about.html" class="slide-item">About Company</a></li>-->
                        <!--<li><a href="services.html" class="slide-item">Services</a></li>-->
                        <!--<li><a href="switcher.html" class="slide-item">Switcher</a></li>-->
                        <!--<li><a href="terms.html" class="slide-item">Terms</a></li>-->
                        <!--<li><a href="faq.html" class="slide-item">Faq's</a></li>-->
                        <!--<li><a href="pricing.html" class="slide-item">Pricing</a></li>-->
                        <!--<li class="sub-slide">-->
                        <!--<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span-->
                        <!--class="sub-side-menu__label">Blog</span><i-->
                        <!--class="sub-angle fa fa-angle-right"></i></a>-->
                        <!--<ul class="sub-slide-menu">-->
                        <!--<li><a class="sub-slide-item" href="blog.html">Blog</a></li>-->
                        <!--<li><a class="sub-slide-item" href="blog-details.html">Blog Details</a></li>-->
                        <!--<li><a class="sub-slide-item" href="blog-edit.html">Edit Post</a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li class="slide">-->
                        <!--<a class="side-menu__item" data-bs-toggle="slide" href="#">-->
                        <!--<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.25,8.4521484l9.5,5.4804688C11.8259277,13.9767456,11.9121704,14,12,14s0.1740723-0.0232544,0.25-0.0673828l9.5-5.4804688c0.0759888-0.0438843,0.1390381-0.1069946,0.1829224-0.1829224C22.071106,8.0300293,21.9891968,7.7241211,21.75,7.5859375l-9.5-5.4755859c-0.1550903-0.0878906-0.3449097-0.0878906-0.5,0l-9.5,5.4755859C2.1740112,7.6298218,2.1109619,7.6929321,2.0670776,7.7688599C1.928894,8.0080566,2.0108032,8.3139648,2.25,8.4521484z M12,3.1210938l8.4990234,4.8984375L12,12.9228516L3.5009766,8.0195312L12,3.1210938z M21.2479858,15.5263672L12,20.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,21.9765015,11.911377,22.0001221,12,22c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,15.387207,21.2479858,15.5263672z M21.2479858,11.5263672L12,16.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,17.9765015,11.911377,18.0001221,12,18c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,11.387207,21.2479858,11.5263672z"/></svg>-->
                        <!--<span class="side-menu__label">Utilities</span><i class="angle fa fa-angle-right"></i></a>-->
                        <!--<ul class="slide-menu">-->
                        <!--<li class="side-menu-label1"><a href="javascript:void(0)">Utilities</a></li>-->
                        <!--<li><a href="background.html" class="slide-item">Background</a></li>-->
                        <!--<li><a href="border.html" class="slide-item">Border</a></li>-->
                        <!--<li><a href="display.html" class="slide-item">Display</a></li>-->
                        <!--<li><a href="flex.html" class="slide-item">Flex</a></li>-->
                        <!--<li><a href="height.html" class="slide-item">Height</a></li>-->
                        <!--<li><a href="margin.html" class="slide-item">Margin</a></li>-->
                        <!--<li><a href="padding.html" class="slide-item">Padding</a></li>-->
                        <!--<li><a href="position.html" class="slide-item">Position</a></li>-->
                        <!--<li><a href="width.html" class="slide-item">Width</a></li>-->
                        <!--<li><a href="opacity.html" class="slide-item">Opacity</a></li>-->
                        <!--<li><a href="emptypage.html" class="slide-item">Empty Page</a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                                   width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                        </svg>
                    </div>
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

                    <?php echo $__env->yieldContent('slider'); ?>


                    <?php echo $__env->yieldContent('after-slider'); ?>
                    <!--After Slider-->


                    <?php echo $__env->yieldContent('main-content'); ?>
                    <!--products-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="top-footer">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <h6>About</h6>
                                                <p>
                                                    Workstation communication has 5 years professional experience in selling Cisco, MikroTik, Juniper, Netgear and others ISP grade hardware, offering better pre-sale and after-sale support, solutions, which attracted more than 500+ Buyers internet service provider, IIG, IGW and call center all over the Bangladesh
                                                </p>
                                                <ul class="footer-social-list" style="text-align: center">
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/facebook.png" alt="">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/youtube.png" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/gmail.png" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="social-icon">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/icons/linkedin.png" alt="">
                                                        </a>
                                                    </li>

                                                    
                                                        
                                                            
                                                        
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-12">
                                                <h6>Pages</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li><a href="javascript:void(0);">Dashboard</a></li>
                                                    <li><a href="javascript:void(0);">Elements</a></li>
                                                    <li><a href="javascript:void(0);">Forms</a></li>
                                                    <li><a href="javascript:void(0);">Charts</a></li>
                                                    <li><a href="javascript:void(0);">Tables</a></li>
                                                    <li><a href="javascript:void(0);">Other Pages</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-12">
                                                <h6>Information</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li><a href="javascript:void(0);">Our Team</a></li>
                                                    <li><a href="javascript:void(0);">Contact US</a></li>
                                                    <li><a href="javascript:void(0);">About</a></li>
                                                    <li><a href="javascript:void(0);">Services</a></li>
                                                    <li><a href="javascript:void(0);">Blog</a></li>
                                                    <li><a href="javascript:void(0);">Terms and Services</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <h6>Location</h6>
                                                <ul class="list-unstyled mb-4">
                                                    <li><a href="javascript:void(0);">Address1:7363 Old Livingston Drive Dyersburg</a></li>
                                                    <li><a href="javascript:void(0);">Address2:4 Harrison St.Fairborn, OH 45324</a></li>
                                                    <li><a href="javascript:void(0);">Phno1: +123 456 8976</a></li>
                                                    <li><a href="javascript:void(0);">Phno2: +567 234 7865</a></li>
                                                    <li><a href="javascript:void(0);">Mail1: yourdomain@gmail.com</a></li>
                                                    <li><a href="javascript:void(0);">Mail2: infodomain@gmail.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="<?php echo e(asset('/')); ?>website/assets/icons/ssl.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="main-footer ps-3 pe-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 footer1 text-center">
                                                Copyright ©2023. All Rights Reserved By<a href="<?php echo e(route('home')); ?>"> Bangladesh Tech Company</a>
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
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/sticky.js"></script>


<!-- INTERNAL SELECT2 JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/select2.js"></script>

<!-- PRODUCTS JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/products.js"></script>


<!-- COLOR THEME JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/switcher/js/switcher.js"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/noa/products by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:27 GMT -->
</html>
<?php /**PATH D:\Xampp\htdocs\bangladeshTechCom\resources\views/website/master.blade.php ENDPATH**/ ?>