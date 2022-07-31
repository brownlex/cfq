

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Roles</h4>
                            <p class="card-category">Manage your roles here</p>
                            <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary btn-sm float-right">Add role</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Name</th>
                                            <th width="3%" colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td><?php echo e($role->id); ?></td>
                                                <td><?php echo e($role->name); ?></td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="<?php echo e(route('roles.show', $role->id)); ?>">Show</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.edit', $role->id)); ?>">Edit</a>
                                                </td>
                                                <td>
                                                    <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

                                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                                    <?php echo Form::close(); ?>

                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex">
                                <?php echo $roles->links(); ?>

                            </div>
                    

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'roles', 'titlePage' => __('Roles')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/roles/index.blade.php ENDPATH**/ ?>