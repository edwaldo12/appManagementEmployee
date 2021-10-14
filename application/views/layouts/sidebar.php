<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>adminlte/dist/img/AdminLTELogo.png" alt="Simpeg Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Simpeg</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php if ($this->session->has_userdata('user')) { ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Welcome, <?= $this->session->userdata('user')['nama'] ?></a>
                </div>
            </div>
        <?php } ?>

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
                        <li class='nav-item'>
                            <a href='<?= site_url('pegawai') ?>' class='nav-link'>
                                <i class='nav-icon fas fa-user'></i>
                                <p>
                                    Pegawai
                                </p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='<?= site_url('daftar_lamaran') ?>' class='nav-link'>
                                <i class='nav-icon fas fa-envelope'></i>
                                <p>
                                    Daftar Lamaran
                                </p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='<?= site_url('jabatan') ?>' class='nav-link'>
                                <i class='nav-icon fas fa-chart-pie'></i>
                                <p>
                                    Jabatan
                                </p>
                            </a>
                        </li>
                    <?php } else { ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>