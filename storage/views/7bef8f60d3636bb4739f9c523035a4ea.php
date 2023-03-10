
<style>
    .row content {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>First Aid Training</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('frontend/assets/img/logo3.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('frontend/assets/img/logo3.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/css/simple-datatables.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">

</head>

<body>

  <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo e(('/')); ?>">Home</a></li>
          <li><a href="<?php echo e(URL::to('policies')); ?>">Policies</a></li>
          <li><a href="<?php echo e(route('healthpage')); ?>">Health Events</a></li>
          <li><a href="<?php echo e(route('covid_updates')); ?>">Covid Updates</a></li>
        </ol>
      </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>First Aid Training</h2>
            </div>



        </div>
    </section>


  </main>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo e(asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/js/simple-datatables.js')); ?>"></script>


  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/first_aid_training.blade.php ENDPATH**/ ?>