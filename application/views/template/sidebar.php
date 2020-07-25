        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-light-danger">
            <!-- Brand Logo -->
            <a href="#" class="brand-link navbar-danger">
                <img src="<?php echo base_url("dist/img/prov.png") ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="color: white;">Kel. LBB Pekanbaru</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                
                <?php if ($this->session->userdata('level') == '1') : ?>
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="<?php echo base_url("dist/img/avatar5.png") ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="<?php echo base_url('admin/user') ?>" class="d-block">Admin</a>
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
                            <a href="<?php echo base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(2) == "home") {
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
                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url('admin/smartbook') ?>" class="nav-link <?php if ($this->uri->segment(2) == "smartbook") {
                                                                                                    echo "active";
                                                                                                } ?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Data Smartbook Yanzin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/scan') ?>" class="nav-link <?php if ($this->uri->segment(2) == "scan") {
                                                                                                echo "active";
                                                                                            } ?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Data Scan DPMPTSP
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url('admin/peminjaman') ?>" class="nav-link <?php if ($this->uri->segment(2) == "peminjaman") {
                                                                                                        echo "active";
                                                                                                    } ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Peminjaman Arsip Vital
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url('admin/pengembalian') ?>" class="nav-link <?php if ($this->uri->segment(2) == "pengembalian") {
                                                                                                        echo "active";
                                                                                                    } ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pengembalian Arsip Vital
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">INFORMASI KODE YANZIN</li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url('admin/kode') ?>" class="nav-link <?php if ($this->uri->segment(2) == "kode") {
                                                                                                echo "active";
                                                                                            } ?>">
                                <i class="nav-icon fas fa-code"></i>
                                <p>
                                    Kode Yanzin
                                </p>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>