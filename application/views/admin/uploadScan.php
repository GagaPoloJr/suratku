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
                        <h1 class="m-0 text-dark">Upload Scan</h1>
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
                                <a href="<?php echo base_url("admin/scan") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                <form id="myForm" action="<?php echo base_url('admin/uploadScan/' . $scan->id) ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $scan->id ?>" />
                                    <input type="hidden" name="nama" value="<?php echo $scan->nama ?>" />
                                    <input type="hidden" name="uraian" value="<?php echo $scan->uraian ?>" />
                                    <input type="hidden" name="tanggal" value="<?php echo $scan->tanggal ?>" />
                                    <input type="hidden" name="sk" value="<?php echo $scan->sk ?>" />
                                    <input type="hidden" name="jenis" value="<?php echo $scan->jenis ?>" />
                                    <input type="hidden" name="kota" value="<?php echo $scan->kota ?>" />
                                    <input type="hidden" name="jumlah" value="<?php echo $scan->jumlah ?>" />
                                    <input type="hidden" name="petugas" value="<?php echo $scan->petugas ?>" />
                                    <input type="hidden" name="old_datask" value="<?php echo $scan->datask ?>" />
                                    <input type="hidden" name="old_datadukung" value="<?php echo $scan->datadukung ?>" />
                                    <div class="form-group">
                                        <label for="kode">Kode*</label>
                                        <input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Masukkan Kode" value="<?php echo $scan->kode ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kode') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Data SK*</label>
                                        <div class="custom-file">
                                            <input name="datask" type="file" class="custom-file-input <?php echo form_error('datask') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                            <label class="custom-file-label" for="exampleInputFile">Masukkan File Data SK</label>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('datask') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Data Dukung*</label>
                                        <div class="custom-file">
                                            <input name="datadukung" type="file" class="custom-file-input <?php echo form_error('datadukung') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                            <label class="custom-file-label" for="exampleInputFile">Masukkan File Data Dukung</label>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('datadukung') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisdok">Jenis Dokumen*</label>
                                        <input class="form-control <?php echo form_error('jenisdok') ? 'is-invalid' : '' ?>" type="text" name="jenisdok" placeholder="Masukkan Jenis Dokumen" value="<?php echo $scan->jenisdok ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenisdok') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keadaan">Keadaan Dokumen*</label>
                                        <input class="form-control <?php echo form_error('keadaan') ? 'is-invalid' : '' ?>" type="text" name="keadaan" placeholder="Masukkan Keadaan Dokumen" value="<?php echo $scan->keadaan ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keadaan') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dus">Dus*</label>
                                        <input class="form-control <?php echo form_error('dus') ? 'is-invalid' : '' ?>" type="text" name="dus" placeholder="Masukkan Dus" value="<?php echo $scan->dus ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('dus') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="urut">No Definitif*</label>
                                        <input class="form-control <?php echo form_error('urut') ? 'is-invalid' : '' ?>" type="text" name="urut" placeholder="Masukkan No Definitif" value="<?php echo $scan->urut ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('urut') ?>
                                        </div>
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