<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
    <style>
        #togglePassword {
            cursor: pointer;
        }
    </style>
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
                        <h1 class="m-0 text-dark">Lihat data <?php echo $user->nama_pjg ?></h1>
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
                                <a href="<?php echo base_url("admin/tampil_data_rt") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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

                                    <div class="form-group">
                                        <label for="username">Nama Lengkap*</label>
                                        <input class="form-control <?php echo form_error('nama_pjg') ? 'is-invalid' : '' ?>" type="text" name="nama_pjg" value="<?php echo $user->nama_pjg ?>" readonly />
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

                                        <select name="rw" class="form-control" id="rw" disabled>
                                            <option value="">--pilih RW--</option>
                                            <?php if ($user->id_rw == 1) : ?>
                                                <option value="1" selected>RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>

                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 2) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2" selected>RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 3) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3" selected>RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 4) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4" selected>RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 5) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5" selected>RW 5</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 6) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6" selected>RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 7) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7" selected>RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 8) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8" selected>RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 9) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9" selected>RW 9</option>
                                                <option value="10">RW 10</option>
                                            <?php endif; ?>
                                            <?php if ($user->id_rw == 10) : ?>
                                                <option value="1">RW 1</option>
                                                <option value="2">RW 2</option>
                                                <option value="3">RW 3</option>
                                                <option value="4">RW 4</option>
                                                <option value="5">RW 5</option>
                                                <option value="6">RW 6</option>
                                                <option value="7">RW 7</option>
                                                <option value="8">RW 8</option>
                                                <option value="9">RW 9</option>
                                                <option value="10" selected>RW 10</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" value="<?php echo $user->username ?>" readonly />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" value="<?php echo $user->password ?>" readonly />
                                        <button type="button" id="" class="btn btn-default" name="dynamic"><span class="fas fa-eye" aria-hidden="true"></span></button>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>


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
    <script>
        var myButton = document.getElementsByName('dynamic');
        var myInput = document.getElementsByName('password');
        myButton.forEach(function(element, index) {
            element.onclick = function() {
                'use strict';

                if (myInput[index].type == 'password') {
                    myInput[index].setAttribute('type', 'text');
                    element.firstChild.textContent = 'Hide';
                    element.firstChild.className = "";

                } else {
                    myInput[index].setAttribute('type', 'password');
                    element.firstChild.textContent = '';
                    element.firstChild.className = "fas fa-eye";
                }
            }
        })

    </script>
    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>