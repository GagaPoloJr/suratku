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
                                <form id="myForm" action="<?php echo site_url('admin/editScan') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $smartbook->id ?>" />
                                    <div class="form-group">
                                        <label for="kode">Kode*</label>
                                        <input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Kode Belum Tersedia" value="<?php echo $smartbook->kode ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kode') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $smartbook->nama ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian*</label>
                                        <input class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" type="text" name="uraian" placeholder="Masukkan Uraian" value="<?php echo $smartbook->uraian ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('uraian') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal*</label>
                                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="text" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo $smartbook->tanggal ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sk">No SK*</label>
                                        <input class="form-control <?php echo form_error('sk') ? 'is-invalid' : '' ?>" type="text" name="sk" placeholder="Masukkan No SK" value="<?php echo $smartbook->sk ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('sk') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Izin*</label>
                                        <input class="form-control <?php echo form_error('jenis') ? 'is-invalid' : '' ?>" type="text" name="jenis" placeholder="Masukkan Jenis SK" value="<?php echo $smartbook->jenis ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota*</label>
                                        <input class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" type="text" name="kota" placeholder="Masukkan Kota" value="<?php echo $smartbook->kota ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kota') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah*</label>
                                        <input class="form-control <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" type="text" name="jumlah" placeholder="Masukkan Jumlah" value="<?php echo $smartbook->jumlah ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlah') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="petugas">Penanggung Jawab*</label>
                                        <input class="form-control <?php echo form_error('petugas') ? 'is-invalid' : '' ?>" type="text" name="petugas" placeholder="Masukkan Nama Penanggung Jawab" value="<?php echo $smartbook->petugas ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('petugas') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datask">Data SK*</label>
                                        <a href="<?php echo base_url ('upload/data/' . $smartbook->datask) ?>" class="float-right btn btn-xs btn-success">Download</a>
                                        <input class="form-control <?php echo form_error('datask') ? 'is-invalid' : '' ?>" type="text" name="datask" placeholder="Data SK Belum Tersedia" value="<?php echo $smartbook->datask ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('datask') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datadukung">Data Dukung*</label>
                                        <a href="<?php echo base_url ('upload/data/' . $smartbook->datadukung) ?>" class="float-right btn btn-xs btn-success">Download</a>
                                        <input class="form-control <?php echo form_error('datadukung') ? 'is-invalid' : '' ?>" type="text" name="datadukung" placeholder="Data Dukung Belum Tersedia" value="<?php echo $smartbook->datadukung ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('datadukung') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisdok">Jenis Dokumen*</label>
                                        <input class="form-control <?php echo form_error('jenisdok') ? 'is-invalid' : '' ?>" type="text" name="jenisdok" placeholder="Jenis Dokumen Belum Tersedia" value="<?php echo $smartbook->jenisdok ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenisdok') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keadaan">Keadaan Dokumen*</label>
                                        <input class="form-control <?php echo form_error('keadaan') ? 'is-invalid' : '' ?>" type="text" name="keadaan" placeholder="Keadaan Dokumen Belum Tersedia" value="<?php echo $smartbook->keadaan ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keadaan') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dus">Dus*</label>
                                        <input class="form-control <?php echo form_error('dus') ? 'is-invalid' : '' ?>" type="text" name="dus" placeholder="Dus Belum Tersedia" value="<?php echo $smartbook->dus ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('dus') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="urut">No Definitif*</label>
                                        <input class="form-control <?php echo form_error('urut') ? 'is-invalid' : '' ?>" type="text" name="urut" placeholder="No Urut Belum Tersedia" value="<?php echo $smartbook->urut ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('urut') ?>
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