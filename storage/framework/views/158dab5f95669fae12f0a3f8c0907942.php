<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>Workstation Communication</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/')); ?>website/assets/images/logo1.png"/>

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
                    <a class="logo-horizontal " href="<?php echo e(route('dashboard')); ?>">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img desktop-logo" style="height: 40px;" alt="logo">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img light-logo1"
                             style="height: 40px;" alt="logo">
                    </a>
                    <!-- LOGO -->
                    <div class="main-header-center ms-3 d-none d-xl-block">
                        <form action="<?php echo e(route('product.search')); ?>" style="text-align: center">
                            <?php echo csrf_field(); ?>
                            <input class="form-control" name="search" placeholder="Search for results..." type="search">
                            <button class="btn" type="submit">
                                <img src="<?php echo e(asset('/')); ?>website/assets/icons/search-btn.png" height="25px" width="25px" alt="">
                            </button>
                        </form>
                    </div>
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="dropdown d-xl-none d-md-block d-none">
                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="" d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                            </a>
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

                                    <div class="dropdown  d-flex shopping-cart pe-5 py-2">
                                        <a href="#" data-bs-target="#refer" data-bs-toggle="modal">
                                            <h6 class="text-white">Refer <br><b>& Win</b> </h6>
                                        </a>
                                    </div>
                                    <div class="dropdown d-md-flex profile-1">
                                        <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">

                                            <h6 class="text-white">Hello <br><b><?php echo e(Auth::user()->name); ?></b> </h6>
                                            <div class="text-center p-1 d-flex d-lg-none-max">
                                                <h6 class="mb-0 text-bold text-white" id="profile-heading"></h6>
                                            </div>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            
                                                
                                                
                                            
                                            
                                                
                                                
                                                
                                            
                                            
                                                
                                                
                                            
                                            
                                                
                                                
                                            
                                            <form action="<?php echo e(route('logout')); ?>" method="POST" id="logoutForm">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
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
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="<?php echo e(route('dashboard')); ?>">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo1.png" class="header-brand-img light-logo" alt="logo">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img light-logo1" alt="logo">
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
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo e(route('dashboard')); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
                                <span class="side-menu__label">Category Module</span><i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('category.create')); ?>" class="slide-item">Create Category</a></li>
                                <li><a href="<?php echo e(route('category.manage')); ?>" class="slide-item">Manage Category</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg>
                                <span class="side-menu__label">Sub Category Module</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('sub-category.create')); ?>" class="slide-item">Create Sub Category</a></li>
                                <li><a href="<?php echo e(route('sub-category.manage')); ?>" class="slide-item">Manage Sub Category</a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21H20V4.5C20,4.223877,19.776123,4,19.5,4S19,4.223877,19,4.5V21h-3v-8.5c0-0.276123-0.223877-0.5-0.5-0.5S15,12.223877,15,12.5V21h-3V8.5C12,8.223877,11.776123,8,11.5,8S11,8.223877,11,8.5V21H8v-4.5C8,16.223877,7.776123,16,7.5,16S7,16.223877,7,16.5V21H3V2.5C3,2.223877,2.776123,2,2.5,2S2,2.223877,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z"/></svg>
                                <span class="side-menu__label">Brands Module</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('brand.create')); ?>" class="slide-item">Create Brand</a></li>
                                <li><a href="<?php echo e(route('brand.manage')); ?>" class="slide-item">Manage Brand</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M19.7819214,7.5h-9.2255249l2.5594482-4.4225464C15.9681396,3.4337769,18.4015503,5.1206055,19.7819214,7.5z M14.0211182,8.5l2.0198364,3.503479L14.0192871,15.5H9.9798584l-2.0228882-3.5084229L9.9776611,8.5H14.0211182z M12,3c0.0019531,0,0.0038452,0.0003052,0.0057983,0.0003052L7.380249,10.991272L4.8326416,6.5727539C6.4761353,4.4058838,9.0706177,3,12,3z M3,12c0-1.6405029,0.4459839-3.1737671,1.2128296-4.49823L8.8244019,15.5H3.7061157C3.2515259,14.4241333,3,13.2414551,3,12z M4.2138672,16.5h9.2272339l-2.5576782,4.423584C8.0288696,20.5695801,5.5935059,18.8815918,4.2138672,16.5z M12,21c-0.0021362,0-0.0041504-0.0003052-0.0062866-0.0003052l4.6235962-7.996582l2.550354,4.4237671C17.524231,19.5939941,14.9295654,21,12,21z M15.1746826,8.5h5.1159668C20.7460938,9.5758057,20.9986572,10.7584839,21,12c0,1.6407471-0.446106,3.1741943-1.2131348,4.4987183L15.1746826,8.5z"/></svg>
                                <span class="side-menu__label">Units Module</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('unit.create')); ?>" class="slide-item">Create Unit</a></li>
                                <li><a href="<?php echo e(route('unit.manage')); ?>" class="slide-item">Manage Unit</a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18,14c-1.4293213,0-2.6744385,0.7554932-3.3817749,1.8830566l-4.9604492-2.2773438C9.8745117,13.1135864,9.9994507,12.5721436,10,12c0-0.5722656-0.1245728-1.1138916-0.3410645-1.6062012l4.9593506-2.2767944C15.3256226,9.2445068,16.5707397,10,18,10c2.208252-0.0021973,3.9978027-1.791748,4-4c0-2.2091675-1.7908325-4-4-4s-4,1.7908325-4,4c0,0.4233398,0.0836182,0.8234253,0.2055054,1.2064209L9.1296997,9.5366821C8.3972168,8.607666,7.2749023,8,6,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c1.2741699-0.0012817,2.3956909-0.6087646,3.1281738-1.5372925l5.0773315,2.3308716C14.0836182,17.1765747,14,17.5766602,14,18c0,2.2091675,1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C22,15.7908325,20.2091675,14,18,14z M18,3c1.6561279,0.0018311,2.9981689,1.3438721,3,3c0,1.6568604-1.3431396,3-3,3s-3-1.3431396-3-3S16.3431396,3,18,3z M6,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C9,13.6568604,7.6568604,15,6,15z M18,21c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C21,19.6568604,19.6568604,21,18,21z"/></svg>
                                <span class="side-menu__label">Product Module</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('product.create')); ?>" class="slide-item">Create Product</a></li>
                                <li><a href="<?php echo e(route('product.index')); ?>" class="slide-item">Manage Product</a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
                                <span class="side-menu__label">Courier Module</span><i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('courier.create')); ?>" class="slide-item">Create Courier</a></li>
                                <li><a href="<?php echo e(route('courier.manage')); ?>" class="slide-item">Manage Courier</a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z"/></svg>
                                <span class="side-menu__label">Coupon Module</span><i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('coupon.create')); ?>" class="slide-item">Create Coupon</a></li>
                                <li><a href="<?php echo e(route('coupon.index')); ?>" class="slide-item">Manage Coupon</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.25,8.4521484l9.5,5.4804688C11.8259277,13.9767456,11.9121704,14,12,14s0.1740723-0.0232544,0.25-0.0673828l9.5-5.4804688c0.0759888-0.0438843,0.1390381-0.1069946,0.1829224-0.1829224C22.071106,8.0300293,21.9891968,7.7241211,21.75,7.5859375l-9.5-5.4755859c-0.1550903-0.0878906-0.3449097-0.0878906-0.5,0l-9.5,5.4755859C2.1740112,7.6298218,2.1109619,7.6929321,2.0670776,7.7688599C1.928894,8.0080566,2.0108032,8.3139648,2.25,8.4521484z M12,3.1210938l8.4990234,4.8984375L12,12.9228516L3.5009766,8.0195312L12,3.1210938z M21.2479858,15.5263672L12,20.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,21.9765015,11.911377,22.0001221,12,22c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,15.387207,21.2479858,15.5263672z M21.2479858,11.5263672L12,16.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,17.9765015,11.911377,18.0001221,12,18c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,11.387207,21.2479858,11.5263672z"/></svg>
                                <span class="side-menu__label">Order Module</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('order.manage')); ?>" class="slide-item">Manage Order</a></li>
                                <li><a href="<?php echo e(route('order.search')); ?>" class="slide-item">Search Order</a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
                                <span class="side-menu__label">Slider Module</span><i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li><a href="<?php echo e(route('slider.create')); ?>" class="slide-item">Create Slider</a></li>
                                <li><a href="<?php echo e(route('slider.manage')); ?>" class="slide-item">Manage Slider</a></li>
                            </ul>
                        </li>

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
                    <?php echo $__env->yieldContent('main-content'); ?>
                    <?php if(session('message')): ?>
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
                                title: "<?php echo e(session('message')); ?>"
                            })
                        </script>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>


    <!-- FOOTER -->
    <footer class="main-footer ps-3 pe-3">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 footer1 text-center text-lg-bold">
                Copyright © <?php echo e(date('Y')); ?>. All Rights Reserved By<a href="<?php echo e(route('home')); ?>"> Workstation Communication</a>
            </div>
        </div>
    </footer>
    <!-- FOOTER CLOSED -->

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

<!-- INDEX JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/index1.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/index.js"></script>

<script src="<?php echo e(asset('/')); ?>website/assets/plugins/summernote-editor/summernote1.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/summernote.js"></script>

<!-- CUSTOM JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/switcher/js/switcher.js"></script>

<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>

<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/table-data.js"></script>


<script>
    $(window).load(function(){
        setTimeout(function(){ $('.alert-success').fadeOut() }, 5000);
    });


    function getSubCategoryByCategory(categoryId)
    {
        $.ajax({
            type: "GET",
            url:"<?php echo e(route('get-sub-category-by-category')); ?>",
            data: {id: categoryId},
            DataType: "jSON",
            success: function (response) {

                var option= '';
                option += '<option value=""> -- Select Sub Product Category -- </option>';
                $.each(response, function (key, value) {
                    option += '<option value="'+value.id+'"> '+value.name+' </option>';
                });
                $('#subCategoryId').empty();
                $('#subCategoryId').append(option);
            }
        });
    }

    $(document).on('click', '.delete-btn', function () {
        var check = confirm("Are you sure to delete this?");
        if(check)
        {
            var id = $(this).attr('data-id');
            $('#deleteForm'+id).submit();
        }
        return false;
    })

</script>
</body>

</html>
<?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/layouts/app.blade.php ENDPATH**/ ?>