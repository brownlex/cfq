

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="<?php echo e(route('roles.update', $role->id)); ?>" autocomplete="off"
                        class="form-horizontal">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title"><?php echo e(__('Update role')); ?></h4>
                                <p class="card-category"><?php echo e(__('Edit role and manage permissions')); ?></p>
                            </div>
                            <div class="card-body ">

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"><?php echo e(__('Name')); ?></label>
                                    <div class="col-sm-7">
                                        <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                            <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                                name="name" id="input-name" type="text"
                                                placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($role->name); ?>"
                                                required="true" aria-required="true" />
                                            <?php if($errors->has('name')): ?>
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name"><?php echo e($errors->first('name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <tr>
                                                  <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                                  <th scope="col" width="20%">Name</th>
                                                  <th scope="col" width="1%">Guard</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                      <td>
                                                        <input type="checkbox" 
                                                        name="permission[<?php echo e($permission->name); ?>]"
                                                        value="<?php echo e($permission->name); ?>"
                                                        class='permission'
                                                        <?php echo e(in_array($permission->name, $rolePermissions) 
                                                            ? 'checked'
                                                            : ''); ?>>
                                                    </td>
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
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                                <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'roles', 'titlePage' => __('Role')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/roles/edit.blade.php ENDPATH**/ ?>