

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title"><?php echo e(ucfirst($role->name)); ?> Role</h4>
                            <p class="card-category"><?php echo e(__('Assigned permissions')); ?></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th scope="col" width="20%">Name</th>
                                                <th scope="col" width="1%">Guard</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($permission->name); ?></td>
                                                    <td><?php echo e($permission->guard_name); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn btn-info">Edit</a>
                            <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'roles', 'titlePage' => __('Role')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/roles/show.blade.php ENDPATH**/ ?>