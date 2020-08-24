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
                        <h1 class="m-0 text-dark">Lihat Profil Admin</h1>
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
                <div class="row justify-content-center">

                    <div class="col-8">
                        <div class="card">
                        <?php if ($this->session->flashdata('warning')) : ?>
                                    <div class="alert alert-warning" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('warning'); ?>
                                    </div>
                                <?php endif; ?>
                            <div class="card-header">
                                <a href="<?php echo base_url("admin/index") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
                                <br>
                                <small style="color:grey">*tekan tombol kembali untuk kehalaman utama</small>
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
                                <form id="myForm" action="<?php echo site_url('admin/editProfil') ?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="id" value="<?php echo $user->id ?>" />
                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input readonly class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" value="<?php echo $user->username ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" value="<?php echo $user->nama_pjg ?>" readonly />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input  class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" value="<?php echo $user->password ?>" readonly />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <!-- <input class="btn btn-success" type="submit" name="btn" value="Simpan" /> -->
                                </form>
                            </div>
                            <div class="card-footer small text-muted">
                                * required fields
                            </div>
                            <p> <i>&nbsp;&nbsp;*jika ingin mengubah password atau username, silahkan hubungi admin</i></p>
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