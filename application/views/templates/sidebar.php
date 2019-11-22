<div class="sidebar">
    <div class="menu-control toggle-sidebar">
        <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i> Flat Admin</a>
        <i class="fa fa-bars navicon"></i>
    </div>

    <ul class="menu">
        <li class="submenu">
            <a href="index.html" class="active">
                <div>
                    <i class="menu-icon fa fa-th-large"></i>
                    <span class="menu-title">Dashboard</span>
                </div>
            </a>
        </li>
        <li class="submenu">
            <a href="<?= site_url('user'); ?>">
                <div>
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-title">User</span>
                </div>
            </a>
        </li>
        <li class="submenu">
            <a href="<?= site_url('DemoController/table'); ?>">
                <div>
                    <i class="menu-icon fa fa-table"></i>
                    <span class="menu-title">Level</span>
                </div>
            </a>
        </li>
        <li class="submenu">
            <a href="<?= site_url('DemoController/form'); ?>">
                <div>
                    <i class="menu-icon fa fa-file-text-o"></i>
                    <span class="menu-title">Produk</span>
                </div>
            </a>
        </li>

        <li class="submenu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <div>
                    <i class="menu-icon fa fa-slack"></i>
                    <span class="menu-title">Request</span>
                </div>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?= site_url('DemoController/login'); ?>">
                        <div>
                            <i class="menu-icon fa fa-sign-in"></i>
                            <span class="menu-sub-title">Login</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('DemoController/register'); ?>">
                        <div>
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-sub-title">Register</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="submenu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <div>
                    <i class="menu-icon fa fa-magic"></i>
                    <span class="menu-title">Event</span>
                </div>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="custom-dashboard.html">
                        <div>
                            <i class="menu-icon fa fa-bar-chart"></i>
                            <span class="menu-sub-title">Diskusi</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>