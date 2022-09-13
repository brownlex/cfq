

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase"><?php echo e(__('HI ')); ?><?php echo e($client->name); ?>

                    <?php echo e(__('Please Select Service')); ?></h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h3>Submit Claim<br><i
                            class="material-icons">post_add</i></h3></a>
                </div>

                <div class="col-md-4 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info"><h3>Medical Provider<br><i
                            class="material-icons">medical_services</i></h3></a>
                </div>

                <div class="col-md-4 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info"><h3>Enquiry  ?<br><i
                            class="material-icons">psychology_alt</i></h3></a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/service.blade.php ENDPATH**/ ?>