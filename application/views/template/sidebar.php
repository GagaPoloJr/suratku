<style>
    nav.main-header.navbar.navbar-expand.navbar-dark.navbar-danger {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(141, 217, 64, 1) 0%, rgba(255, 233, 84, 1) 78%);


    }

    .navbar-dark .navbar-nav .nav-link {
        color: black;
    }

    a.brand-link.navbar-danger {
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(255, 233, 84, 1) 0%, rgba(141, 217, 64, 1) 78%);
    }

    .widget-user .widget-user-header {
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(141, 217, 64, 1) 0%, rgba(255, 233, 84, 1) 78%);
        color: black !important;
    }

    .sidebar-light-danger .nav-sidebar>.nav-item>.nav-link.active {
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(141, 217, 64, 1) 0%, rgba(255, 233, 84, 1) 78%);

        color: black;
    }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-danger">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() . 'admin' ?>" class="brand-link navbar-danger">
        <img src="<?php echo base_url("dist/img/pku-logo.png") ?>" alt="AdminLTE PKU Logo" class="brand-image  elevation-3" style="opacity: .8">
        <span class="brand-text " style="color: black;">Kel. LBB Pekanbaru</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <?php if ($this->session->userdata('level') == '1') : ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex active">
                <div class="image">
                    <img src="<?php echo base_url("dist/img/avatar5.png") ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info ">
                    <a href="<?php echo base_url('admin/editProfil/' . $this->session->userdata('id')) ?>" class="d-block ">Admin</a>
                </div>
            </div>
        <?php elseif ($this->session->userdata('level') == '2') : ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex active">
                <div class="image">
                    <img src="<?php echo base_url("dist/img/avatar5.png") ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/user') ?>" class="d-block">Admin</a>
                </div>
            </div>
            <div class=" user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url("dist/img/avatar04.png") ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/tampil_data_rt') ?>" class="d-block">Data RT</a>
                </div>
            </div>
        <?php endif; ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/index') ?>" class="nav-link <?php if ($this->uri->segment(2) == "index") {
                                                                                        echo "active";
                                                                                    } ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-header">SISTEM INFORMASI ARSIP</li>
                <?php if ($this->session->userdata('level') == '1') : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/warga') ?>" class="nav-link <?php if ($this->uri->segment(2) == "warga") {
                                                                                            echo "active";
                                                                                        } ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Data Warga
                            </p>
                        </a>
                    </li>
                <?php elseif ($this->session->userdata('level') == '2') : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/lurah') ?>" class="nav-link <?php if ($this->uri->segment(2) == "lurah") {
                                                                                            echo "active";
                                                                                        } ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Data Masuk
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-header">INFORMASI ACARA</li>

                <li class="nav-item">
                    <a href="<?php echo base_url('admin/berita') ?>" class="nav-link <?php if ($this->uri->segment(2) == "berita") {
                                                                                            echo "active";
                                                                                        } ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <?php if ($this->session->userdata('level') == '2') : ?>
                    <li class="nav-header">Kegiatan</li>

                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/kegiatan') ?>" class="nav-link <?php if ($this->uri->segment(2) == "kegiatan") {
                                                                                                echo "active";
                                                                                            } ?>">
                            <i class="nav-icon fas fa-image"></i>
                            <p>
                                Galeri Kegiatan
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('level') == '2') : ?>
                    <li class="nav-header">Artikel</li>

                    <li class="nav-item">
                        <a href="<?php echo base_url('article/post') ?>" class="nav-link <?php if ($this->uri->segment(2) == "post") {
                                                                                                echo "active";
                                                                                            } ?>">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Post Artikel
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>