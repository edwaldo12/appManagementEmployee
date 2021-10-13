<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php
                $login = $this->session->userdata('user');
                if (empty($login)) {
                ?>
                    <li class='nav-item'>
                        <a href='<?= site_url('guest/login') ?>' class='nav-link'>
                            <i class='nav-icon fas fa-th'></i>
                            <p>
                                Login
                            </p>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a href='<?= site_url('guest/ajukan_lamaran') ?>' class='nav-link'>
                            <i class='nav-icon fas fa-envelope'></i>
                            <p>
                                Ajukan Lamaran
                            </p>
                        </a>
                    </li>
                <?php } else { ?>
                    <?php if ($login['role'] == "Admin") { ?>

                    <?php } else { ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>