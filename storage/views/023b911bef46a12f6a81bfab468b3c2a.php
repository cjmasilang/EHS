<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('safety.home')); ?>"> <img alt="image" src="<?php echo e(asset('backend/assets/img/logo.png')); ?>" class="header-logo" /> <span
                class="logo-name">EHS</span>
            </a>
          </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="<?php echo e(route('safety.dashboard')); ?>" class="nav-link">
                    <i data-feather="monitor"></i><span>Dashboard</span>
                </a>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Accident Classification</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('accident_classification')); ?>">All Accident Classification</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Unsafe Act & Condition</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('unsafe')); ?>">All Unsafe Act</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Shift</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('shift')); ?>">All Shift</a></li>
                </ul>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Checklist</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>7s Audit Form</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('audit_form')); ?>">All 7s Audit Form</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Workplace Inspection</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('workplace_inspection_checklist')); ?>">All Workplace Inspection</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>PTW Register</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('ptw_register')); ?>">All PTW Register</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Monthly Fire Inspection</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('monthly_fire_extinguisher_inspection')); ?>">All Monthly Fire Inspection</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>EHS Policies Manual</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('ehs_policies_manual')); ?>">All EHS Policies Manual</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Investigation Report</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('aiir')); ?>">All Investigation Report</a></li>
                </ul>
            </li>

        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Reports</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>User Reports</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">All User Report</a></li>
                </ul>
            </li>

        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Settings</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Add 7s Audit Form</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('audit_form_checklist')); ?>">All Audit Form Checklist</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i><span>Add Workplace Inspection</span></a>

                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('monitoring_checklist')); ?>">All Workplace Inspection</a></li>
                </ul>
            </li>
        </ul>

    </aside>
</div>
<?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/includes/sidebar.blade.php ENDPATH**/ ?>