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
                        <h1 class="m-0 text-dark">Detail Peminjaman</h1>
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
                                <a href="<?php echo base_url("admin/peminjaman") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                    <input type="hidden" name="id" value="<?php echo $peminjaman->id ?>" disabled="" />
                                    <div class="form-group">
                                        <label for="kode">Kode*</label>
                                        <input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Masukkan Kode" value="<?php echo $peminjaman->kode ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kode') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Peminjaman*</label>
                                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="text" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo $peminjaman->tanggal ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengembalian">Tanggal Pengembalian*</label>
                                        <input class="form-control <?php echo form_error('pengembalian') ? 'is-invalid' : '' ?>" type="text" name="pengembalian" placeholder="Masukkan pengembalian" value="<?php echo $peminjaman->pengembalian ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pengembalian') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Peminjam*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Peminjam" value="<?php echo $peminjaman->nama ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP*</label>
                                        <input class="form-control <?php echo form_error('nip') ? 'is-invalid' : '' ?>" type="text" name="nip" placeholder="Masukkan NIP" value="<?php echo $peminjaman->nip ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nip') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="unit">Unit/Seksi*</label>
                                        <input class="form-control <?php echo form_error('unit') ? 'is-invalid' : '' ?>" type="text" name="unit" placeholder="Masukkan Unit/Seksi" value="<?php echo $peminjaman->unit ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('unit') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dokumen">Nama Dokumen*</label>
                                        <input class="form-control <?php echo form_error('dokumen') ? 'is-invalid' : '' ?>" type="text" name="dokumen" placeholder="Masukkan Nama Dokumen" value="<?php echo $peminjaman->dokumen ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('dokumen') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">Kode Berkas*</label>
                                        <input class="form-control <?php echo form_error('berkas') ? 'is-invalid' : '' ?>" type="text" name="berkas" placeholder="Masukkan Kode Berkas" value="<?php echo $peminjaman->berkas ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('berkas') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan*</label>
                                        <input class="form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" type="text" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo $peminjaman->keterangan ?>" disabled="" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keterangan') ?>
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