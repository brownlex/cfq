

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form method="post" action="<?php echo e(route('permissions.store')); ?>" autocomplete="off" class="form-horizontal">
                  <?php echo csrf_field(); ?>
                  
                  <div class="card ">
                    <div class="card-header card-header-info">
                      <h4 class="card-title"><?php echo e(__('Add new permission')); ?></h4>
                      <p class="card-category"><?php echo e(__('Information')); ?></p>
                    </div>
                    <div class="card-body ">
                   
                      <div class="row">
                        <label class="col-sm-2 col-form-label"><?php echo e(__('Name')); ?></label>
                        <div class="col-sm-7">
                          <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                            <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="input-name" type="text" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>"  required="true" aria-required="true"/>
                            <?php if($errors->has('name')): ?>
                              <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary"><?php echo e(__('Save permission')); ?></button>
                      <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-default"><?php echo e(__('Back')); ?></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('Permissions')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/permissions/create.blade.php ENDPATH**/ ?>