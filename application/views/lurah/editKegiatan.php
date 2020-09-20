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
                        <h1 class="m-0 text-dark">Tambah Galeri</h1>
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
                                <a href="<?php echo base_url("admin/kegiatan") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
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
                                <form id="myForm" action="<?php echo base_url('admin/editGaleri') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input hidden type="text" name="id" value="<?php echo $galeri->id_galeri ?>">
                                    <div class="form-group">
                                        <label for="judul">Judul Galeri*</label>
                                        <input class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" value="<?php echo $galeri->judul ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('judul') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="image">Upload Thumbnail</span>
                                        </div>
                                        <input name="old_image" type="text" value="<?php echo $galeri->gambar_galeri ?>" hidden>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="image">Choose file Image</label>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label for="link">Link Google Drive</label>
                                        <input class="form-control <?php echo form_error('link') ? 'is-invalid' : '' ?>" type="text" name="link" value="<?php echo $galeri->link_galeri ?>" />
                                       
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