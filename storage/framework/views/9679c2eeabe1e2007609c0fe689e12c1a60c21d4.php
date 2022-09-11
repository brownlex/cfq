

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center " style="color: #fff !important;"><?php echo e(__('Vistor')); ?></h1>
            </div>

        </div>
        <div class="container" style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px; align: top;">
            <br>
            <div class="row">
                <label class="col-sm-3 col-form-label text-right" style="color: rgb(0, 0, 0) !important;"><?php echo e(__('ID Number:')); ?></label>
                <div class="col-sm-3 text-left">
                    <input type="text" class="use-keyboard-input">
                </div>
                <div class="col-sm-3 text-center">
                    <button type="submit" class="btn btn-success"> <i class="material-icons">east</i></button>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="<?php echo e(route('landing')); ?>" class="btn btn-default"><i class="material-icons">undo</i></a>
                </div>
            </div>
            <br>


        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/vistor.blade.php ENDPATH**/ ?>