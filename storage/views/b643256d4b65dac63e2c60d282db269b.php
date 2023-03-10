<ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown"
        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="<?php echo e(asset('backend/assets/img/user.png')); ?>" class="user-img-radious-style">
        <span class="d-sm-none d-lg-inline-block"></span></a>
      <div class="dropdown-menu dropdown-menu-right pullDown">
        <div class="dropdown-title"><?php echo e(Auth::user()->name); ?></div>

        <a href="profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
        </a>

        <a href="timeline.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i>Activities
        </a>

        <a href="#" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i>Settings
        </a>

        <div class="dropdown-divider"></div>
        <a href="<?php echo e(route('health.logout')); ?>" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i>Logout
        </a>
      </div>
    </li>
  </ul>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/includes/header.blade.php ENDPATH**/ ?>