<script>
    <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type','info')); ?>"
    switch(type){
       case 'info':
       toastr.info(" <?php echo e(Session::get('message')); ?> ");
       break;

       case 'success':
       toastr.success(" <?php echo e(Session::get('message')); ?> ");
       break;

       case 'warning':
       toastr.warning(" <?php echo e(Session::get('message')); ?> ");
       break;

       case 'error':
       toastr.error(" <?php echo e(Session::get('message')); ?> ");
       break;
    }
    <?php endif; ?>
   </script>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/admin/includes/alert.blade.php ENDPATH**/ ?>