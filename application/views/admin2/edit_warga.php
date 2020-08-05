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
                        <h1 class="m-0 text-dark">Detail Data Warga || <?php echo $warga->nama; ?></h1>
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
                   
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url("admin/warga") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
                                <br>
                                <small style="color:grey">*Jika tidak ingin mengubah data, tekan tombol kembali</small>
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
                                <form id="myForm" action="<?php echo site_url('admin/editWarga') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $warga->id_warga ?>" />
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $warga->nama ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK/No KTP*</label>
                                        <input class="form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" name="nik" placeholder="Masukkan NIK" value="<?php echo $warga->nik ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nik') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat*</label>
                                        <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $warga->alamat ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Kelamin*</label>
                                        <select name="jenis" class="form-control" id="jenis1">
                                            <option value="">--pilih jenis kelamin--</option>
                                            <?php if ($warga->j_kelamin == "1") { ?>
                                                <option value="1" selected>Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            <?php } ?>
                                            <?php if ($warga->j_kelamin == "2") { ?>
                                                <option value="1">Laki-Laki</option>
                                                <option value="2" selected>Perempuan</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lahir">Tempat Lahir*</label>
                                        <input class="form-control <?php echo form_error('lahir') ? 'is-invalid' : '' ?>" type="text" name="lahir" value="<?php echo $warga->tempat; ?>" placeholder="Masukkan Tempat Lahir" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('lahir') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                                    <label for="tgl">tanggal lahir*</label>
                                                    <input class="form-control <?php echo form_error('tgl') ? 'is-invalid' : '' ?>" type="date" name="tgl" placeholder="Masukkan tanggal lahir" value="<?php echo $warga->tgl_lahir; ?>" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('tgl') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status Perkawinan*</label>
                                                    <select name="status" class="form-control" id="status">
                                                        <option value="">--pilih Status Perkawinan--</option>
                                                        <?php if ($warga->status == "1") { ?>
                                                        <option value="1" selected>Kawin</option>
                                                        <option value="2">belum kawin</option>
                                                        <?php } ?>
                                                        <?php if ($warga->status == "2") { ?>
                                                        <option value="1" >Kawin</option>
                                                        <option value="2" selected>belum kawin</option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('status') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="agama">Agama*</label>
                                                    <select name="agama" class="form-control" id="agama">
                                                        <option value="">--pilih Agama--</option>
                                                        <?php if ($warga->agama == "1") { ?>
                                                        <option value="1" selected>Islam</option>
                                                        <option value="2">Kristen</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4">Buddha</option>
                                                        <option value="5">lainnya</option>
                                                        <?php } ?>
                                                        <?php if ($warga->agama == "2") { ?>
                                                        <option value="1" >Islam</option>
                                                        <option value="2" selected>Kristen</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4">Buddha</option>
                                                        <option value="5">lainnya</option>
                                                        <?php } ?>
                                                        <?php if ($warga->agama == "3") { ?>
                                                        <option value="1" >Islam</option>
                                                        <option value="2">Kristen</option>
                                                        <option value="3" selected>Hindu</option>
                                                        <option value="4">Buddha</option>
                                                        <option value="5">lainnya</option>
                                                        <?php } ?>
                                                        <?php if ($warga->agama == "4") { ?>
                                                        <option value="1" >Islam</option>
                                                        <option value="2">Kristen</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4" selected>Buddha</option>
                                                        <option value="5">lainnya</option>
                                                        <?php } ?>
                                                        <?php if ($warga->agama == "5") { ?>
                                                        <option value="1" >Islam</option>
                                                        <option value="2">Kristen</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4">Buddha</option>
                                                        <option value="5" selected>lainnya</option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('agama') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan*</label>
                                                    <input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="<?php echo $warga->pekerjaan; ?>" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('pekerjaan') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kebutuhan">Kebutuhan*</label>
                                                    <select name="kebutuhan" class="form-control select2bs4" id="kebutuhan">
                                                        <option>--pilih Kebutuhan Surat--</option>
                                                        <?php if ($warga->kebutuhan == "1") { ?>
                                                        <option value="1" selected>Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "2") { ?>
                                                        <option value="1" >Kartu Keluarga</option>
                                                        <option value="2" selected>Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "3") { ?>
                                                        <option value="1" >Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3" selected>Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "4") { ?>
                                                        <option value="1" >Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4" selected>Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "5") { ?>
                                                        <option value="1" selected>Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5" selected>Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "6") { ?>
                                                        <option value="1" selected>Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6" selected>Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                        <?php if ($warga->kebutuhan == "7") { ?>
                                                        <option value="1" selected>Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7" selected>Surat Pengantar Pendatang Baru</option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kebutuhan') ?>
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