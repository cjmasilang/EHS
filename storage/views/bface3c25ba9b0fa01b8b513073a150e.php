<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="<?php echo e(asset('backend/assets/img/logo.png')); ?>" class="header-logo" /> <span
            class="logo-name">EHS</span>
        </a>
      </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="<?php echo e(route('admin.home')); ?>" class="nav-link">
                <i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Pages</li>
            <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="user"></i><span>User Management</span></a>

            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('user_management')); ?>">All User</a></li>
                <li><a class="nav-link" href="<?php echo e(route('add.user')); ?>">Add User</a></li>
            </ul>

            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="shopping-bag"></i><span>Department</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('department')); ?>">All Department</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="tag"></i><span>Categories</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('categories')); ?>">All Categories</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('subcategories')); ?>">All Sub Categories</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="tag"></i><span>Tags</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('tags')); ?>">All Tags</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('subtags')); ?>">All Sub Tags</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="layout"></i><span>News Management</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('news_management')); ?>">All News</a></li>
                    <li><a href="<?php echo e(route('add.news')); ?>">Add News</a></li>
                </ul>
            </li>

            <li class="menu-header">Settings</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="settings"></i><span>SEO</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(('search_engine_optimization')); ?>">Search Engine Optimization</a></li>
                </ul>
            </li>

            <li class="menu-header">Gallery</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="image"></i><span>Gallery</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('photo_gallery')); ?>">Activity Gallery</a></li>
                    <li><a href="<?php echo e(route('video_gallery')); ?>">Video Gallery</a></li>
                </ul>
            </li>

        </ul>
    </aside>
  </div>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>