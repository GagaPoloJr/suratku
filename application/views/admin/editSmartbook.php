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
                        <h1 class="m-0 text-dark">Detail Smartbook</h1>
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
                                <a href="<?php echo base_url("admin/smartbook") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                <form id="myForm" action="<?php echo site_url('admin/editSmartbook') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $smartbook->id ?>" />
                                    <input type="hidden" name="kode" value="<?php echo $smartbook->kode ?>" />
                                    <input type="hidden" name="datask" value="<?php echo $smartbook->datask ?>" />
                                    <input type="hidden" name="datadukung" value="<?php echo $smartbook->datadukung ?>" />
                                    <input type="hidden" name="dus" value="<?php echo $smartbook->dus ?>" />
                                    <input type="hidden" name="jenisdok" value="<?php echo $smartbook->jenisdok ?>" />
                                    <input type="hidden" name="keadaan" value="<?php echo $smartbook->keadaan ?>" />
                                    <input type="hidden" name="urut" value="<?php echo $smartbook->urut ?>" />
                                    <input type="hidden" name="old_datask" value="<?php echo $smartbook->datask ?>" />
                                    <input type="hidden" name="old_datadukung" value="<?php echo $smartbook->datadukung ?>" />
                                    <div class="form-group">
                                        <label for="nama">Nama*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $smartbook->nama ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian*</label>
                                        <input class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" type="text" name="uraian" placeholder="Masukkan Uraian" value="<?php echo $smartbook->uraian ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('uraian') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal*</label>
                                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="text" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo $smartbook->tanggal ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sk">No SK*</label>
                                        <input class="form-control <?php echo form_error('sk') ? 'is-invalid' : '' ?>" type="text" name="sk" placeholder="Masukkan No SK" value="<?php echo $smartbook->sk ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('sk') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Izin*</label>
                                        <input class="form-control <?php echo form_error('jenis') ? 'is-invalid' : '' ?>" type="text" name="jenis" placeholder="Masukkan Jenis SK" value="<?php echo $smartbook->jenis ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota*</label>
                                        <input class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" type="text" name="kota" placeholder="Masukkan Kota" value="<?php echo $smartbook->kota ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kota') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah*</label>
                                        <input class="form-control <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" type="text" name="jumlah" placeholder="Masukkan Jumlah" value="<?php echo $smartbook->jumlah ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlah') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="petugas">Penanggung Jawab*</label>
                                        <input class="form-control <?php echo form_error('petugas') ? 'is-invalid' : '' ?>" type="text" name="petugas" placeholder="Masukkan Nama Penanggung Jawab" value="<?php echo $smartbook->petugas ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('petugas') ?>
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