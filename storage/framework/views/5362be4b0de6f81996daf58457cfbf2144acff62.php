

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center"><?php echo e(__('Claim')); ?></h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px;">
            <br>
            <br>
            <br>
            <div class="row">
                <label class="col-sm-3 col-form-label text-right"><?php echo e(__('ID Number:')); ?></label>
                <div class="col-sm-7 text-left">

                    <input class="js-kioskboard-input" data-kioskboard-type="numpad" data-kioskboard-placement="bottom" />

                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Next')); ?></button>
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-default"><?php echo e(__('Back')); ?></a>
                </div>
            </div>
            <br>
            <br>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/claim.blade.php ENDPATH**/ ?>