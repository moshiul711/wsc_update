


<?php $__env->startSection('main-content'); ?>
    <div class="row mt-2">
        <div class="col-lg-12 col-md-12">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Contact Us</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-6">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <h6 class="card-title">Feel Free to Contact With us...</h6>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="inputPassword3" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <h6 class="card-title">Google Map Location</h6>
                </div>
                <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.1391951025734!2d90.39105636953764!3d23.8698674986618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41bbb5acb1f%3A0xeb8a49fa5d1d1637!2sWorkstation%20Communication!5e0!3m2!1sen!2sbd!4v1699514479173!5m2!1sen!2sbd"
                            style="border:0; width: 100%; height: 450px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\bangladeshTechCom\resources\views/website/home/contact.blade.php ENDPATH**/ ?>