<?php
	$category = DB::table('categories')->orderBy('id','ASC')->get();

?>

<style>
    .span{
        position: left;
    }
</style>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo e(URL('/')); ?>" class="logo d-flex align-items-center">
        <img alt="image" src="<?php echo e(asset('frontend/assets/img/logo3.png')); ?>" class="header-logo" />
        <span>VBEHS</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">
            <?php if(session()->get('')== ''): ?>
            Home
            <?php endif; ?></a></li>

        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">EHSS</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Activity</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="<?php echo e(route('submit_form')); ?>">Submit Form</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/includes/header.blade.php ENDPATH**/ ?>