<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('health.home')); ?>"> <img alt="image" src="<?php echo e(asset('backend/assets/img/logo.png')); ?>" class="header-logo" /> <span
                class="logo-name">EHS</span>
            </a>
          </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="<?php echo e(route('health.dashboard')); ?>" class="nav-link">
                    <i data-feather="monitor"></i><span>Dashboard</span>
                </a>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Masterlist Certificates</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('masterlist')); ?>">All Masterlist</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Incident Report</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('incident')); ?>">All Incident Report</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Medicine Logbook</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('medical_logbook')); ?>">All Medicine Logbook</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Vital Signs Monitoring</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('vital_monitoring')); ?>">All Vital Signs Monitoring</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Clinic Visits</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('clinic_visits')); ?>">All Clinic Visits</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>New Hired Employees</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('new_hired_employees')); ?>">All New Hired Employees</a></li>
                </ul>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Website Pages</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Health Events</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('health_events')); ?>">All Health Events</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>First Aid Trainings</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('first_aid_trainings')); ?>">All First Aid Trainings</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Schedule for Vaccination</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('schedule_updates')); ?>">All Schedule Vaccination</a></li>
                </ul>
            </li>
        </ul>


    </aside>
  </div>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/includes/sidebar.blade.php ENDPATH**/ ?>