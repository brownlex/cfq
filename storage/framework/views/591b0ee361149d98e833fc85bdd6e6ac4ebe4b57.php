

<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h3 class="card-title">Notifications</h3>
        
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h4 class="card-title">Notifications States</h4>
            
            <div class="alert alert-warning">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>This is a notification with close button.</span>
            </div>
            <div class="alert alert-warning alert-with-icon" data-notify="container">
              <i class="material-icons" data-notify="icon">add_alert</i>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span data-notify="message">This is a notification with close button and icon.</span>
            </div>
            <div class="alert alert-warning alert-with-icon" data-notify="container">
              <i class="material-icons" data-notify="icon">add_alert</i>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
            </div>
          </div>
         
        </div>
      </div>
      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inv_sys\resources\views/pages/notifications.blade.php ENDPATH**/ ?>