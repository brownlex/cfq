

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Show user</h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><?php echo e(__('Name')); ?></label>
                                <div class="col-sm-7">
                                    <div>
                                        <?php echo e($user->name); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><?php echo e(__('Email')); ?></label>
                                <div class="col-sm-7">

                                    <div>
                                        <?php echo e($user->email); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><?php echo e(__('Username')); ?></label>
                                <div class="col-sm-7">

                                    <div>
                                        <?php echo e($user->username); ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info">Edit</a>
                            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('User')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/users/show.blade.php ENDPATH**/ ?>