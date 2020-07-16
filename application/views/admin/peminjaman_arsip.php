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
                        <h1 class="m-0 text-dark">Peminjaman Arsip Vital DPMPTSP</h1>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-header">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahbaru"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Data Baru</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                    <button aria-label="Close" data-dismiss="alert" class="close" type="button" ><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Peminjaman</th>
                                                        <th>Tanggal Peminjaman</th>
                                                        <th>Nama Peminjam</th>
                                                        <th>NIP</th>
                                                        <th>Unit/Seksi</th>
                                                        <th>Nama Dokumen</th>
                                                        <th>Kode Berkas</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($peminjaman as $p) { ?>
                                                        <tr>
                                                            <td><?php echo $p->id; ?></td>
                                                            <td><?php echo $p->kode; ?></td>
                                                            <td><?php echo $p->tanggal; ?></td>
                                                            <td><?php echo $p->nama; ?></td>
                                                            <td><?php echo $p->nip; ?></td>
                                                            <td><?php echo $p->unit; ?></td>
                                                            <td><?php echo $p->dokumen; ?></td>
                                                            <td><?php echo $p->berkas; ?></td>
                                                            <td><?php echo $p->keterangan; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('admin/detailPeminjaman/' . $p->id) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                                                <a href="<?php echo site_url('admin/editPeminjaman/' . $p->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                                <a onclick="deleteConfirm('<?php echo site_url('admin/deletePeminjaman/' . $p->id) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Peminjaman</th>
                                                        <th>Tanggal Peminjaman</th>
                                                        <th>Nama Peminjam</th>
                                                        <th>NIP</th>
                                                        <th>Unit/Seksi</th>
                                                        <th>Nama Dokumen</th>
                                                        <th>Kode Berkas</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="tambahbaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="myForm" action="<?php echo site_url('admin/peminjaman') ?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="kode">Kode*</label>
                                                    <input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Masukkan Kode" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kode') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal Peminjaman*</label>
                                                    <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="text" name="tanggal" placeholder="Masukkan Tanggal" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('tanggal') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama Peminjam*</label>
                                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Peminjam" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nip">NIP*</label>
                                                    <input class="form-control <?php echo form_error('nip') ? 'is-invalid' : '' ?>" type="text" name="nip" placeholder="Masukkan NIP" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nip') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="unit">Unit/Seksi*</label>
                                                    <input class="form-control <?php echo form_error('unit') ? 'is-invalid' : '' ?>" type="text" name="unit" placeholder="Masukkan Unit/Seksi" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('unit') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dokumen">Nama Dokumen*</label>
                                                    <input class="form-control <?php echo form_error('dokumen') ? 'is-invalid' : '' ?>" type="text" name="dokumen" placeholder="Masukkan Nama Dokumen" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('dokumen') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="berkas">Kode Berkas*</label>
                                                    <input class="form-control <?php echo form_error('berkas') ? 'is-invalid' : '' ?>" type="text" name="berkas" placeholder="Masukkan Kode Berkas" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('berkas') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan">Keterangan*</label>
                                                    <input class="form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" type="text" name="keterangan" placeholder="Masukkan Keterangan" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('keterangan') ?>
                                                    </div>
                                                </div>
                                                <div class="small text-muted">
                                                    * required fields
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>