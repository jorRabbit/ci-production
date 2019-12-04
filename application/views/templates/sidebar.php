<div class="sidebar">
    <div class="menu-control toggle-sidebar">
        <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i> AMS | PROD</a>
        <i class="fa fa-bars navicon"></i>
    </div>

    <ul class="menu">
        <li class="submenu">
            <a href="<?= site_url('home'); ?>" class="<?php if ($grup == 'Home') echo 'active' ?>">
                <div>
                    <i class="menu-icon fa fa-th-large"></i>
                    <span class="menu-title">Dashboard</span>
                </div>
            </a>
        </li>
        <!-- Status Level -->
        <?php if (menu('user_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('user'); ?>" class="<?php if ($grup == 'User') echo 'active' ?>">
                    <div>
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-title">User</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>
        <!-- End Status Level -->

        <!-- Status Level -->
        <?php if (menu('level_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('level'); ?>">
                    <div>
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-title">Level</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>
        <!-- End Status Level -->

        <!-- Status Level -->
        <?php if (menu('produk_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('product'); ?>">
                    <div>
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-title">Produk</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>
        <!-- End Status Level -->

        <!-- Status Level -->
        <?php if (menu('event_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('event'); ?>">
                    <div>
                        <i class="menu-icon fa fa-magic"></i>
                        <span class="menu-title">Event</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>
        <!-- End Status Level -->

        <?php if (menu('request_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('request'); ?>">
                    <div>
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-title">Request</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>

        <?php if (menu('diskusi_view')) : ?>
            <li class="submenu">
                <a href="<?= site_url('diskusi'); ?>">
                    <div>
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-title">Forum Diskusi</span>
                    </div>
                </a>
            </li>
        <?php endif; ?>

        <br>
        <br>
        <br>
        <br>
        <li class="submenu">
            <a href="<?= site_url('logout'); ?>">
                <div>
                    <i class="fa fa-sign-out"></i>
                    <span class="menu-title">Logout</span>
                </div>
            </a>
        </li>
    </ul>
</div>