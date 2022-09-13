

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center " style="color: #fff !important;"><i
                    class="material-icons">looks_two</i><?php echo e(__(' Enter Your First Name:')); ?></h1>
            </div>

        </div>
        <form method="post" action="<?php echo e(route('vistor.create.step.two1')); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <div class="container"
                style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px; align: top;">
                <br>
                <div class="row">
                    <label class="col-sm-3 col-form-label text-right"
                        style="color: rgb(0, 0, 0) !important;"><h3><?php echo e(__('First Name:')); ?></h3></label>
                    <div class="col-sm-3 text-left">
                    <h3><input type="text" class="use-keyboard-input<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                            style="width: 255px; border: 1px solid #d2d2d2; border-top: hidden; border-right: hidden; border-left: hidden"
                            id="name" name="name" required></h3>
                        <?php if($errors->has('name')): ?>
                            <span id="name-error" class="error text-danger"
                                for="name"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
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
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/create-step-twov.blade.php ENDPATH**/ ?>