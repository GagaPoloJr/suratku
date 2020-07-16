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
                        <h1 class="m-0 text-dark">Detail Kode Yanzin</h1>
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
                                <a href="<?php echo base_url("admin/kode") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                <form id="myForm" action="<?php echo site_url('admin/editKode') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $kode->id ?>" disabled='' />
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Masukkan Kode" value="<?php echo $kode->kode ?>" disabled='' />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kode') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="namafile">Nama File</label>
                                        <input class="form-control <?php echo form_error('namafile') ? 'is-invalid' : '' ?>" type="text" name="namafile" placeholder="Masukkan Nama File" value="<?php echo $kode->namafile ?>" disabled='' />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('namafile') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="petugas">Penanggung Jawab</label>
                                        <input class="form-control <?php echo form_error('petugas') ? 'is-invalid' : '' ?>" type="text" name="petugas" placeholder="Masukkan Nama Petugas" value="<?php echo $kode->petugas ?>" disabled='' />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('petugas') ?>
                                        </div>
                                    </div>
                                </form>
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