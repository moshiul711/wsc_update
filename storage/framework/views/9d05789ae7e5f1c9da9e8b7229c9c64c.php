<div class="modal fade" id="generateOtp">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-white">
            <div class="modal-header"><h5 class="modal-title">OTP Login</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="generateOtpForm"><?php echo csrf_field(); ?>
                <div class="modal-body"><span class="login100-form-title"><a href="<?php echo e(route('home')); ?>"
                                                                             class="text-center"><img
                                src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img" alt=""
                                style="color: red"></a></span>
                    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="tel" id="phone" name="phone" placeholder="Enter Phone No."><span
                            class="focus-input100"></span>
                        <div class="invalid-feedback fw-bold text-center" id="phoneError"></div>
                    </div>
                    <div class="text-center pt-3"><p class="text-dark mb-0 text-white">Don't You Have an Account?<a
                                href="#" data-bs-target="#registration" data-bs-toggle="modal"
                                class="text-primary ms-1">Create an Account</a></p></div>
                </div>
                <div class="modal-footer generate_btn">
                    <button type="submit" class="btn btn-primary" style="display: block; width: 100%">Generate OTP
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="smallmodal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-white">
            <div class="modal-header"><h5 class="modal-title">Login</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo e(route('customer.login')); ?>" method="post"><?php echo csrf_field(); ?>
                <div class="modal-body"><span class="login100-form-title"><a href="<?php echo e(route('home')); ?>"
                                                                             class="text-center"><img
                                src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img" alt=""
                                style="color: red"></a></span>
                    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" required><span
                            class="focus-input100"></span><span class="symbol-input100"><i class="zmdi zmdi-email"
                                                                                           aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-bs-validate="Password is required"><input
                            class="input100" type="password" name="password" placeholder="Password" required><span
                            class="focus-input100"></span><span class="symbol-input100"><i class="zmdi zmdi-lock"
                                                                                           aria-hidden="true"></i></span>
                    </div>
                    <div class="text-end pt-1"><p class="mb-0 text-white"><a href="<?php echo e(route('forgot-password')); ?>"
                                                                             class="text-primary ms-1">Forgot
                                Password?</a></p></div>
                    <div class="text-center py-3"><p class="text-dark mb-0 text-white">Don't You Have an Account?<a
                                href="#" data-bs-target="#registration" data-bs-toggle="modal"
                                class="text-primary ms-1">Create an Account</a></p></div>
                    <button class="btn btn-primary" type="submit" style="display: block; width: 100%">Login</button>
                </div>
                <div class="modal-footer"><p class="btn btn-success text-white" style="display: block; width: 100%"><a
                            href="#" data-bs-target="#generateOtp" data-bs-toggle="modal" class="text-white">Login With
                            OTP</a></p></div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="refer">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background-color: white">
            <div class="modal-header text-center"><h5 class="modal-title text-bold">Refer & Win Cash Prizes</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center"><img src="<?php echo e(asset('/')); ?>website/assets/icons/refer.gif"
                                                                    alt="" style="height: 350px; width: 80%"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="registration">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-white">
            <div class="modal-header"><h5 class="modal-title">Registration</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo e(route('customer.register')); ?>" method="post"><?php echo csrf_field(); ?>
                <div class="modal-body"><span class="login100-form-title"><a href="#" class="text-center"><img
                                src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img"
                                alt=""></a></span>
                    <div class="wrap-input100 validate-input" data-bs-validate="First Name Required"><input
                            class="input100" type="text" name="first_name" placeholder="First Name" required><span
                            class="focus-input100"></span><span class="symbol-input100"><i class="zmdi zmdi-account"
                                                                                           aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-bs-validate="Last Name Required"><input
                            class="input100" type="text" name="last_name" placeholder="Last Name" required><span
                            class="focus-input100"></span><span class="symbol-input100"><i class="zmdi zmdi-account"
                                                                                           aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" pattern="/^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i" type="email"
                               name="email" placeholder="Email" required><span class="focus-input100"></span><span
                            class="symbol-input100"><i class="zmdi zmdi-email" aria-hidden="true"></i></span></div>
                    <div class="wrap-input100 validate-input" data-bs-validate="Phone Number is required: 01700123456">
                        <input class="input100" min="10" pattern="(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$"
                               type="tel" name="phone" placeholder="Phone" required><span class="focus-input100"></span><span
                            class="symbol-input100"><i class="zmdi zmdi-phone" aria-hidden="true"></i> </span></div>
                    <div class="wrap-input100 validate-input" data-bs-validate="Password is required"><input
                            class="input100" type="password" name="password" placeholder="Password" required><span
                            class="focus-input100"></span><span class="symbol-input100"><i class="zmdi zmdi-lock"
                                                                                           aria-hidden="true"></i></span>
                    </div>
                    <div class="text-center pt-3"><p class="text-dark mb-0">If You Have an account<a href=""
                                                                                                     data-bs-target="#smallmodal"
                                                                                                     data-bs-toggle="modal"
                                                                                                     class="text-primary ms-1">Login
                                Here</a></p></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" style="display: block; width: 100%">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="loginOtp">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-white">
            <div class="modal-header"><h5 class="modal-title">OTP Login</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="loginOtpForm"><?php echo csrf_field(); ?>
                <div class="modal-body"><span class="login100-form-title"><a href="<?php echo e(route('home')); ?>"
                                                                             class="text-center"><img
                                src="<?php echo e(asset('/')); ?>website/assets/images/logo.png" class="header-brand-img" alt=""
                                style="color: red"></a></span>
                    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="number" id="otp" name="otp" placeholder="Enter OTP"><span
                            class="focus-input100"></span>
                        <div class="invalid-feedback fw-bold text-center" id="otpError"></div>
                    </div>
                    <div class="text-center pt-3"><p class="text-dark mb-0 text-white">Don't You Have an Account?<a
                                href="#" data-bs-target="#registration" data-bs-toggle="modal"
                                class="text-primary ms-1">Create an Account</a></p></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" style="display: block; width: 100%">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/sidemenu/sidemenu.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/p-scroll/pscroll.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/sticky.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/select2.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/products.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/themeColors.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/custom.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/js/tooltip%26popover.js"></script>
<script src="<?php echo e(asset('/')); ?>website/assets/switcher/js/switcher.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script type="text/javascript">
    var endpoint = "<?php echo e(route('home')); ?>";
    var page = 1;
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 5)){
            page++;
            infiniteLoadMore(page);
        }
    })
    function infiniteLoadMore(page) {
        $.ajax({
            url : endpoint + "?page="+page,
            type : 'GET',
            // beforeSend: function() {
            //     $('#global-loader').show(); // Show the loader before sending the request
            // }
        })
            .done(function (response) {
                if (response.html == '')
                {
                    return;
                }
                $('#data-wrapper').append(response.html);
            })
            .fail(function () {
                console.log('error')
            })
            .always(function () {
                console.log('complete')
            })
    }
</script>

<script>var slider = tns({
        container: '.my-slider',
        autoplay: 0,
        controls: false,
        mouseDrag: true,
        autoplayButtonOutput: false,
        responsive: {
            0: {items: 2,},
            540: {items: 2,},
            668: {items: 3,},
            868: {items: 4,},
            1150: {items: 5,},
            1280: {items: 5},
            1400: {items: 6,},
            1600: {items: 12,}
        }
    });</script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script><?php echo Toastr::message(); ?>

<div class="modal fade test" id="quick-view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background-color: white">
            <div class="modal-header">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="quick_view_body"></div>
        </div>
    </div>
</div>
<script>$('.quick-view').click(function () {
        var productId = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: "<?php echo e(route('productQuickView')); ?>",
            data: {id: productId},
            DataType: "JSON",
            success: function (response) {
                $("#quick_view_body").html(response)
            }
        });
    });

    function deliveryFee(address) {
        $.ajax({
            url: "<?php echo e(route('delivery')); ?>", method: "get", data: {address: address}, success: function (res) {
                $('#checkout-cart').load(window.location.href + ' #checkout-cart');
            }
        });
    }

    $(document).ready(function () {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $(document).on('submit', '#generateOtpForm', function (e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('.input100').removeClass('is-invalid');
            var phone = $('#phone').val();
            $.ajax({
                method: "post",
                url: "<?php echo e(route('otp.generate')); ?>",
                data: {phone: phone},
                success: function (response) {
                    $('#phoneError').text("otp sent");
                    $('#phone').addClass('is-invalid');
                    setTimeout(function () {
                        $('#generateOtp').modal('hide');
                    }, 2000);
                    setTimeout(function () {
                        $('#loginOtp').modal('show');
                    }, 2000);
                    $('#loginOtpForm').append('<input type="hidden" id="user_id" name="user_id" value="' + response.user_id + '">')
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors.phone) {
                        $('#phoneError').text(errors.phone[0]);
                        $('#phone').addClass('is-invalid');
                    }
                }
            })
        });
        $(document).on('submit', '#loginOtpForm', function (e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('.input100').removeClass('is-invalid');
            var otp = $('#otp').val();
            var user_id = $('#user_id').val();
            $.ajax({
                method: "post",
                url: "<?php echo e(route('otp.getlogin')); ?>",
                data: {otp: otp, user_id: user_id},
                success: function (response) {
                    if (response.error) {
                        $('#otpError').text(response.error);
                        $('#otp').addClass('is-invalid');
                    } else if (response.success) {
                        location.reload();
                        setTimeout(function () {
                            $('#loginOtp').modal('hide');
                        }, 2000);
                    }
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors.otp || errors.user_id) {
                        $('#otpError').text(errors.otp[0]);
                        $('#otp').addClass('is-invalid');
                    }
                }
            })
        });
        $(document).on('click', '#btnCart', function (e) {
            e.preventDefault();
            let qty = $('#qty').val();
            let id = $(this).data('id');
            $.ajax({
                url: "<?php echo e(route('cart.add')); ?>", method: "get", data: {id: id, qty: qty}, success: function (res) {
                    $('#quick-view').modal('hide');
                    $('#cart_modal').modal('show');
                    $('#master_cart').load(window.location.href + '   #master_cart');
                    $('#cart_modal_products').load(window.location.href + '   #cart_modal_products');
                    if (res.status == 'success') {
                        Command: toastr["success"]("Product Added To Cart")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            });
        });
        $(document).on('click', '#cart_destroy', function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('cart.destroy')); ?>", method: "get", success: function (res) {
                    $('#master_cart').load(window.location.href + '   #master_cart');
                    $('#cart_products').load(window.location.href + '  #cart_products');
                    $('.cart-subTotal').load(window.location.href + '  .cart-subTotal');
                    if (res.status == 'success') {
                        Command: toastr["error"]("Products Deleted From Cart")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            });
        });
        $(document).on('change', '#updateCartQty', function (e) {
            e.preventDefault();
            let rowId = $(this).data('id');
            let qty = e.target.value;
            $.ajax({
                url: "<?php echo e(route('cart.update')); ?>",
                method: "get",
                data: {rowId: rowId, qty: qty},
                success: function (res) {
                    if (res.status == 'update') {
                        $('#master_cart').load(window.location.href + '   #master_cart');
                        $('#cart_products').load(window.location.href + '  #cart_products');
                        $('.cart-subTotal').load(window.location.href + '  .cart-subTotal');
                        $('#cart_modal_products').load(window.location.href + '   #cart_modal_products');
                        Command: toastr["info"]("Product Quantity Updated!")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            });
        });
        $(document).on('click', '#remove_cart_product', function (e) {
            e.preventDefault();
            let rowId = $(this).data('id');
            $.ajax({
                url: "<?php echo e(route('cart.delete')); ?>", method: "get", data: {id: rowId}, success: function (res) {
                    if (res.status == 'deleted') {
                        $('#master_cart').load(window.location.href + '   #master_cart');
                        $('#cart_products').load(window.location.href + '  #cart_products');
                        $('.cart-subTotal').load(window.location.href + '  .cart-subTotal');
                        $('#cart_modal_products').load(window.location.href + '   #cart_modal_products');
                        Command: toastr["error"]("Product Deleted From Cart!")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            })
        });
        $("#formCoupon").submit(function (event) {
            event.preventDefault();
            var form = $("#formCoupon")[0];
            var data = new FormData(form);
            $("#btnCoupon").text("Applying Coupon");
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('coupon.apply')); ?>",
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.message) {
                        var option = '';
                        option = '<td class="border-top-0">Discount</td>';
                        option += '<td class="text-end border-top-0">' + 'Tk. ' + response.coupon + '</td>';
                        $('#couponTest').empty();
                        $('#couponTest').append(option);
                        var subtotal = response.total;
                        var discount = response.coupon;
                        var totalAmount = response.total - response.coupon;
                        var total1 = '';
                        total1 = '<td class="fs-20 border-top-0">Total</td>';
                        total1 += '<td class="text-end fs-20 border-top-0">' + 'Tk. ' + totalAmount + '</td>';
                        console.log(response.total - response.coupon);
                        $('#total').empty();
                        $('#total').append(total1);
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-right',
                            iconColor: 'white',
                            customClass: {popup: 'colored-toast'},
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true
                        })
                        Toast.fire({icon: 'success', title: response.message})
                        $("#btnCoupon").text("Coupon Applied")
                        document.getElementById('formCoupon').reset();
                    } else if (response.error) {
                        $("#output").text(response.error);
                        $("#btnCoupon").text("Apply Coupon")
                        $("#formCoupon")[0].reset();
                    }
                }
            })
        })
    })</script>
<?php /**PATH C:\xampp\htdocs\wsc\resources\views/website/wsc_js.blade.php ENDPATH**/ ?>