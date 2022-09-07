

<?php $__env->startSection('content'); ?>
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center"><?php echo e(__('Vistor')); ?></h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(188, 233, 254, 0.785);  border-radius: 25px;">
            <br>
            <form class="form-inline">
                <div class="form-group mb-2">
                  <label for="staticEmail2" class="sr-only">Email</label>
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Password</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
              </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/auth/vistor.blade.php ENDPATH**/ ?>