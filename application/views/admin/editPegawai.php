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
                        <h1 class="m-0 text-dark">Edi Data Pegawai</h1>
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
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url("admin/tampil_data_pegawai") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                <form id="myForm" action="<?php echo base_url('admin/editPegawai') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input type="text" name="id" value="<?php echo $user->id ?>" hidden>
                                    <div class="form-group">
                                        <label for="nama_pjg">Nama Lengkap*</label>
                                        <input class="form-control <?php echo form_error('nama_pjg') ? 'is-invalid' : '' ?>" type="text" name="nama_pjg" value="<?php echo $user->nama_pjg ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_pjg') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_rt">Nama RT / Jabatan*</label> <br> <small>*contoh: RT 01 / Staff jika anggota kelurahan</small>
                                        <input class="form-control <?php echo form_error('nama_rt') ? 'is-invalid' : '' ?>" type="text" name="nama_rt" value="<?php echo $user->nama ?>" readonly />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_rt') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rw">RW*</label>
                                        <p style="color: grey;"><i>*Jika yang ingin ditambahkan adalah admin atau staff, pilih opsi tidak ada</i></p>

                                        <select name="rw" class="form-control" id="rw">
                                            <option value="">--pilih RW--</option>
                                            <?php if ($user->id_rw == 0) : ?>
                                                <option value="0" selected>Tidak ada</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" value="<?php echo $user->username ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" value="<?php echo $user->password ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <?php if ($user->id ==  2) { ?>
                                    <?php } else { ?>
                                        <div class="form-group">
                                            <label for="password">Level*</label>
                                            <select name="level" class="form-control" id="level">
                                                <option value="">--pilih level--</option>
                                                <?php if ($user->level == 1) : ?>
                                                    <option value="1" selected>RT atau RW</option>
                                                    <option value="2">Admin atau Staff</option>
                                                <?php endif ?>
                                                <?php if ($user->level == 2) : ?>
                                                    <option value="1">RT atau RW</option>
                                                    <option value="2" selected>Admin atau Staff</option>
                                                <?php endif ?>
                                            </select>
                                        </div>
                                    <?php } ?>

                                    <input class="btn btn-success" type="submit" name="btn" value="Update" />
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