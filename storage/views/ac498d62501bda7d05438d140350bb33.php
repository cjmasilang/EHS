<?php echo $__env->yieldContent('scrinpt'); ?>

    <!-- General JS Scripts -->
    <script src="<?php echo e(asset('backend/assets/js/app.min.js')); ?>"></script>

    <!-- JS Libraies -->
    <script src="<?php echo e(asset('backend/assets/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/bundles/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/bundles/jquery-ui/jquery-ui.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('backend/assets/js/page/index.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/page/datatables.js')); ?>"></script>

    <!-- Template JS File -->
    <script src="<?php echo e(asset('backend/assets/js/scripts.js')); ?>"></script>

    <!-- Custom JS File -->
    <script src="<?php echo e(asset('backend/assets/js/custom.js')); ?>"></script>

    <!-- Script Message -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!-- Alert Message Toastr -->
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

    <!-- summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 150
        });
    </script>

<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/admin/includes/script.blade.php ENDPATH**/ ?>