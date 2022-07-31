

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Users</h4>
                            <p class="card-category">Manage your users here</p>
                            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm float-right">Add new user</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col" width="1%">#</th>
                                            <th scope="col" width="15%">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" width="10%">Username</th>
                                            <th scope="col" width="10%">Roles</th>
                                            <th scope="col" width="1%" colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($user->id); ?></th>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->username); ?></td>
                                                <td>
                                                    <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="badge bg-primary"><?php echo e($role->name); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td><a href="<?php echo e(route('users.show', $user->id)); ?>"
                                                        class="btn btn-warning btn-sm">Show</a>
                                                </td>
                                                <td><a href="<?php echo e(route('users.edit', $user->id)); ?>"
                                                        class="btn btn-info btn-sm">Edit</a></td>
                                                <td>
                                                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']); ?>

                                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                                    <?php echo Form::close(); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex">
                                <?php echo $users->links(); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cfq\resources\views/users/index.blade.php ENDPATH**/ ?>