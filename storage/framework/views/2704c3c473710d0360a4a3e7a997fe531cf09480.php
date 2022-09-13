

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center " style="color: #fff !important;"><i
                    class="material-icons">looks_4</i><?php echo e(__(' Enter Your Cellphone:')); ?></h1>
            </div>

        </div>
        <form method="post" action="<?php echo e(route('vistor.create.step.two5')); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <div class="container"
                style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px; align: top;">
                <br>
                <div class="row">
                    <label class="col-sm-3 col-form-label text-right"
                        style="color: rgb(0, 0, 0) !important;"><h3><?php echo e(__('Cellphone:')); ?></h3></label>
                    <div class="col-sm-3 text-left">
                    <h3><input type="number" class="use-keyboard-input<?php echo e($errors->has('cellphone') ? ' is-invalid' : ''); ?>"
                        style="width: 255px; border: 1px solid #d2d2d2; border-top: hidden; border-right: hidden; border-left: hidden"
                         id="cellphone"  name="cellphone" required></h3>

                         <?php if($errors->has('cellphone')): ?>
                         <span id="cellphone-error" class="error text-danger"
                             for="cellphone"><?php echo e($errors->first('cellphone')); ?></span>
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

<?php echo $__env->make('layouts.app2', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/create-step-two2v.blade.php ENDPATH**/ ?>