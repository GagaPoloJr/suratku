<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
    <style>
        a.disabled {
  pointer-events: none;
  cursor: default;
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
                <?php foreach ($rw as $nama) { ?>
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> <?php echo $this->session->userdata('nama');
                                                                    echo "/";
                                                                    echo $nama->RW;
                                                                    echo " - ";
                                                                    echo $this->session->userdata('nama_lengkap')  ?></h1>
                        </div><!-- /.col -->
                    <?php } ?>
        
                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <h2>Berita Kelurahan Labuhbaru Barat</h2>
                             <br>   
                             <?php if  ( $this->session->userdata('level') == "2") { ?>
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahbaru"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Data Baru</a>
                             <?php } ?>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('danger')) : ?>
                                    <div data-aos="fade-up" class="alert alert-danger" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('danger'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <div style="width: 100%;" id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Tanggal Acara</th>
                                                        <th>Isi</th>
                                                        <th>File Berita</th>
                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($berita as $berita) {  ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $berita->judul; ?></td>
                                                            <td><?php echo $berita->tanggal_berita; ?></td>
                                                            <td><?php echo $berita->isi_berita; ?></td>
                                                            <td>
                                                                <?php if ($berita->upload_berita == NULL) { 
                                                                    echo "tidak ada file pendukung"; }
                                                                    else { ?>
                                                            <a class="btn btn-info" href="<?php echo base_url(). 'admin/download_berita/' .$berita->upload_berita; ?>">download file</a>
                                                                    <?php } ?>
                                                        </td>
                                                        </tr>
                                                        <?php $i++; ?>

                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Tanggal Acara</th>
                                                        <th>Isi</th>
                                                        <th>File Berita</th>
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
                                            <form id="myForm" action="<?php echo site_url('admin/berita') ?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="judul">Judul Berita</label>
                                                    <input class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" placeholder="Masukkan Judul Berita" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('judul') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="isi">Isi</label>
                                                        <textarea class="form-control" <?php echo form_error('isi') ? 'is-invalid' : '' ?>" placeholder="Masukkan isi" name="isi"></textarea>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('isi') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl">Tanggal Acara</label>
                                                    <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="date" name="tanggal" placeholder="Masukkan tanggal Acara" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('tanggal') ?>
                                                    </div>
                                                </div>
                                                <div  class="form-group">
                                                    <label for="exampleInputFile">Upload File Berita Acara* <span><small>jika ada</small></span></label>
                                                    <div class="custom-file">
                                                        <input name="upload_berita" type="file" class="custom-file-input <?php echo form_error('upload_berita') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                                        <label class="custom-file-label" for="exampleInputFile">Masukkan File Berita Acara</label>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('upload_berita') ?>
                                                        </div>
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
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


</body>

</html>