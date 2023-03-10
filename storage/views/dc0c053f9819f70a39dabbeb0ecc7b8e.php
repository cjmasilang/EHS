<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Enviromental Health Safety & Security</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/app.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/bundles/datatables/datatables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/components.css')); ?>">

    <!-- Checkbox -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/bundles/pretty-checkbox/pretty-checkbox.min.css')); ?>">

    <!-- Alert Messages -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <!-- include libraries(jQuery, bootstrap) For Summer Editor  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/custom.css')); ?>">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo e(asset('backend/assets/img/logo.png')); ?>' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                    <button class="btn" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </form>
            </li>
          </ul>
        </div>

       <?php echo $__env->make('safety.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </nav>

      <?php echo $__env->make('safety.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="main-content">
        <?php echo $__env->yieldContent('safety-content'); ?>
    </div>

        <?php echo $__env->make('safety.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>

  <?php echo $__env->make('safety.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>



</html>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/safetyHome.blade.php ENDPATH**/ ?>