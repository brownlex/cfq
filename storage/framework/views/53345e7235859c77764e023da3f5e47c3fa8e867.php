

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase">
                    <i class="material-icons">looks_two</i> <?php echo e(__(' Rate your experience for Ticket# ')); ?><?php echo e($id); ?></h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><img src="<?php echo e(asset('material')); ?>/img/bad.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center"><?php echo e(__('bad')); ?></h4></a>
                </div>
            
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><img src="<?php echo e(asset('material')); ?>/img/okay.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center"><?php echo e(__('okay')); ?></h4></a>
                </div>
       
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><img src="<?php echo e(asset('material')); ?>/img/good.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center"><?php echo e(__('good')); ?></h4></a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><img src="<?php echo e(asset('material')); ?>/img/great.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center"><?php echo e(__('great')); ?></h4></a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/rating.blade.php ENDPATH**/ ?>