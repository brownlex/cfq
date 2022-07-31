<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <?php echo e(__('Invoice System')); ?>

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <i class="material-icons">dashboard</i>
                    <p><?php echo e(__('Dashboard')); ?></p>
                </a>
            </li>
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <li class="nav-item<?php echo e($activePage == 'users' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('users.index')); ?>" >
                <i class="material-icons">people</i>
                <p><?php echo e(__('Users')); ?></p>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'roles' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
                <i class="material-icons">workspaces</i>
                <p><?php echo e(__('Roles')); ?></p>
              </a>
            </li>
            <?php endif; ?>
            <li class="nav-item<?php echo e($activePage == 'invoices' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('invoices.index')); ?>" >
                <i class="material-icons">description</i>
                <p><?php echo e(__('Invoices')); ?></p>
              </a>
            </li>
            <li class="nav-item <?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
                    <i><img style="width:25px" src="<?php echo e(asset('material')); ?>/img/new_logo.png"></i>
                    <p><?php echo e(__('Profile')); ?>

                    </p>
                </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('table')); ?>">
                    <i class="material-icons">content_paste</i>
                    <p><?php echo e(__('Table List')); ?></p>
                </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'notifications' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('notifications')); ?>">
                    <i class="material-icons">notifications</i>
                    <p><?php echo e(__('Notifications')); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>