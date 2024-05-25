
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


<script src="<?php echo e(asset('/')); ?>website/assets/js/tooltip%26popover.js"></script>

<!-- SWITCHER JS -->
<script src="<?php echo e(asset('/')); ?>website/assets/switcher/js/switcher.js"></script>



<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<?php echo Toastr::message(); ?>










<div class="modal fade test" id="quick-view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header text-danger">
                <h5 class="modal-title p-title"></h5>
                <button  class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center" id="quick_view_body">

            </div>
        </div>
    </div>
</div>

<script>
    $('.quick-view').click(function () {
        // var src = $(this).attr('src');
        // var title = $(this).attr('alt');
        var productId = $(this).attr('id');
        $.ajax({
            type: "GET",
            url:"<?php echo e(route('productQuickView')); ?>",
            data: {id: productId},
            DataType: "JSON",
            success: function (response) {
                $("#quick_view_body").html(response)
            }
        });
        //
        // $('.test').modal('show');
        // $('#popup-img').attr('src',src);
        // $('.p-title').text(title);
    });

    // Delivery Charge Change
    function deliveryFee(address)
    {
        $.ajax({
            url : "<?php echo e(route('delivery')); ?>",
            method : "get",
            data : { address:address },
            success : function (res) {
                $('#checkout-cart').load(window.location.href+' #checkout-cart');
            }
        });
    }

    $(document).ready(function () {
        // Cart Add
        $(document).on('click','#btnCart',function (e) {
            e.preventDefault();
            let qty = $('#qty').val();
            let id = $(this).data('id');
            $.ajax({
                url : "<?php echo e(route('cart.add')); ?>",
                method: "get",
                data: { id:id,qty:qty },
                success: function (res) {
                    $('#quick-view').modal('hide');
                    // $('#cart_modal').empty();
                    $('#cart_modal').modal('show');
                    $('#master_cart').load(window.location.href+'   #master_cart');
                    $('#cart_modal_products').load(window.location.href+'   #cart_modal_products');
                    if (res.status == 'success')
                    {
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

        // Cart Destroy
        $(document).on('click','#cart_destroy',function (e) {
            e.preventDefault();
            $.ajax({
               url: "<?php echo e(route('cart.destroy')); ?>",
                method: "get",
                success : function (res) {
                    $('#master_cart').load(window.location.href+'   #master_cart');
                    $('#cart_products').load(window.location.href+'  #cart_products');
                    $('.cart-subTotal').load(window.location.href+'  .cart-subTotal');
                    if (res.status == 'success')
                    {
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

        // Cart Update
        $(document).on('change','#updateCartQty',function (e) {
            e.preventDefault();
            let rowId = $(this).data('id');
            let qty = e.target.value;
            $.ajax({
                url : "<?php echo e(route('cart.update')); ?>",
                method : "get",
                data : { rowId:rowId, qty:qty },
                success : function (res) {
                    if (res.status == 'update')
                    {
                        $('#master_cart').load(window.location.href+'   #master_cart');
                        $('#cart_products').load(window.location.href+'  #cart_products');
                        $('.cart-subTotal').load(window.location.href+'  .cart-subTotal');
                        $('#cart_modal_products').load(window.location.href+'   #cart_modal_products');

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

        // Cart Remove
        $(document).on('click','#remove_cart_product',function (e) {
            e.preventDefault();
            let rowId = $(this).data('id');
            $.ajax({
                url : "<?php echo e(route('cart.delete')); ?>",
                method : "get",
                data : {id:rowId},
                success : function (res) {
                    if (res.status == 'deleted')
                    {
                        $('#master_cart').load(window.location.href+'   #master_cart');
                        $('#cart_products').load(window.location.href+'  #cart_products');
                        $('.cart-subTotal').load(window.location.href+'  .cart-subTotal');
                        $('#cart_modal_products').load(window.location.href+'   #cart_modal_products');
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

        // Coupon Apply
        $("#formCoupon").submit(function (event) {
            event.preventDefault();

            var form = $("#formCoupon")[0];
            var data = new FormData(form);
            $("#btnCoupon").text("Applying Coupon");

            $.ajax({
                type: "POST",
                url : "<?php echo e(route('coupon.apply')); ?>",
                data: data,
                dataType: "JSON",
                processData: false,
                contentType : false,
                success: function (response) {
                    if (response.message)
                    {
                        var option = '';
                        option = '<td class="border-top-0">Discount</td>';
                        option += '<td class="text-end border-top-0">'+ 'Tk. '+ response.coupon + '</td>';

                        $('#couponTest').empty();
                        $('#couponTest').append(option);


                        var subtotal = response.total;
                        var discount = response.coupon;
                        var totalAmount = response.total - response.coupon;


                        var total1 = '';
                        total1 = '<td class="fs-20 border-top-0">Total</td>';
                        total1 += '<td class="text-end fs-20 border-top-0">'+ 'Tk. '+ totalAmount +'</td>';
                        console.log(response.total - response.coupon);
                        $('#total').empty();
                        $('#total').append(total1);

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
                            icon: 'success',
                            title: response.message
                        })
                        $("#btnCoupon").text("Coupon Applied")
                        document.getElementById('formCoupon').reset();
                    }
                    else if(response.error)
                    {
                        $("#output").text(response.error);
                        $("#btnCoupon").text("Apply Coupon")
                        $("#formCoupon")[0].reset();
                    }
                }
            })
        })
    })
</script>
<?php /**PATH /home/u875892346/domains/wsc.com.bd/public_html/wsc/resources/views/website/wsc_js.blade.php ENDPATH**/ ?>