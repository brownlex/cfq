

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center"><?php echo e(__('Feedback')); ?></h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(188, 233, 254, 0.785);  border-radius: 25px;">
            <br>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/feedback.blade.php ENDPATH**/ ?>