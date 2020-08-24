<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php $this->load->view('template/navbar.php'); ?>
    <?php $this->load->view('template/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tambah User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row align-items-center">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url("admin") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form id="myForm" action="<?php echo base_url('admin/user') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                    <div class="form-group">
                                        <label for="username">Nama Lengkap*</label>
                                        <input class="form-control <?php echo form_error('nama_pjg') ? 'is-invalid' : '' ?>" type="text" name="nama_pjg" placeholder="Masukkan Nama Lengkap" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_pjg') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Nama RT / Jabatan*</label> <br> <small>*contoh: RT 01 / Staff jika anggota kelurahan</small>
                                        <input class="form-control <?php echo form_error('nama_rt') ? 'is-invalid' : '' ?>" type="text" name="nama_rt" placeholder="Masukkan RT Berapa / Jabatan" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_rt') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="rw">RW*</label>
                                    <p style="color: grey;" ><i>*Jika yang ingin ditambahkan adalah admin atau staff, pilih opsi tidak ada</i></p>

                                    <select name="rw" class="form-control" id="rw">
                                                        <option value="">--pilih RW--</option>
                                                        <option value="0">Tidak ada</option>
                                                        <option value="1">RW 1</option>
                                                        <option value="2">RW 2</option>
                                                        <option value="3">RW 3</option>
                                                        <option value="4">RW 4</option>
                                                        <option value="5">RW 5</option>
                                                        <option value="6">RW 6</option>
                                                        <option value="7">RW 7</option>
                                                        <option value="8">RW 8</option>
                                                        <option value="9">RW 9</option>
                                                        <option value="10">RW 10</option>

                                                     
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" placeholder="Masukkan username" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="Masukkan Password" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="password">Level*</label>

                                    <select name="level" class="form-control" id="level">
                                                        <option value="">--pilih level--</option>
                                                        <option value="1">RT atau RW</option>
                                                        <option value="2">Admin atau Staff</option>
                                                     
                                                    </select>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                </form>
                            </div>
                            <div class="card-footer small text-muted">
                                * required fields
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>