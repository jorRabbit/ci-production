<nav class="navbar navbar-default">
    <div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-dashboard"></i> AMS | PROD</a>
            </div>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= loginAs($_SESSION['userId'])->username ?><span class="caret"></span></a>
                    <ul class="dropdown-menu user-info">
                        <li class="dropdown-title-bar">
                            <img src="<?= base_url('assets/images/profile.jpg') ?>" class="profile-img">
                        </li>
                        <li>
                            <div class="navbar-login">
                                <h4 class="user-name"><?= loginAs($_SESSION['userId'])->username ?></h4>
                                <p><?= loginAs($_SESSION['userId'])->email ?> </p>
                                <div class="btn-group margin-bottom-2x" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-user"></i> <a href="<?= site_url('home') ?>">Profile</a></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> <a href="<?= site_url('logout') ?>">Logout</a></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>