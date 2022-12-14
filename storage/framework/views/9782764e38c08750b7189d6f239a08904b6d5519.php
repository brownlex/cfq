<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#"><?php echo e($titlePage); ?></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              <?php echo e(__('Stats')); ?>

            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              <?php echo e(__('Some Actions')); ?>

            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#"><?php echo e(__('Mike John responded to your email')); ?></a>
            <a class="dropdown-item" href="#"><?php echo e(__('You have 5 new tasks')); ?></a>
            <a class="dropdown-item" href="#"><?php echo e(__('You\'re now friend with Andrew')); ?></a>
            <a class="dropdown-item" href="#"><?php echo e(__('Another Notification')); ?></a>
            <a class="dropdown-item" href="#"><?php echo e(__('Another One')); ?></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              <?php echo e(__('Account')); ?>

            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>"><?php echo e(__('Profile')); ?></a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><?php echo e(__('Log out')); ?></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php /**PATH C:\xampp\htdocs\cfq\resources\views/layouts/navbars/navs/auth.blade.php ENDPATH**/ ?>