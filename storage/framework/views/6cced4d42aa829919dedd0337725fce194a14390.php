

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase"><?php echo e(_('Hi ')); ?><?php echo e($vistor->name); ?>

                    <?php echo e(__(', Who Are You Visiting ? ')); ?></h1>
            </div>

        </div>
        <br>
        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">

            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>CEO's OFFICE<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>HR & STRATEGY<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>CORPORATE AFFAIRS<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>CLAIMS<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>CALL CENTRE<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>PROCUREMENT<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>INFORMATION TECH<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>FINANCE<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>Cafeteria<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>LEGAL<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>MEDICAL PROVIDER<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-info "><h4>DR Mara<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/visting.blade.php ENDPATH**/ ?>