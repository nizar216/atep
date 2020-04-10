<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_responsive.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Map Container -->

        <div class="row">
        <div class="container fill_height">
        <img src="<?php echo e(asset('assets/images/Donate.jpg')); ?>" usemap="#image-map" style="display: block;margin-left: auto;margin-right: auto">

        <map name="image-map">
            <area target="" alt="faculte" title="faculte" href="http://www.fphm.rnu.tn" coords="643,1162,63" shape="circle">
            <area target="" alt="login" title="login" href="/login" coords="800,1158,66" shape="circle">
            <area target="" alt="don" title="donate" href="#don" coords="155,783,337,1054" shape="rect">
        </map>
        </div>
        </div>

        <!-- Contact Us -->

        <div class="row">

            <div class="col-lg-6 contact_col">
            <a id="don"></a>
                <div class="contact_contents">
                    <h1>How to donate</h1>
                    <p>There are many ways to donate. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                    <div>
                        <p>(800) 686-6688</p>
                        <p>info.deercreative@gmail.com</p>
                    </div>
                    <div>
                        <p>mm</p>
                    </div>
                    <div>
                        <p>Open hours: 8.00-18.00 Mon-Fri</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>